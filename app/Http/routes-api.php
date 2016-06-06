<?php

/**
*Routes API
*/
Route::group(['prefix' => 'api/'], function () {
    //rutes calculadora
    Route::post('calc/save', 'CalculatorApiController@store');
    Route::post('calc/getUserCalculs', 'CalculatorApiController@getUserCalculs');

    //rutes Historic
    Route::post('history/getHistoryWithSymbol', 'HistoryApiController@getHistoryWithSymbol');
    Route::post('history/getHistoryOnlyDatesAndValues', 'HistoryApiController@getHistoryOnlyDatesAndValues');
});