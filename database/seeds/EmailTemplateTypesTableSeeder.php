<?php

use Illuminate\Database\Seeder;

class EmailTemplateTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_template_types')->delete();
        
        \DB::table('email_template_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Registration',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Create User',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Acivate / Deactivate User',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Change Password',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Create order via api',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Order Invoice',
                'created_at' => '2018-08-07 03:00:00',
                'updated_at' => '2018-08-07 03:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Skip Order by client',
                'created_at' => '2018-08-07 03:00:00',
                'updated_at' => '2018-08-07 03:00:00',
            ),
        ));
        
        
    }
}