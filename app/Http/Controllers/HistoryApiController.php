<?php

namespace App\Http\Controllers;

use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryApiController extends ApiGuardController
{

    protected $apiMethods = [
        'getHistoryWithSymbol' =>[
            'keyAuthentication' => true
        ],
        'getHistoryOnlyDatesAndValues'=>[
            'keyAuthentication' => true
        ]
    ];


    public function getHistoryWithSymbol(Request $request)
    {
        $symbol=$request->symbol_query;

        $query = DB::table('exchange_history')
            ->where('symbol','=',$symbol)
            ->get();

        return $query;
    }

    public function getHistoryOnlyDatesAndValues(Request $request)
    {
        $symbol=$request->symbol_query;

        $query = DB::table('exchange_history')
            ->select('symbol','dates','values')
            ->where('symbol','=',$symbol)
            ->get();

        return $query;
    }



}
