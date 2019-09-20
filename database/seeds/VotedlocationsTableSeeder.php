<?php

use Illuminate\Database\Seeder;

class VotedlocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('votedlocations')->delete();
        
        \DB::table('votedlocations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'location' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'r#gîp›R@ç±•{rw?@',
                'created_at' => '2018-07-26 13:53:26',
                'updated_at' => '2018-07-26 13:53:26',
            ),
        ));
        
        
    }
}