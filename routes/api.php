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
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::get('index', 'API\PostController@index');
Route::post('store', 'API\PostController@store');
Route::get('show/{id}', 'API\PostController@show');
Route::post('update/{id}', 'API\PostController@update');
Route::delete('delete/{id}', 'API\PostController@destroy');
//Route::resource('posts', 'API\PostController');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('details', 'API\UserController@details');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
