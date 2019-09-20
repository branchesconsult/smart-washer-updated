<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('category_product')->delete();

        \DB::table('category_product')->insert(array(
            0 =>
                array(
                    'category_id' => 1,
                    'product_id' => 1,
                )
        ));


    }
}