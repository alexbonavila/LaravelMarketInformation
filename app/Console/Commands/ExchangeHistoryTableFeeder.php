<?php

namespace App\Console\Commands;

use App\InteractionMethodsMOD\GetMethods;
use Carbon\Carbon;
use DB;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

/**
 * Class ExchangeHistoryTableFeeder
 * @package App\Console\Commands
 */
class ExchangeHistoryTableFeeder extends Command
{
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
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->getSymbolsFormDB();
    }

    /**
     *Elimina les dades antigues i n'insereix unes de noves
     */
    public function getSymbolsFormDB()
    {
        DB::table('exchange_history')->truncate();

        $symbols = DB::table('companies')->select('symbol')->get();

        for($i=0; $i<count($symbols); $i++)
        {
            $symbol=$symbols[$i]->symbol;
            $gm = new GetMethods();
            $this->httpCall($gm,$symbol);

        }

    }

    /**
     * Aconegueix les dades de la api i fa la crida de la funció que les guardara a la BD
     *
     * @param GetMethods $interaction_methods
     * @param $symbol
     */
    public function httpCall(GetMethods $interaction_methods, $symbol)
    {
        $glz_cli=new Client();

        $data = $interaction_methods->interactiveChart($glz_cli,$symbol);

        $this->storeDataInDB($data);
    }

    /**
     *
     * Persisteix les dades al MYSQL
     *
     * @param $data
     */
    public function storeDataInDB($data)
    {
        DB::table('exchange_history')->insert([
            [
                'symbol' => $data->Elements[0]->Symbol,
                'positions' => json_encode($data->Positions),
                'dates' => json_encode($data->Dates),
                'values' => json_encode($data->Elements[0]->DataSeries->close->values),
                'max_date' =>  $data->Elements[0]->DataSeries->close->maxDate,
                'min_date' => $data->Elements[0]->DataSeries->close->minDate,
                'min_value' => $data->Elements[0]->DataSeries->close->min,
                'max_value' =>  $data->Elements[0]->DataSeries->close->max,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }

}
