<?php

namespace App\InteractionMethodsMOD;

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
        $request_params="%7B%22Normalized%22%3Afalse%2C%22NumberOfDays%22%3A730%2C%22DataPeriod%22%3A%22Month%22%2C%22Elements%22%3A%5B%7B%22Symbol%22%3A%22".$company_symbol."%22%2C%22Type%22%3A%22price%22%2C%22Params%22%3A%5B%22c%22%5D%7D%5D%7D";

        $response = $client->get("http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters=".$request_params);

        $response =json_decode($response->getBody());

        return $response;
    }

}