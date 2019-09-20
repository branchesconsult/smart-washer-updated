<?php

namespace App\Console\Commands\OldImport;

use App\Models\Order\Order;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oldorders:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import old orders';

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
        DB::connection('oldNewMysql')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('oldNewMysql')->table('orders')->truncate();
        DB::connection('oldNewMysql')->table('addresses')->truncate();
        $offset = 0;// $this->ask('Enter offset');
        $limit = 1;//$this->ask("Enter Limit");
        $usersSelectSql = "SELECT *FROM orders
                            WHERE `latitude` <> `longitude`
                            LIMIT $offset, $limit";
        $orders = DB::connection('oldMysql')->select($usersSelectSql);
        $ordersToInsert = [];
        $addressesInsert = [];
        $orderDtailInsert = [];
        $orderStatuses = [
            0 => Order::PENDING,
            1 => Order::RECEIVED,
            2 => Order::IN_PROGRESS,
            3 => Order::COMPLETED,
            4 => Order::DELIVERED,
            5 => Order::CANCELLED,
            6 => Order::READY_FOR_DELIVERY
        ];
        $couponIds = [
            'get10' => '1',
            'BUPA18' => '2',
            'bupa18' => '2',
            'BZAQR10' => '3',
            'ECA15' => '4',
            'BZAGR10' => '5',
            'NULL' => NULL
        ];
        foreach ($orders as $key => $val) {
            $val = get_object_vars($val);
            $val['latitude'] = 39.48280;
            $val['longitude'] = -0.34804;
            $ordersToInsert[$key] = [
                'invoice_num' => '000000-' . $val['id'],
                'user_id' => $val['user_id'],
                'driver_id' => $val['driver_id'],
                'skip_by_client' => 0,
                'orderstatus_id' => $orderStatuses[$val['status']],
                'user_comments' => $val['delivery_instruction'],
                'is_read_laundry' => 1,
                'is_read_admin' => 1,
                'payment_method' => 'cod',
                'coupon_id' => (!empty($val['coupon_code'])) ? $couponIds[$val['coupon_code']] : NULL,
                'discount' => $val['discount'],
                'discount_type' => 'fixed',
                'subtotal' => $val['sw_total_price'] - $val['delivery_charges'],
                'delivery_charges' => $val['delivery_charges'],
                'sorting_fee' => 0,
                'laundry_total_price' => ($val['sw_total_price'] - $val['commission']),
                'total' => $val['sw_total_price'],
                'paid' => $val['sw_total_price'],
                'pickup_time' => $val['collection_date_time'],
                'delivery_time' => $val['delivery_date_time'],
                'address' => $val['address_one'],
                //'lat_lng' => "GeomFromText('POINT(" . $val['latitude'] . " " . $val['longitude'] . ")')",
                'lat_lng' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'q=
ף�C@�e�c]|5@',
                'created_at' => $val['created_at'],
                'updated_at' => $val['updated_at'],
                'deleted_at' => $val['deleted_at'],
            ];
            //dd($ordersToInsert);
            //Addresses
            $addressesInsert[$key] = [
                'building_name' => 'Unknown',
                'address' => $val['address_one'],
                //'location' => "GeomFromText('POINT(" . $val['latitude'] . " " . $val['longitude'] . ")')",
                'location' => "GeomFromText('POINT(" . $val['latitude'] . " " . $val['longitude'] . ")')",
                'addressable_id' => $val['user_id'],
                'addressable_type' => "App\Models\Access\User\User",
                'phone' => $val['user_phone'],
                'created_at' => $val['created_at'],
                'updated_at' => $val['updated_at'],
            ];
            echo 'Order looped ' . $key . "\n";
        }

        DB::connection('oldNewMysql')->table('orders')->insert($ordersToInsert);//Insert users
        //DB::connection('oldNewMysql')->table('addresses')->insert($addressesInsert);//Insert devices
        echo 'Orders added';
    }
}
