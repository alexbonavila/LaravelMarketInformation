<?php

namespace App\Console\AuxiliaryClasses;

use Carbon\Carbon;
use DB;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 31/05/16
 * Time: 12:48
 */
class DataBaseFunctions
{
    /**
     * Delete Old data and get list of symbols
     *
     * @param $table_truncate
     * @return array|static[]
     */
    public function truncateBDValuesAndGetNew($table_truncate)
    {
        DB::table($table_truncate)->truncate();

        $symbols = DB::table('companies')->select('symbol')->get();

        return $symbols;
    }

    /**
     * Persist data to MYSQL
     *
     * @param $data
     * @param $table
     */
    public function storeCompanyFollowTable($data, $table)
    {
        DB::table($table)->insert([
            [
                'symbol' => $data->Symbol,
                'name' => $data->Name,
                'lastPrice' => $data->LastPrice,
                'change' => round($data->Change, 2),
                'volume' => $data->Volume,
                'open' => $data->Open,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }

    /**
     * Persist data to MYSQL
     *
     * @param $data
     * @param $table
     */
    public function storeExchangeHistory($data, $table)
    {
        DB::table($table)->insert([
            [
                'symbol' => $data->Elements[0]->Symbol,
                'positions' => json_encode($data->Positions),
                'dates' => json_encode($data->Dates),
                'values' => json_encode($data->Elements[0]->DataSeries->close->values),
                'max_date' =>  $data->Elements[0]->DataSeries->close->maxDate,
                'min_date' => $data->Elements[0]->DataSeries->close->minDate,
                'min_value' => $data->Elements[0]->DataSeries->close->min,
                'max_value' =>  $data->Elements[0]->DataSeries->close->max,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }

    /**
     * @param $data
     */
    public function storeCompanies($data)
    {
        DB::table('companies')->insert([
            [
                'symbol' => $data->Symbol,
                'name' => $data->Name,
                'exchange' => $data->Exchange,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }

    /**
     * @return array|static[]
     */
    public function getAllDataFromExchangeHistory()
    {
        $company_history = DB::table('exchange_history')->get();

        return $company_history;
    }

}