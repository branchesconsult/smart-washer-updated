<?php

use Illuminate\Database\Seeder;

class LaundriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('laundries')->delete();

        \DB::table('laundries')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Smart Laundry',
                    'logo' => NULL,
                    'is_approved' => '1',
                    'created_at' => '2018-07-26 12:27:35',
                    'updated_at' => '2018-07-26 12:27:35',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'A&J Laundry',
                    'logo' => NULL,
                    'is_approved' => '1',
                    'created_at' => '2018-07-26 12:28:00',
                    'updated_at' => '2018-07-26 12:28:00',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Nabeel Laundry',
                    'logo' => NULL,
                    'is_approved' => '1',
                    'created_at' => '2018-07-26 12:29:01',
                    'updated_at' => '2018-07-26 12:29:01',
                    'deleted_at' => NULL,
                ),
        ));


    }
}