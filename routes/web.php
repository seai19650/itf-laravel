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

#127.0.0.1:8000/home
Route::get('/home', function () {
    return view('home');
});

Route::post('/home', 'StudentController@store');

Route::get('/data', 'StudentController@showData');
