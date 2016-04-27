<?php

namespace App\GetMethodsExternalAPI;

use GuzzleHttp\Client;

class GetMethods
{
    public function companyLookup(Client $client, $to_search)
    {
        $response = $client->get("http://dev.markitondemand.com/MODApis/Api/v2/Lookup?input=".$to_search);

        return $response;
    }

    public function stockQuote(Client $client, $company_symbol)
    {
        $response = $client->get("http://dev.markitondemand.com/MODApis/Api/v2/Quote?symbol=".$company_symbol);

        return $response;
    }

    public function interactiveChart (Client $client, $company_symbol)
    {

        $request_params="%7B\"Normalized\"%3Afalse%2C\"NumberOfDays\"%3A730%2C\"DataPeriod\"%3A\"Month\"%2C\"Elements\"%3A%5B%7B\"Symbol\"%3A".$company_symbol."%2C\"Type\"%3A\"price\"%2C\"Params\"%3A%5B\"c\"%5D%7D%5D%7D";

        $response = $client->get("http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters=".$request_params);

        return $response;
    }

}