<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{

    public function testMethod()
    {
        $symbol="AAPL";

        $result = $this->getCompaniesInfoFromDB($symbol);

        $myfile = fopen("testfile.txt", "w");
        fwrite($myfile, $result);
        fclose($myfile);

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename('file.txt'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($myfile));
        readfile($myfile);


        return ;
    }

    public function getCompaniesInfoFromDB($symbol)
    {
        $company_history = DB::table('exchange_history')->where('symbol', $symbol)->first();

        $company_history = json_encode($company_history);

        return $company_history;
    }
    
}
