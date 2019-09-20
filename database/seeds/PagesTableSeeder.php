<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Terms and conditions',
                'page_slug' => 'terms-and-conditions',
                'description' => 'terms and conditions',
                'cannonical_link' => NULL,
                'seo_title' => NULL,
                'seo_keyword' => NULL,
                'seo_description' => NULL,
                'status' => 1,
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-07-20 14:14:17',
                'deleted_at' => '2018-07-20 14:14:17',
            ),
        ));
        
        
    }
}