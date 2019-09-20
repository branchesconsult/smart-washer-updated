<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'permission_id' => 1,
                'role_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 3,
                'role_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'permission_id' => 4,
                'role_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'permission_id' => 5,
                'role_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'permission_id' => 6,
                'role_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'permission_id' => 7,
                'role_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'permission_id' => 8,
                'role_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'permission_id' => 16,
                'role_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'permission_id' => 20,
                'role_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'permission_id' => 24,
                'role_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'permission_id' => 25,
                'role_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'permission_id' => 26,
                'role_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'permission_id' => 27,
                'role_id' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'permission_id' => 28,
                'role_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'permission_id' => 29,
                'role_id' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'permission_id' => 30,
                'role_id' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'permission_id' => 31,
                'role_id' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'permission_id' => 33,
                'role_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'permission_id' => 34,
                'role_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'permission_id' => 35,
                'role_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'permission_id' => 36,
                'role_id' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'permission_id' => 37,
                'role_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'permission_id' => 38,
                'role_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'permission_id' => 39,
                'role_id' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'permission_id' => 40,
                'role_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'permission_id' => 41,
                'role_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'permission_id' => 42,
                'role_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'permission_id' => 43,
                'role_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'permission_id' => 44,
                'role_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'permission_id' => 45,
                'role_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'permission_id' => 46,
                'role_id' => 2,
            ),
            31 => 
            array (
                'id' => 32,
                'permission_id' => 47,
                'role_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'permission_id' => 48,
                'role_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'permission_id' => 2,
                'role_id' => 3,
            ),
        ));
        
        
    }
}