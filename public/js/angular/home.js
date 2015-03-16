'use strict';
var frendyApp = angular.module('home', ['ngRoute']);
frendyApp.config(function ($routeProvider, $locationProvider,$interpolateProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/js/angular/pages/home.html',
            controller: 'topProducts'
        })
        .otherwise({
            redirectTo: '/'
        });
    $locationProvider.html5Mode(true);
    $interpolateProvider
        .startSymbol('[!').endSymbol('!]');
});

frendyApp.controller('topProducts',function($scope,$http){
$http.get('/api/v.1/top').success(function(data, status, header, config) {
    $scope.products = data;
}).error(function (data, status, header, config) {

})
});