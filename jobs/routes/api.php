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

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::resource('operative', 'OperativeController')->middleware('jwt');
Route::resource('defender', 'DefenderController')->middleware('jwt');

Route::resource('application', 'ApplicationController');

Route::get('jobs/list/{fromDateTime}/{toDateTime}','MyJobController@findBetweenDateTimes');
Route::get('jobs/list/{fromDateTime}/{toDateTime}/{type}','MyJobController@findBetweenDateTimesAndType');
Route::get('jobs/list/{fromDateTime}/{toDateTime}/{type}/{status}','MyJobController@findBetweenDateTimesAndTypeAndStatus');
