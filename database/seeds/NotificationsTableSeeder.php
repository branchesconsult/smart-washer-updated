<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-09 06:05:59',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-09 09:13:16',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 1,
                'created_at' => '2018-07-09 09:16:28',
                'updated_at' => '2018-07-11 11:53:51',
            ),
            3 => 
            array (
                'id' => 4,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 1,
                'created_at' => '2018-07-09 10:33:17',
                'updated_at' => '2018-07-11 11:53:51',
            ),
            4 => 
            array (
                'id' => 5,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 1,
                'created_at' => '2018-07-10 06:53:18',
                'updated_at' => '2018-07-11 11:53:51',
            ),
            5 => 
            array (
                'id' => 6,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 1,
                'created_at' => '2018-07-10 09:26:54',
                'updated_at' => '2018-07-11 11:53:51',
            ),
            6 => 
            array (
                'id' => 7,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 1,
                'created_at' => '2018-07-11 09:45:27',
                'updated_at' => '2018-07-11 11:53:51',
            ),
            7 => 
            array (
                'id' => 8,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-12 06:01:37',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-13 05:52:17',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-19 19:18:23',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-20 10:40:27',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-20 13:20:46',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-22 09:40:22',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-23 06:49:50',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-23 16:18:51',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-24 13:24:30',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-24 22:03:16',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-24 22:41:32',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-24 22:44:02',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-25 18:24:49',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-26 09:36:50',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-26 11:10:10',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-26 12:15:54',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'message' => 'User Logged In: Admin',
                'user_id' => 1,
                'type' => 1,
                'is_read' => 0,
                'created_at' => '2018-07-26 12:34:10',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}