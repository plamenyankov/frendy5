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

Route::get('test',function(){
   $t = new App\Test(new App\User);
    return $t->getUsers();
});
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//,'middleware' => 'admin'
Route::group(['namespace'=>'Admin','middleware'=>'admin'],function(){
    Route::get('/admin','AdminController@index');
    Route::get('/admin/products','ProductsController@index');
    Route::get('/admin/productsList','ProductsController@getProducts');
    Route::get('/admin/products/new','ProductsController@create');
    Route::post('/admin/products/new','ProductsController@createProduct');
    Route::get('/admin/users', 'UserController@index');
    Route::get('/admin/user', 'UserController@getUsers');
    Route::post('/admin/upload','ProductsController@saveImage');
    Route::post('/admin/delete','ProductsController@deleteImage');
});


