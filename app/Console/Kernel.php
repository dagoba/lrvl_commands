<?php

namespace App\Console;

use App\Console\Commands\CovidAdd;
use App\Console\Commands\CovidList;
use App\Console\Commands\CovidUpdate;
use App\Console\Commands\CovidGet;
use App\Console\Commands\CovidDelete;
use App\Console\Commands\CovidCountry;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        CovidAdd::class,
        CovidList::class,
        CovidUpdate::class,
        CovidGet::class,
        CovidDelete::class,
        CovidCountry::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
