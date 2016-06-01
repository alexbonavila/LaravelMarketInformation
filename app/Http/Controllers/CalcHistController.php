<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

/**
 * Class CalcHistController
 * @package App\Http\Controllers
 */
class CalcHistController extends Controller
{

    /**
     * CalcHistController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data_grid = $this->getSimulatorHistory();

        $columns="['id', 'name', 'quantity_to_buy', 'quote_to_buy', 'price_to_buy', 'quantity_to_sell', 'quote_to_sell', 'tax_percent_to_discount', 'price_to_sell', 'gains_or_losses']";

        return view('calculator_history', ['data_grid' => $data_grid, 'columns'=> $columns]);
    }

    /**
     * @return string
     */
    public function getSimulatorHistory()
    {
        $user = Auth::user();

        $data = DB::table('simulator_history')->where('user_id','=',$user->id)->get();

        $data = json_encode($data);

        return $data;
    }

}
