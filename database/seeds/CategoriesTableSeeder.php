<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Male',
                'name_ar' => 'شماغ او غترة',
                'slug' => 'male',
                'picture' => '/photos/shares/adsasd.png',
                'parent_id' => 0,
                'created_at' => '2018-07-06 12:52:36',
                'updated_at' => '2018-07-20 10:45:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Female',
                'name_ar' => '2شماغ او غترة',
                'slug' => 'female',
                'picture' => '/photos/shares/adsasd.png',
                'parent_id' => 0,
                'created_at' => '2018-07-06 12:52:36',
                'updated_at' => '2018-07-20 10:45:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Miscellaneous',
                'name_ar' => 'متنوع',
                'slug' => 'miscellaneous',
                'picture' => NULL,
                'parent_id' => 0,
                'created_at' => '2018-07-20 10:46:08',
                'updated_at' => '2018-07-20 10:46:08',
            ),
        ));
        
        
    }
}