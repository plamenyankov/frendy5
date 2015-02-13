<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//$redis = Illuminate\Support\Facades\Redis::connection();
//$redis->publish('users.registered','plamen');


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['namespace'=>'Admin','middleware' => 'auth'],function(){
    Route::controllers([
        'admin' => 'AdminController'
    ]);
});
Route::controllers([
    'user' => 'Admin\UserController'
]);


