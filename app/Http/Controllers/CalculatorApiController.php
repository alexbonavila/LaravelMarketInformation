<?php

namespace App\Http\Controllers;

use App\Http\Transformers\CalculatorTransformer;
use App\SimulatorHistory;
use App\User;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

/**
 * Class CalculatorApiController
 * @package App\Http\Controllers
 */
class CalculatorApiController extends ApiGuardController
{

    /**
     * @var CalculatorTransformer
     */
    protected $calcul_transformer;
    /**
     * @var array
     */
    protected $apiMethods = [
        'store' =>[
            'keyAuthentication' => false
        ]
    ];

    /**
     * CalculatorController constructor.
     * @param CalculatorTransformer $calcul_transformer
     */
    public function __construct(CalculatorTransformer $calcul_transformer)
    {
        parent::__construct();


        $this->calcul_transformer = $calcul_transformer;
    }

    /**
     *Store calculator data in DB
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $user = Auth::user();


        $calcul = new SimulatorHistory();
        $calcul->user_id = Input::get('user_id');
        $calcul->name = Input::get('name');
        $calcul->quantity_to_buy = Input::get('quantity_to_buy');
        $calcul->quote_to_buy = Input::get('quote_to_buy');
        $calcul->price_to_buy = Input::get('price_to_buy');
        $calcul->quantity_to_sell = Input::get('quantity_to_sell');
        $calcul->quote_to_sell = Input::get('quote_to_sell');
        $calcul->tax_percent_to_discount = Input::get('tax_percent_to_discount');
        $calcul->price_to_sell = Input::get('price_to_sell');
        $calcul->gains_or_losses = Input::get('gains_or_losses');


        $user->getCalculations()->save($calcul);
        return $this->response->withItem($calcul,$this->calcul_transformer);
    }



}
