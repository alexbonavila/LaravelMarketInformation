<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;

/**
 * Class HistoryController
 * @package App\Http\Controllers
 */
class HistoryController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $query = DB::table('exchange_history')
            ->select('symbol', 'dates', 'values')
            ->where("symbol","=",$id)
            ->get();

        if(isset($query[0]->symbol)&&isset($query[0]->dates)&&isset($query[0]->values)){
            $symbol= $query[0]->symbol;
            $dates= $query[0]->dates;
            $values= $query[0]->values;

            $symbol=json_encode($symbol);

            return view('history', ['dates' => $dates, 'values'=> $values,'symbol'=> $symbol]);
        }else{
            return view('errors.dades');
        }

    }


}
