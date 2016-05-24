<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{

    public function testMethod()
    {
        return view('test');
    }

    
}
