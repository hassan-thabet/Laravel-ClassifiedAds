<?php
use Illuminate\Support\Facades\Route;




Route::group(['namespace' => 'DashboardControllers' , 'middleware' => 'guest:admin'] , function (){
    Route::get('/', 'LoginController@index')->name('login');
    Route::post('/', 'LoginController@login') ->name('admin.login');

});


Route::group(['namespace' => 'DashboardControllers' , 'middleware' => 'auth:admin'] , function (){
    Route::get('/home' , 'AdminController@index') ->name('admin.home');
    Route::get('/logout' , 'LoginController@logout') ->name('admin.logout');
});

Route::group([ 'middleware' => 'auth:admin'] , function (){
    Route::get('/products' , 'ProductController@index') ->name('admin.products');
    Route::get('/users' , 'UserController@index') ->name('admin.users');


});

Route::group([ 'middleware' => 'auth:admin'] , function (){
    Route::get('/categories' , 'CategoryController@index') ->name('admin.categories');
    Route::get('/create' , 'CategoryController@create') ->name('admin.create');
    Route::post('/store' , 'CategoryController@store') ->name('admin.store');



});

