<?php

use Illuminate\Database\Seeder;

class OrderdetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orderdetails')->delete();
        
        \DB::table('orderdetails')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'added_by' => 1,
                'product_id' => 1,
                'qty' => 1.0,
                'service_id' => 1,
                'price' => 2541.0,
                'paid_price' => 2541.0,
                'total_paid_price' => 2541.0,
                'created_at' => '2018-07-26 13:58:22',
                'updated_at' => '2018-07-26 13:58:22',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 1,
                'added_by' => 1,
                'product_id' => 4,
                'qty' => 1.0,
                'service_id' => 1,
                'price' => 100.0,
                'paid_price' => 100.0,
                'total_paid_price' => 100.0,
                'created_at' => '2018-07-26 13:58:22',
                'updated_at' => '2018-07-26 13:58:22',
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 2,
                'added_by' => 31,
                'product_id' => 1,
                'qty' => 1.0,
                'service_id' => 2,
                'price' => 1000.0,
                'paid_price' => 1000.0,
                'total_paid_price' => 1000.0,
                'created_at' => '2018-07-26 14:35:18',
                'updated_at' => '2018-07-26 14:35:18',
            ),
        ));
        
        
    }
}