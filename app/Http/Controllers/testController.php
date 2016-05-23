<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{
    public function testMethod()
    {
        $companies = $this->getCompaniesInfoFromDB();



        return view('test', ['name' => $companies]);
    }

    public function getCompaniesInfoFromDB()
    {
        $companies = DB::table('companies')->get();

        $companies = json_encode($companies);

        return $companies;
    }
    
}
