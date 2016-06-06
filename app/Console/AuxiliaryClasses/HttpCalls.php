<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 31/05/16
 * Time: 14:04
 */

namespace App\Console\AuxiliaryClasses;

use App\InteractionMethodsMOD\GetMethods;

/**
 * Class HttpCalls
 * @package App\Console\AuxiliaryClasses
 */
class HttpCalls
{
    /**
     * @var GetMethods
     */
    protected $get_methods;

    /**
     * HttpCalls constructor.
     * @param GetMethods $get_methods
     */
    public function __construct(GetMethods $get_methods)
    {
        $this->get_methods=$get_methods;
    }

    /**
     * @param $symbol
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getTableFollow($symbol)
    {
        $data=$this->get_methods->stockQuote($symbol);

        sleep(4);

        return $data;
    }

    /**
     * @param $symbol
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getExchangeHistory($symbol)
    {
        $data=$this->get_methods->interactiveChart($symbol);

        sleep(4);

        return $data;
    }

    /**
     * @param $symbol
     * @return mixed|null|\Psr\Http\Message\ResponseInterface
     */
    public function getCompanies($symbol)
    {
        $data=$this->get_methods->companyLookup($symbol);

        $data=$this->discardRepeated($data,$symbol);

        sleep(4);

        return $data;
    }

    /**
     * @param $data
     * @param $symbol
     * @return $node
     * @return null
     */
    private function discardRepeated($data, $symbol)
    {
        for($i=0;$i<count($data);$i++){

            $symbol_to_compare=(string) $data[$i]->Symbol;

            if($symbol_to_compare==$symbol){
                return $node=$data[$i];
            }

        }
        return null;
    }


}