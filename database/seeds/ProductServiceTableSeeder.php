<?php

use Illuminate\Database\Seeder;

class ProductServiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('product_service')->delete();

        \DB::table('product_service')->insert(array());


    }
}