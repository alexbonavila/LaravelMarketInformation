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

    protected $calculator;
    /**
     * @var array
     */
    protected $apiMethods = [
        'store' =>[
            'keyAuthentication' => true
        ]
    ];

    /**
     * CalculatorController constructor.
     * @param CalculatorTransformer $calcul_transformer
     */
    public function __construct(CalculatorTransformer $calcul_transformer, User $user, SimulatorHistory $calculator)
    {
        parent::__construct();


        $this->calcul_transformer = $calcul_transformer;
        $this->user = $user;
        $this->calculator = $calculator;
    }

    /**
     *Store calculator data in DB
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $calcul = array(
            'user_id' => $user->id,
            'name' => $request->input('name'),
            'quantity_to_buy' => $request->input('quantity_to_buy'),
            'quote_to_buy' => $request->input('quote_to_buy'),
            'price_to_buy' => $request->input('price_to_buy'),
            'quantity_to_sell' => $request->input('quantity_to_sell'),
            'quote_to_sell' => $request->input('quote_to_sell'),
            'tax_percent_to_discount' => $request->input('tax_percent_to_discount'),
            'price_to_sell' => $request->input('name'),
            'gains_or_losses' => $request->input('name'),
        );


        $this->calculator->create($calcul);

       return $this->response->withItem($calcul, $this->calcul_transformer);
    }



}
