<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '750',
                'valid_from' => '2018-07-26 02:54:38',
                'valid_till' => '2018-07-31 02:54:43',
                'discount' => 20.0,
                'discount_type' => 'fixed',
                'min_purchase' => 100.0,
                'created_at' => '2018-07-26 12:55:00',
                'updated_at' => '2018-07-26 13:59:18',
            ),
        ));
        
        
    }
}