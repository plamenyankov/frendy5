'use strict';
var adminApp = angular.module('admin', ['ngRoute','angularFileUpload']);
adminApp.config(function ($routeProvider, $locationProvider) {
    $routeProvider
        .when('/admin', {
            templateUrl: '/js/angular/pages/dashboard.html',
            controller: 'dashboard'
        })
        .when('/admin/products', {
            templateUrl: '/js/angular/pages/products.html',
            controller: 'mainCtrl'
        })
        .when('/admin/products/new', {
            templateUrl: '/js/angular/pages/productsNew.html',
            controller: 'productsNewCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });
    $locationProvider.html5Mode(true);
});
adminApp.service('socket', function () {
    return io.connect('http://127.0.0.1:3000');
});
adminApp.factory('productCache', function () {
    return  localStorage;
});
adminApp.directive('cuFocus', function () {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, el, attr, controller) {
            controller.$focused = false;
            el.bind('focus',function (e) {
                scope.$apply(function () {
                    controller.$focused = false;
                });
            }).bind('blur', function () {
                scope.$apply(function () {
                    controller.$focused = true;
                });
            });

        }
    }
});
adminApp.controller('dashboard', function ($scope) {

});

adminApp.controller('productsNewCtrl', function ($scope, $log, $http, $upload) {
    $scope.submit = function(form){
        if(form.$valid){
            var brand = $scope.product.brand;
            var model = $scope.product.model;
            var cat = $scope.product.cat;
            var qty = $scope.product.qty;
            var price = $scope.product.price;
            var descr = $scope.product.descr;
            var images = $scope.images;
            $http.post('/admin/products/new',
            {brand:brand,model:model,cat:cat,qty:qty,price:price,descr:descr,images:images}).success(function (data, status, headers, config) {
                console.log(config);
                console.log(data);
            });

        }
    }
    $scope.$watch('files', function () {
        $scope.upload($scope.files);
    });
$scope.images = [];
    $scope.delete = function(img){
        var index = $scope.images.indexOf(img);
        if (index > -1) {
            $scope.images.splice(index, 1);
        }
        $http.post('/admin/delete',{file:img}).success(function (data, status, headers, config) {
            console.log(config);
            console.log(data);
        });
    }
    $scope.upload = function (files) {
        if (files && files.length) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                $upload.upload({
                    url: '/admin/upload',
                    file: file
                }).progress(function (evt) {
                    var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                    $('#percent').text('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) {
                    $scope.images.push('/img/test/'+config.file.name);
                });
            }
        }
    };
});
adminApp.service('productService', function ($http, $log, $q) {
    return {
        getProducts: function () {
            var deffered = $q.defer();
            $http.get('/admin/productsList')
                .success(function (data, status, header, config) {
                    deffered.resolve(data);
                }).error(function (data, status, header, config) {
                    deffered.reject(status);
                })
            return deffered.promise;
        }
    }
});
adminApp.controller('mainCtrl', function ($scope, $log, $http, socket, $routeParams, productService) {
    $scope.page = $routeParams.page || 1;
    $scope.num = 5;
    productService.getProducts().then(function (data) {
        $scope.products = data;
    });

        socket.on('product.published', function (msg) {
            var message = JSON.parse(msg);
            var id = message.id;
            $log.log(id);
            $scope.products.push(message);
            $scope.$digest();
        });

        $scope.myOrder = 'id';
        $scope.reverse = true;
        $scope.cobyname = function () {
            $scope.myOrder = 'brand';
            $scope.ascDesc();
            $log.log($scope.myOrder);
        }
        $scope.ascDesc = function () {
            $scope.reverse = $scope.reverse == true ? false : true;
        }

    });
