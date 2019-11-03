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