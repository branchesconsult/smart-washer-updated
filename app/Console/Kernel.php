<?php

namespace App\Console;

use App\Console\Commands\Advertise\MondayMessageCommand;
use App\Console\Commands\Advertise\ThursdayMessageCommand;
use App\Console\Commands\GenerateSeeds;
use App\Console\Commands\OldImport\ImportOrderDetails;
use App\Console\Commands\OldImport\ImportOrders;
use App\Console\Commands\OldImport\ImportUsers;
use App\Console\Commands\SendDailyPushNotifications;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        GenerateSeeds::class,
        ImportOrders::class,
        ImportUsers::class,
        ImportOrderDetails::class,
        ThursdayMessageCommand::class,
        MondayMessageCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('thursdaypushmessage:send')->weeklyOn(4, '19:00');
        $schedule->command('mondaypushmessage:send')->weeklyOn(1, '17:00');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
