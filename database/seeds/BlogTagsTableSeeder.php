<?php

use Illuminate\Database\Seeder;

class BlogTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_tags')->delete();
        
        
        
    }
}