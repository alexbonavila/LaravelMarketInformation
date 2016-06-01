<?php


use App\InteractionMethodsMOD\GetMethods;
use GuzzleHttp\Client;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HttpGetsTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    public function testCompanyLookup(GetMethods $get_methods)
    {
        sleep(4);

        $get_methods->companyLookup("AAPL");
    }

    public function testStockQuote(GetMethods $get_methods)
    {   sleep(4);

        $get_methods->stockQuote("AAPL");
    }

    public function testInteractiveChart(GetMethods $get_methods)
    {
        sleep(4);

        $get_methods->stockQuote("AAPL");
    }

}
