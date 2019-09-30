<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products','ProductController@index')->name('product.all');
Route::post('/store', 'ProductController@store')->name('product.store');
Route::put('/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/destroy/{id}', 'ProductController@destroy')->name('product.destroy');
