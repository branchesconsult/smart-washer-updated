<?php

namespace App\Console\Commands\OldImport;

use Illuminate\Console\Command;

class ImportOrderDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $orderDetailSql = "SELET *FROM orders_detail";
        $ordersDetail = DB::connection('oldMysql')->select($orderDetailSql);
        $oldVsNewPro = [
            //Old => //New
            1 => 1
        ];
        $oldVsNewService = [
            //Wash
            'Wash & Press' => 1,
            'wash' => 1,
            //Dryclean
            'dryclean' => 2,
            'DryClean & Press' => 2,
            //Press
            'press' => 3,
            'Only Press' => 3,
        ];

        $orderDtailInsert = [];
        foreach ($ordersDetail as $key => $val) {
            //Order detail
            $orderDtailInsert[$key] = [
                'order_id' => $val['order_id'],
                'added_by' => $val['user_id'],
                'product_id' => $val['product_id'],
                'qty' => $val['quantity'],
                'service_id' => $val['product_service'],
                'price' => $val['sw_price'] / $val['quantity'],
                'paid_price' => $val['sw_price'],
                'total_paid_price' => $val['sw_price'] * $val['quantity'],
                'total_paid_laundry_price' => ($val['sw_price'] / $val['quantity']) - $val['commission'],
                'created_at' => $val['created_at'],
                'updated_at' => $val['updated_at'],
            ];
        }
    }
}
