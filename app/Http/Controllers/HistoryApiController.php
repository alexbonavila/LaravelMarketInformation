<?php

namespace App\Http\Controllers;

use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryApiController extends ApiGuardController
{

    protected $apiMethods = [
        'getYAxisRaw' =>[
            'keyAuthentication' => true
        ]
    ];


    public function getYAxisRaw(Request $request)
    {
        $symbol=$request->symbol_query;

        $query = DB::table('exchange_history')->select('values')->where('symbol','=',$symbol)->get();

        $query=$query[0]->values;

        $query=json_encode($query);

        $to_replace = array("[", "]");
        $query=str_replace($to_replace,"",$query);

        return $query;
    }
}
