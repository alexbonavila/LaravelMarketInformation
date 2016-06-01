<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', 'testController@testMethod');

/**
 * Route Download Information
*/
Route::get('download_info', 'DownloadInfoController@index');


/**
 * Route Calculator
 */
Route::get('calc', 'CalculatorController@index');
Route::get('calc_history', 'CalcHistController@index');

/**
 * Route In live
 */
Route::get('live', 'LiveInfoController@index');

