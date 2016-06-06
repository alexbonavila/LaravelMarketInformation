<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Cache;
use DB;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * HomeController constructor.
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
        $data_grid = $this->getCompaniesInfoFromDB();
        $columns="['id', 'symbol', 'name', 'exchange']";

        return view('home', ['data_grid' => $data_grid, 'columns'=> $columns]);
    }

    /**
     * @return string
     */
    public function getCompaniesInfoFromDB()
    {
        $companies = Cache::rememberForever(
            'companies', function(){
            return DB::table('companies')->get();
        });
        //$companies = DB::table('companies')->get();

        $companies = json_encode($companies);

        return $companies;
    }
}