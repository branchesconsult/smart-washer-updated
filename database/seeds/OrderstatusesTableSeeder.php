<?php

use Illuminate\Database\Seeder;

class OrderstatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('orderstatuses')->delete();

        \DB::table('orderstatuses')->insert(array(
            1 =>
                array(
                    'id' => 1,
                    'status' => 'Just ordered',
                    'status_description' => 'Just ordered',
                    'status_push_message' => 'Just ordered',
                    'status_client_email' => 'Just ordered',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            2 =>
                array(
                    'id' => 2,
                    'status' => 'Pending',
                    'status_description' => 'Pending',
                    'status_push_message' => 'Pending',
                    'status_client_email' => 'Pending',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            3 =>
                array(
                    'id' => 3,
                    'status' => 'Received',
                    'status_description' => 'Received',
                    'status_push_message' => 'Received',
                    'status_client_email' => 'Received',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            4 =>
                array(
                    'id' => 4,
                    'status' => 'In-Progress',
                    'status_description' => 'In-Progress',
                    'status_push_message' => 'In-Progress',
                    'status_client_email' => 'In-Progress',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            5 =>
                array(
                    'id' => 5,
                    'status' => 'Ready For Delivery',
                    'status_description' => 'Ready For Delivery',
                    'status_push_message' => 'Ready For Delivery',
                    'status_client_email' => 'Ready For Delivery',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            6 =>
                array(
                    'id' => 6,
                    'status' => 'Delivered',
                    'status_description' => 'Delivered',
                    'status_push_message' => 'Delivered',
                    'status_client_email' => 'Delivered',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            7 =>
                array(
                    'id' => 7,
                    'status' => 'Cancelled',
                    'status_description' => 'Cancelled',
                    'status_push_message' => 'Cancelled',
                    'status_client_email' => 'Cancelled',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
            8 =>
                array(
                    'id' => 8,
                    'status' => 'Completed',
                    'status_description' => 'Completed',
                    'status_push_message' => 'Completed',
                    'status_client_email' => 'Completed',
                    'created_at' => '2018-07-20 00:00:00',
                    'updated_at' => '2018-07-20 00:00:00',
                ),
        ));


    }
}