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

Route::resource('/documentation', 'DocumentationController');


Route::get('/statistics', 'StatisticsController@totalJobs');

Route::get('/example', function () {
    return view('example');
});

Route::get('/about-us', function (){
    return view('about-us');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/store', "UserController@store");

