<?php

namespace App\Console\Commands\Advertise;

use App\Models\Device\Device;
use Illuminate\Console\Command;

class ThursdayMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'thursdaypushmessage:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send push message on thursday';

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
        $deviceToken = array_column(Device::where('deviceable_id', '>', 0)
            ->get(['device_token'])
            ->toArray(), 'device_token');
        //$deviceToken = ['f7wsjYr_1Ik:APA91bFKgdPUwlglxakGcxN_Gi9bVP8oiRUhLIcHJh6PMPsI43Y2jlNpV3sahttbGs-Q2ESJMCGcuq_z4HWs5rpmVQVtCpO3_KMtC4fidzZjqNcwhIbeP3mixIDTJ0KAQxFSKabCjZO5'];
        sendPushNotificationToFCMSever(
            $deviceToken,
            'Is laundry day haunting you? Let us carry the burden!',
            NULL,
            NULL
        );
    }
}
