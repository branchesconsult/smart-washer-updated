<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Laundry Cleaning',
                'name_ar' => 'تنظيف الغسيل',
                'status' => 1,
                'created_at' => '2018-07-26 11:14:50',
                'updated_at' => '2018-07-26 11:14:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dry Cleaning',
                'name_ar' => 'التنظيف الجاف',
                'status' => 1,
                'created_at' => '2018-07-26 11:15:39',
                'updated_at' => '2018-07-26 11:15:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Iron',
                'name_ar' => 'حديد',
                'status' => 1,
                'created_at' => '2018-07-26 11:16:17',
                'updated_at' => '2018-07-26 11:16:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}