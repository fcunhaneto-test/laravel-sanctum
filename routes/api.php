<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registro', 'AuthenticatorController@register');
Route::post('login', 'AuthenticatorController@login');
Route::post('logout', 'Auth\LoginController@logout');


Route::middleware('auth:sanctum')->get('categorias', 'CategoryController@index');
Route::get('produtos', 'ProductController@index')->middleware();
