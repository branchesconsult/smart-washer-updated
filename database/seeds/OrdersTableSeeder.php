<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('orders')->delete();

        \DB::table('orders')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'invoice_num' => 'F-0000000001',
                    'user_id' => 1,
                    'driver_id' => 1,
                    'skip_by_client' => '0',
                    'orderstatus_id' => 1,
                    'user_comments' => NULL,
                    'is_read_laundry' => '0',
                    'is_read_admin' => '0',
                    'payment_method' => 'cod',
                    'coupon_id' => NULL,
                    'discount' => 0.0,
                    'discount_type' => NULL,
                    'subtotal' => 2641.0,
                    'delivery_charges' => 10.0,
                    'total' => 2651.0,
                    'pickup_time' => '2018-07-19 15:57:00',
                    'delivery_time' => '2018-07-20 15:57:00',
                    'address' => 'St 3 Sec A Ph 5,  Lahore',
                    'lat_lng' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'r#g�p�R@籕{rw?@',
                    'created_at' => '2018-07-26 13:58:22',
                    'updated_at' => '2018-07-26 13:58:22',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'invoice_num' => 'F-0000000002',
                    'user_id' => 31,
                    'driver_id' => 28,
                    'skip_by_client' => '0',
                    'orderstatus_id' => 1,
                    'user_comments' => 'No Comments',
                    'is_read_laundry' => '0',
                    'is_read_admin' => '0',
                    'payment_method' => 'paytabs',
                    'coupon_id' => NULL,
                    'discount' => 0.0,
                    'discount_type' => NULL,
                    'subtotal' => 1000.0,
                    'delivery_charges' => 10.0,
                    'total' => 1010.0,
                    'pickup_time' => '2018-07-26 12:10:00',
                    'delivery_time' => '2018-07-28 12:10:00',
                    'address' => 'Jeddah',
                    'lat_lng' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'q=
ף�C@�e�c]|5@',
                    'created_at' => '2018-07-26 14:35:18',
                    'updated_at' => '2018-07-26 14:35:18',
                    'deleted_at' => NULL,
                ),
        ));


    }
}