<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'first_name' => 'Admin',
                    'last_name' => 'SW',
                    'email' => 'admin@admin.com',
                    'phone' => '',
                    'password' => '$2y$10$hkje/uJJcutkeDaSHD0dgO9z15XvUElNIPxg88uNnZiVIME.QgmV.',
                    'profile_pic' => 'public/photos/shares/users/5b44bb4990908.png',
                    'status' => 1,
                    'confirmation_code' => 'fb6f37408dcdba47a573795aa4dbeffb',
                    'confirmed' => 1,
                    'is_term_accept' => 0,
                    'remember_token' => 'uTdOwQ7B97JnIT12XY6AbzW49sNLLNLHxsabeGOvciyDObDFAiyi27D131fS',
                    'created_by' => 1,
                    'updated_by' => NULL,
                    'created_at' => '2018-07-06 09:39:45',
                    'updated_at' => '2018-07-06 09:39:45',
                    'deleted_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'first_name' => 'Laundry',
                    'last_name' => 'SW',
                    'email' => 'executive@executive.com',
                    'phone' => '',
                    'password' => '$2y$10$0.GNtOwkCor3o/2J4u3qru6yGpI6nQkt.WdCxeYeXsjvMRrnljzr6',
                    'profile_pic' => '',
                    'status' => 1,
                    'confirmation_code' => 'e78a3e5c01f19165aba1c087abd7f045',
                    'confirmed' => 1,
                    'is_term_accept' => 0,
                    'remember_token' => NULL,
                    'created_by' => 1,
                    'updated_by' => NULL,
                    'created_at' => '2018-07-06 09:39:46',
                    'updated_at' => '2018-07-06 09:39:46',
                    'deleted_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'first_name' => 'User',
                    'last_name' => 'SW',
                    'email' => 'user@user.com',
                    'phone' => '',
                    'password' => '$2y$10$HnVrKCOC5DG1AQ5TH78fJO7qBHWutGEhbHDA3/FkMHfPQY3nsOeyi',
                    'profile_pic' => '',
                    'status' => 1,
                    'confirmation_code' => 'e53f4d83fb1eecdde2da2072aff2dec0',
                    'confirmed' => 1,
                    'is_term_accept' => 0,
                    'remember_token' => NULL,
                    'created_by' => 1,
                    'updated_by' => NULL,
                    'created_at' => '2018-07-06 09:39:46',
                    'updated_at' => '2018-07-06 09:39:46',
                    'deleted_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'first_name' => 'driver',
                    'last_name' => 'tes',
                    'email' => 'driver@test.com',
                    'phone' => '',
                    'password' => '$2y$10$Y/HEwSbWt4wClmEkQXv5v.lC73XhJS.0/ruSy7HdF2gZgc0Tq.HsW',
                    'profile_pic' => NULL,
                    'status' => 1,
                    'confirmation_code' => '4e73ecd48ac388d573bda2b541b4da76',
                    'confirmed' => 1,
                    'is_term_accept' => 0,
                    'remember_token' => NULL,
                    'created_by' => 1,
                    'updated_by' => NULL,
                    'created_at' => '2018-07-20 08:16:52',
                    'updated_at' => '2018-07-20 08:16:52',
                    'deleted_at' => NULL,
                ),
        ));


    }
}