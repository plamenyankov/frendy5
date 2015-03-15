var myApp = angular.module('adminProducts',[]);
myApp.controller('mainCtrl',function($scope,$log,$filter,$http,socket){
    $http.get('/admin/productsList')
        .success(function(e){
            $scope.products = e;
        });

    $scope.myOrder = 'id';
    $scope.reverse = true;
    $scope.cobyname = function(){
        $scope.myOrder = 'brand';
        $scope.ascDesc();
        $log.log($scope.myOrder);
    }
    $scope.ascDesc = function(){
        $scope.reverse = $scope.reverse == true?false:true;
    }

});
