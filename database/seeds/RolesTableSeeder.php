<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'all' => 1,
                'sort' => 1,
                'status' => 1,
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Laundry',
                'all' => 0,
                'sort' => 2,
                'status' => 1,
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Customer',
                'all' => 0,
                'sort' => 3,
                'status' => 1,
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Driver',
                'all' => 1,
                'sort' => 3,
                'status' => 0,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-20 08:16:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}