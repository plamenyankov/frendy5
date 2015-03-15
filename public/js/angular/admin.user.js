var myApp = angular.module('adminUsers',[]);
myApp.controller('mainCtrl',function($scope,$log,$filter,$http){
$http.get('/admin/user')
    .success(function(e){
       $scope.users = e;
    });
});