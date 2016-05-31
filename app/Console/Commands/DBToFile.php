<?php

namespace App\Console\Commands;

use App\Console\AuxiliaryClasses\DataBaseFunctions;
use DB;
use Illuminate\Console\Command;
use SoapBox\Formatter\Formatter;

/**
 * Class DBToFile
 * @package App\Console\Commands
 */
class DBToFile extends Command
{
    /**
     * @var DataBaseFunctions
     */
    protected $db_functions;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'file_creator:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create files from DB and transform him';

    /**
     * Create a new command instance.
     * @param DataBaseFunctions $db_functions
     */
    public function __construct(DataBaseFunctions $db_functions)
    {
        parent::__construct();

        $this->db_functions=$db_functions;

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $exchange_history = $this->db_functions->getAllDataFromExchangeHistory();

        for($i=0; $i<count($exchange_history); $i++)
        {
            $company_history = $exchange_history[$i];

            $this->transformData($company_history);
        }

        echo ("The files have been created successfully\n");

    }

    /**
     * @param $company_history
     */
    public function transformData($company_history)
    {
        $name_file = $company_history->symbol;

        $this->createAndStore($company_history, "json", $name_file);

        $company_history=json_encode($company_history);

        $formatter = Formatter::make($company_history, Formatter::JSON);

        $csv   = $formatter->toCsv();
        $xml   = $formatter->toXml();
        $yaml  = $formatter->toYaml();

        $this->createAndStore($csv, "csv", $name_file);

        $this->createAndStore($xml, "xml", $name_file);

        $this->createAndStore($yaml, "yaml", $name_file);

    }

    /**
     * @param $to_store
     * @param $extension_file
     * @param $name_file
     */
    public function createAndStore($to_store, $extension_file, $name_file)
    {
        $myfile = fopen("public/historic_info_files/".$extension_file."/".$name_file.".".$extension_file, "w");
        //$myfile = fopen("public/historic_info_files/testfile.txt", "w");
        fwrite($myfile, json_encode($to_store));
        fclose($myfile);
    }
    
}
