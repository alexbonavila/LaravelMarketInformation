<?php


namespace App\GetMethodsExternalAPI;


use GuzzleHttp\Client;

class GetMethods
{
    public function companyLookup(Client $client, $to_search)
    {
        $response = $client->get('http://dev.markitondemand.com/MODApis/Api/v2/Lookup?symbol='.$to_search);

        return $response;
    }

    public function stockQuote(Client $client, $company_symbol)
    {
        $response = $client->get('http://dev.markitondemand.com/MODApis/Api/v2/Quote?symbol='.$company_symbol);

        return $response;
    }

    public function interactiveChart (Client $client, $empresa)
    {
        //TODO
    }
    
    
    
}