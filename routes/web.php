<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', 'FrontController@login')->name('login');


Route::group(['middleware' => 'App\Http\Middleware\LandingMiddleware'], function() {
    Route::get('/', 'FrontController@index')->name('home');
});


Route::group(['middleware' => 'App\Http\Middleware\LoginMiddleware'], function() {
    Route::post('/login', 'Auth\LoginController@store');
});