<?php

namespace App\Http\Controllers;

use App\Http\Transformers\CalculatorTransformer;
use App\SimulatorHistory;
use App\User;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Vinkla\Alert\Alert;

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
     * @var SimulatorHistory
     */
    protected $calculator;

    protected $alert;
    /**
     * @var array
     */
    protected $apiMethods = [
        'store' => [
            'keyAuthentication' => true
        ],
        'getUserCalculs' => [
            'keyAuthentication' => true
        ]
    ];

    /**
     * CalculatorController constructor.
     * @param CalculatorTransformer $calcul_transformer
     * @param User $user
     * @param SimulatorHistory $calculator
     */
    public function __construct(Alert $alert,CalculatorTransformer $calcul_transformer, User $user, SimulatorHistory $calculator)
    {
        parent::__construct();


        $this->calcul_transformer = $calcul_transformer;
        $this->user = $user;
        $this->calculator = $calculator;
        $this->alert=$alert;
    }

    /**
     *Store calculator data in DB
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $user = Auth::user();


        if ($this->dataVerify($request)) {
            $calcul = array(
                'user_id' => $user->id,
                'name' => $request->input('name'),
                'quantity_to_buy' => $request->input('quantity_to_buy'),
                'quote_to_buy' => $request->input('quote_to_buy'),
                'price_to_buy' => $request->input('price_to_buy'),
                'quantity_to_sell' => $request->input('quantity_to_sell'),
                'quote_to_sell' => $request->input('quote_to_sell'),
                'tax_percent_to_discount' => $request->input('tax_percent_to_discount'),
                'price_to_sell' => $request->input('price_to_sell'),
                'gains_or_losses' => $request->input('gains_or_losses'),
            );


            $this->alert->success('El calcul ha estat guardat');


            $this->calculator->create($calcul);

            return $this->response->withItem($calcul, $this->calcul_transformer);
        }

        return "Error desconegut";
    }

    /**
     * @return array|static[]
     */
    public function getUserCalculs()
    {
        $user = Auth::user();

        $data = DB::table('simulator_history')->where('user_id', '=', $user->id)->get();

        return $data;
    }

    public function dataVerify(Request $request)
    {
        if (is_numeric($request->input('quantity_to_buy')) && is_numeric($request->input('quote_to_buy')) && is_numeric($request->input('price_to_buy')) &&
            is_numeric($request->input('quantity_to_sell')) && is_numeric($request->input('quote_to_sell')) && is_numeric($request->input('tax_percent_to_discount')) &&
            is_numeric($request->input('price_to_sell')) && is_numeric($request->input('gains_or_losses'))
        ) {
            return true;
        } else {
            dd("Les dades son errones");
            return false;
        }
    }
}
