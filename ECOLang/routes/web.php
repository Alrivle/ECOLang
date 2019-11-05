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

Route::get('/pastS', function () {
    return view('pastS');
});
Route::get('/exercisePS', function () {
    return view('exercisePS');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/videos', function () {
    return view('videos');
});

Route::get('/lecturaPS', function () {
    return view('lecturaPS');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signIn', function () {
    return view('signIn');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('logINDB','Auth\LoginController@login')->name('logInDB');
Route::post('register','Auth\RegisterController@create')->name('register');