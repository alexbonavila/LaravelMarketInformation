<?php

namespace App\InteractionMethodsMOD;

use GuzzleHttp\Client;

/**
 * Class GetMethods
 * @package App\InteractionMethodsMOD
 */
class GetMethods
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * GetMethods constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client=$client;
    }

    /**
     * @param $to_search
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function companyLookup($to_search)
    {
        $response = $this->client->get("http://dev.markitondemand.com/MODApis/Api/v2/Lookup/json?input=".$to_search);

        $response =json_decode($response->getBody());

        return $response;
    }

    /**
     * @param $company_symbol
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function stockQuote($company_symbol)
    {
        $response = $this->client->get("http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=".$company_symbol);

        $response =json_decode($response->getBody());

        return $response;
    }

    /**
     * @param $company_symbol
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function interactiveChart ($company_symbol)
    {
        $request_params="%7B%22Normalized%22%3Afalse%2C%22NumberOfDays%22%3A730%2C%22DataPeriod%22%3A%22Month%22%2C%22Elements%22%3A%5B%7B%22Symbol%22%3A%22".$company_symbol."%22%2C%22Type%22%3A%22price%22%2C%22Params%22%3A%5B%22c%22%5D%7D%5D%7D";

        $response = $this->client->get("http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters=".$request_params);

        $response =json_decode($response->getBody());

        return $response;
    }

}