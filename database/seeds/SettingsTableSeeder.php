<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo' => NULL,
                'favicon' => NULL,
                'seo_title' => 'Smartwashr Admin',
                'seo_keyword' => NULL,
                'seo_description' => NULL,
                'company_contact' => NULL,
                'company_address' => NULL,
                'from_name' => NULL,
                'from_email' => NULL,
                'facebook' => NULL,
                'linkedin' => NULL,
                'twitter' => NULL,
                'google' => NULL,
                'copyright_text' => NULL,
                'footer_text' => NULL,
                'terms' => NULL,
                'disclaimer' => NULL,
                'google_analytics' => NULL,
                'home_video1' => NULL,
                'home_video2' => NULL,
                'home_video3' => NULL,
                'home_video4' => NULL,
                'explanation1' => NULL,
                'explanation2' => NULL,
                'explanation3' => NULL,
                'explanation4' => NULL,
                'open_time' => 13.0,
                'close_time' => 22.0,
                'delievery_margin' => 24.0,
                'is_shop_close' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}