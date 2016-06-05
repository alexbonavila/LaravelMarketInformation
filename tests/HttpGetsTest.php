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


    public function testCompanyLookup()
    {
        $get_methods= new GetMethods(new Client());

        sleep(4);

        $get_methods->companyLookup("AAPL");
    }

    public function testStockQuote()
    {
        $get_methods= new GetMethods(new Client());

        sleep(4);

        $get_methods->stockQuote("AAPL");
    }

    public function testInteractiveChart()
    {
        $get_methods= new GetMethods(new Client());

        sleep(4);

        $get_methods->stockQuote("AAPL");
    }

}
