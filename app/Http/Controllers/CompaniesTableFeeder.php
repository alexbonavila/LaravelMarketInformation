<?php

namespace App\Http\Controllers;

use App\InteractionMethodsMOD\GetMethods;
use Carbon\Carbon;
use DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use App\Http\Requests;

class CompaniesTableFeeder extends Controller
{
    

    public function getSymbolsFormArray()
    {
        $symbols_nasdq= '{"SymbolsNASDAQ":["AAL","AAPL","ADBE","ADI","ADP","ADSK","AKAM","ALXN","AMAT","AMGN","AMZN","ATVI","BBBY","BIDU","BIIB","BMRN","CA","CELG","CERN","CHKP","CHTR","CMCSA","COST","CSCO","CSX","CTRP","CTSH","CTXS","DISCA","DISCK","DISH","DLTR","EA","EBAY","ENDP","ESRX","EXPE","FAST","FB","FISV","FOX","FOXA","GILD","GOOG","GOOGL","HSIC","INCY","INTC","INTU","ILMN","ISRG","JD","KHC","LBTYA","LBTYK","LLTC","LMCA","LRCX","LVNTA","MAR","MAT","MDLZ","MNST","MSFT","MU","MXIM","MYL","NCLH","NFLX","NTAP","NVDA","NXPI","ORLY","PAYX","PCAR","PCLN","PYPL","QCOM","QVCA","REGN","ROST","SBAC","SBUX","SIRI","SNDK","SRCL","STX","SWKS","SYMC","TMUS","TSCO","TSLA","TRIP","TXN","ULTA","VIAB","VOD","VRSK","VRTX","WBA","WDC","WFM","XLNX","YHOO"]}';

        $symbols_nasdq = json_decode($symbols_nasdq);

        $symbols_nasdq = $symbols_nasdq->SymbolsNASDAQ;

        for($i=0; $i<count($symbols_nasdq); $i++)
        {
            $symbol=$symbols_nasdq[$i];
            $gm = new GetMethods();
            $this->httpCall($gm,$symbol);

        }
    }

    public function httpCall(GetMethods $interaction_methods, $symbol)
    {
        $glz_cli=new Client();

        $data = $interaction_methods->companyLookup($glz_cli,$symbol);


        $this->discardRepeated($data,$symbol);

    }

    public function discardRepeated($data,$symbol)
    {
        for($i=0;$i<count($data);$i++){

            $symbol_to_compare=(string) $data[$i]->Symbol;

            if($symbol_to_compare==$symbol){

                $node=$data[$i];

                $this->storeDataInDB($node);

            }

        }
    }

    public function storeDataInDB($data)
    {
        DB::table('companies')->insert([
            [
                'symbol' => $data->Symbol,
                'name' => $data->Name,
                'exchange' => $data->Exchange,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
