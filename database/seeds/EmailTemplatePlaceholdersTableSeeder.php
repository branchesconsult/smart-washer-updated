<?php

use Illuminate\Database\Seeder;

class EmailTemplatePlaceholdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_template_placeholders')->delete();
        
        \DB::table('email_template_placeholders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'app_name',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'name',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'email',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'password',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'contact-details',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'confirmation_link',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'password_reset_link',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'header_logo',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'footer_logo',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'unscribe_link',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'status',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'invoice_num',
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-06 09:39:46',
            ),
        ));
        
        
    }
}