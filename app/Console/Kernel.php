<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

/**
 * Class Kernel
 * @package App\Console
 */
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
        Commands\CompaniesTableFeeder::class,
        Commands\ExchangeHistoryTableFeeder::class,
        Commands\DBToFile::class,
        Commands\CompanyFollowTableFeeder::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->command('companies_table:feed')->cron('0 23 * * 0');
        $schedule->command('history_table:feed')->cron('15 23 * * 0');
        $schedule->command('file_creator:create')->cron('30 23 * * 0');
        $schedule->command('company_follow:feed')->everyThirtyMinutes();

    }
}
