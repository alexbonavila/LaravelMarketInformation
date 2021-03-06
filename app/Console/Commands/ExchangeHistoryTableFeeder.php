<?php

namespace App\Console\Commands;

use App\Console\AuxiliaryClasses\DataBaseFunctions;
use App\Console\AuxiliaryClasses\HttpCalls;
use App\Console\AuxiliaryClasses\ProgressControl;
use App\InteractionMethodsMOD\GetMethods;
use Carbon\Carbon;
use DB;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * Class ExchangeHistoryTableFeeder
 * @package App\Console\Commands
 */
class ExchangeHistoryTableFeeder extends Command
{
    /**
     * @var DataBaseFunctions
     */
    protected $db_functions;

    /**
     * @var HttpCalls
     */
    protected $http_calls;

    /**
     * @var ProgressControl
     */
    protected $progress_control;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'history_table:feed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Feed the table exchange_history from DB';

    /**
     * Create a new command instance.
     * @param DataBaseFunctions $db_functions
     * @param HttpCalls $http_calls
     * @param ProgressControl $progress_control
     */
    public function __construct(DataBaseFunctions $db_functions,HttpCalls $http_calls,ProgressControl $progress_control)
    {
        parent::__construct();

        $this->db_functions=$db_functions;
        $this->http_calls=$http_calls;
        $this->progress_control=$progress_control;

    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $table='exchange_history';

        $symbols=$this->db_functions->truncateBDValuesAndGetNew($table);

        for($i=0; $i<count($symbols); $i++){
            try{

                $symbol=$symbols[$i]->symbol;
                $data=$this->http_calls->getExchangeHistory($symbol);
                $this->db_functions->storeExchangeHistory($data,$table);
                $this->progress_control->progressControl($i);

            }catch(Exception $e){

            }
        }
        echo("100% Table exchange_history fed\n");
    }
}
