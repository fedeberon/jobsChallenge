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

Route::get('/documentation/statistics', 'StatisticsController@TotalJobs');


Route::get('/register', function () {
    return view('register');
});

Route::post('/store', "UserController@store");


//Route::get('/statistics', function () {
//    return view('statistics');
//});
