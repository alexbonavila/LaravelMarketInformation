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

Route::get('profile', 'ProfileController@index');

/**
 * Route Download Information
*/
Route::get('download_info', 'DownloadInfoController@index');


/**
 * Routes Calculator
 */
Route::get('calc', 'CalculatorController@index');
Route::get('calc_history', 'CalcHistController@index');

/**
 * Route In live
 */
Route::get('live', 'LiveInfoController@index');

/**
 * Route History
 */
Route::get('history/{id}', 'HistoryController@index');