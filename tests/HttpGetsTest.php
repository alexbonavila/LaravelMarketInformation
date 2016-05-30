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
        $interaction_methods = new GetMethods();

        $glz_cli = new Client();

        sleep(4);

        $interaction_methods->companyLookup($glz_cli,"AAPL");
    }

    public function testStockQuote()
    {
        $interaction_methods = new GetMethods();

        $glz_cli = new Client();

        sleep(4);

        $interaction_methods->stockQuote($glz_cli,"AAPL");
    }

    public function testInteractiveChart()
    {
        $interaction_methods = new GetMethods();

        $glz_cli = new Client();

        sleep(4);

        $interaction_methods->stockQuote($glz_cli,"AAPL");
    }

}
