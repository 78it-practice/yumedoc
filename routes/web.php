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

Route::get('/', function () {
    return view('welcome');
});

//ユーザ登録
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.get');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');
