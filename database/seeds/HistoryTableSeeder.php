<?php

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('history')->delete();
        
    }
}