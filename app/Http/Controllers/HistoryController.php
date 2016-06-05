<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryController extends Controller
{
    public function index($id)
    {
        $query = DB::table('exchange_history')
            ->select('symbol', 'dates', 'values')
            ->where("symbol","=",$id)
            ->get();

        $dates= $query[0]->dates;
        $values= $query[0]->values;

        return view('history', ['dates' => $dates, 'values'=> $values]);
    }


}
