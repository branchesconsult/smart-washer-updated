<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('role_user')->delete();

        \DB::table('role_user')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 1,
                    'role_id' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'user_id' => 2,
                    'role_id' => 2,
                ),
            2 =>
                array(
                    'id' => 3,
                    'user_id' => 3,
                    'role_id' => 3,
                ),
            3 =>
                array(
                    'id' => 4,
                    'user_id' => 4,
                    'role_id' => 4,
                )
        ));


    }
}