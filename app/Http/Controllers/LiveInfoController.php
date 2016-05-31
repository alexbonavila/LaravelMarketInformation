<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class LiveInfoController extends Controller
{

    /**
     * LiveInfoController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_grid = $this->getCompanyFollowFromDB();

        $columns="['id', 'symbol', 'name', 'lastPrice', 'change', 'volume', 'open']";

        return view('live_info', ['data_grid' => $data_grid, 'columns'=> $columns]);
    }

    /**
     * @return string
     */
    public function getCompanyFollowFromDB()
    {
        $data = DB::table('company_follow')->get();

        $data = json_encode($data);

        return $data;
    }

}
