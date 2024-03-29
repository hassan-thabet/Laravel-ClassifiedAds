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


////////// Products Routes
Route::group([ 'middleware' => 'auth:admin'] , function (){
    Route::get('/products' , 'ProductController@index') ->name('admin.products');

    Route::get('/pending-products' , 'ProductController@pendingIndex') ->name('admin.pending-products');
    Route::get('/sponsored-products' , 'ProductController@sponsoredIndex') ->name('admin.sponsored-products');
    Route::get('/create-product' , 'ProductController@create') ->name('admin.create-products');
    Route::post('/store-product' , 'ProductController@store') ->name('admin.store-products');

    Route::get('/changeStatus/{id}' , 'ProductController@changeStatus') ->name('admin.change-status');
    Route::get('/destroy/{id}' , 'ProductController@destroy') ->name('admin.destroy');
});

////////// Users Routes
Route::group([ 'middleware' => 'auth:admin'] , function (){
    Route::get('/users' , 'UserController@index') ->name('admin.users');
    Route::get('/new-user' , 'UserController@create') ->name('admin.user.create');
    Route::post('/new-user' , 'UserController@store') ->name('admin.user.store');

    Route::get('/updates' , 'UserController@updateIndex') ->name('admin.updates');
});


////////// Categories Routes
Route::group([ 'middleware' => 'auth:admin'] , function (){
    Route::get('/categories' , 'CategoryController@index') ->name('admin.categories');
    Route::get('/create' , 'CategoryController@create') ->name('admin.create');
    Route::post('/store' , 'CategoryController@store') ->name('admin.store');
    Route::get('/edit/{id}' , 'CategoryController@edit') ->name('admin.edit');
    Route::post('/update/{id}' , 'CategoryController@update') ->name('admin.update');
});


