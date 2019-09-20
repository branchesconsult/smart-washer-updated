<?php

use Illuminate\Database\Seeder;

class HistoryTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('history_types')->delete();
        
        \DB::table('history_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'User',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Role',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Permission',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CMSPage',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'EmailTemplate',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'BlogTag',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'BlogCategory',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Blog',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Order',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
        ));
        
        
    }
}