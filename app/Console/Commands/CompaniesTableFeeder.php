<?php

namespace App\Console\Commands;

use App\Console\AuxiliaryClasses\DataBaseFunctions;
use App\Console\AuxiliaryClasses\HttpCalls;
use App\Console\AuxiliaryClasses\ProgressControl;
use Cache;
use DB;
use Exception;
use Illuminate\Console\Command;

/**
 * Class CompaniesTableFeeder
 * @package App\Console\Commands
 */
class CompaniesTableFeeder extends Command
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
    protected $signature = 'companies_table:feed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Feed the table companies from DB';

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
        $table='companies';

        DB::table($table)->truncate();

        $symbols_nasdq= '{"SymbolsNASDAQ":["AAL","AAPL","ADBE","ADI","ADP","ADSK","AKAM","ALXN","AMAT","AMGN","AMZN","ATVI","BBBY","BIDU","BIIB","BMRN","CA","CELG","CERN","CHKP","CHTR","CMCSA","COST","CSCO","CSX","CTRP","CTSH","CTXS","DISCA","DISCK","DISH","DLTR","EA","EBAY","ENDP","ESRX","EXPE","FAST","FB","FISV","FOX","FOXA","GILD","GOOG","HSIC","INCY","INTC","INTU","ILMN","ISRG","JD","KHC","LBTYA","LBTYK","LLTC","LMCA","LRCX","LVNTA","MAR","MAT","MDLZ","MNST","MSFT","MU","MXIM","MYL","NCLH","NFLX","NTAP","NVDA","NXPI","ORLY","PAYX","PCAR","PCLN","PYPL","QCOM","QVCA","REGN","ROST","SBAC","SBUX","SIRI","SNDK","SRCL","STX","SWKS","SYMC","TMUS","TSCO","TSLA","TRIP","TXN","ULTA","VIAB","VOD","VRSK","VRTX","WBA","WDC","WFM","XLNX","YHOO"]}';

        $symbols_nasdq = json_decode($symbols_nasdq);

        $symbols = $symbols_nasdq->SymbolsNASDAQ;

        for($i=0; $i<count($symbols); $i++){
            try{
                $symbol=$symbols[$i];
                $data=$this->http_calls->getCompanies($symbol);
                $this->db_functions->storeCompanies($data);
                $this->progress_control->progressControl($i);

            }catch(Exception $e){

            }
        }
        Cache::tags('companies')->flush();
        echo("100% Table companies fed\n");
    }
}