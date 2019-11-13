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

Route::get('/signIn', function () {
    return view('signIn');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/videos', function () {
    return view('videos');
});
Route::get('/pastS', function () {
    return view('pastS');
});
Route::get('/exercisePS', function () {
    return view('exercisePS');
});
Route::get('/lecturaPS', function () {
    return view('lecturaPS');
});
Route::get('/regularV', function () {
    return view('regularV');
});
Route::get('/vocabulary', function () {
    return view('vocabulary');
});
Route::get('/juegos', function () {
    return view('juegos');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/temas', function () {
    return view('temas');
});
Route::get('/temas2', function () {
    return view('temas2');
});
Route::get('/index', function () {
    return view('index');
});

Route::post('logINDB','Auth\LoginController@login')->name('logInDB');
Route::post('register','Auth\RegisterController@create')->name('register');
