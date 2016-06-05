<?php


Route::group(['prefix' => 'api/'], function () {
    Route::post('calc/save', 'CalculatorApiController@store');
    Route::post('calc/getUserCalculs', 'CalculatorApiController@getUserCalculs');
    Route::post('history/getHistoryWithSymbol', 'HistoryApiController@getHistoryWithSymbol');
    Route::post('history/getHistoryOnlyDatesAndValues', 'HistoryApiController@getHistoryOnlyDatesAndValues');
});