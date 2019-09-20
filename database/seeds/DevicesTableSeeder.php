<?php

use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('devices')->delete();
        
        \DB::table('devices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deviceable_id' => 1,
                'deviceable_type' => 'App\\Models\\Access\\User\\User',
                'device_token' => '313af1df5c32cf7dc82d9ef88442426f55adae4c16d9d590ae81c3874b998692',
            'agent_info' => 'SmartWashr/4.1 (com.kLatest.smartwashr; build:3; iOS 11.4.1) Alamofire/4.7.2',
                'created_at' => '2018-07-26 13:21:38',
                'updated_at' => '2018-07-26 13:21:38',
            ),
        ));
        
        
    }
}