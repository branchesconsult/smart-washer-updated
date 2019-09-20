<?php

namespace App\Console\Commands;

use App\Models\Device\Device;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyPushNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fcmthursdaynotification:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send schedule notification';

    /**
     * Create a new command instance.
     *
     * @return void
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

    }
}
