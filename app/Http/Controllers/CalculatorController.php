<?php

namespace App\Http\Controllers;

use App\Http\Transformers\CalculatorTransformer;
use App\Http\Requests;

/**
 * Class CalculatorController
 * @package App\Http\Controllers
 */
class CalculatorController extends Controller
{

    /**
     * CalculatorController constructor
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
        return view('calculator');
    }

}
