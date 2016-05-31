<?php


use App\InteractionMethodsMOD\GetMethods;
use GuzzleHttp\Client;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HttpGetsTest extends TestCase
{

    protected $get_methods;

    /**
     * HttpGetsTest constructor.
     */
    public function __construct(GetMethods $get_methods)
    {
        parent::__construct();

        $this->get_methods=$get_methods;
    }


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
        sleep(4);

        $this->get_methods->companyLookup("AAPL");
    }

    public function testStockQuote()
    {   sleep(4);

        $this->get_methods->stockQuote("AAPL");
    }

    public function testInteractiveChart()
    {
        sleep(4);

        $this->get_methods->stockQuote("AAPL");
    }

}
