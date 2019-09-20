<?php

use Illuminate\Database\Seeder;

class LaundryUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('laundry_user')->delete();
        
        \DB::table('laundry_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'laundry_id' => 1,
                'user_id' => 2,
                'relation' => 'driver',
                'driver_area' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '���:@q=
�c�L@�d�]��6@���1�Q@�}J�4�A@���1U@!N>-kE@���qtT@��9K�D@���UQ@���:@q=
�c�L@',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}