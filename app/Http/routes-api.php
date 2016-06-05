<?php


Route::group(['prefix' => 'api/'], function () {
    Route::post('calc/save', 'CalculatorApiController@store');
    Route::post('history/getYAxisRaw', 'HistoryApiController@getYAxisRaw');
});