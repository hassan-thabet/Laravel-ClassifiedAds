<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('categories','Api\CategoryController@index');
Route::get('categories/{category}','Api\CategoryController@show');

Route::get('products','Api\ProductController@index');
Route::get('products/{id}','Api\ProductController@show');

Route::post('auth/login' , 'Api\AuthController@login');
Route::post('auth/register' , 'Api\AuthController@register');

