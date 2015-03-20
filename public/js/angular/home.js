'use strict';
var frendyApp = angular.module('home', ['ngRoute']);
frendyApp.config(function ($routeProvider, $locationProvider,$interpolateProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/js/angular/pages/home.html',
            controller: 'topProducts'
        })
//        .otherwise({
//            redirectTo: '/'
//        });
    $locationProvider.html5Mode(true);
    $interpolateProvider
        .startSymbol('[!').endSymbol('!]');
});
frendyApp.directive('productOffer',function(){
    return{
        scope:true,
        templateUrl:'/js/angular/directives/product.html',
        link:function(scope,el,attr){
            $(el[0]).find('.offer-info-bt .right .fi-list').bind('click',function(){
                var main = $(this).closest('.columns');
                main.find('.offer-info-top').toggle();
                main.find('.additional-info').toggle();
                main.find('.offer-info-bt').toggleClass('offer-info-bt-open');
                main.find('.offer-info-bt .offer-rating').toggle();
                main.find('.offer-info-bt .offer-shopping-info').toggle();
                main.toggleClass('light-up');
console.log(el.parent());
                if(main.siblings().hasClass('light-up')){
                    main.siblings('.light-up').find('.offer-info-top').show();
                    main.siblings('.light-up').find('.additional-info').hide();
                    main.siblings('.light-up').find('.offer-info-bt').toggleClass('offer-info-bt-open');
                    main.siblings('.light-up').find('.offer-info-bt .offer-shopping-info').toggle();
                    main.siblings('.light-up').find('.offer-info-bt .offer-rating').toggle();
                }
                main.siblings().removeClass('light-up');
                $('.additional-info li').on('click',function(){
                    $(this).css('border','1px solid #4e4e4e')
                        .siblings().css('border','none');
                })
            })
        }
    }
})
frendyApp.controller('topProducts',function($scope,$http,$log){
$http.get('/api/v.1/top').success(function(data, status, header, config) {
    $scope.products = data;
}).error(function (data, status, header, config) {
$log.error(header());
})
});