<?php

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Areyou able to deliever in time?',
                'answer' => '<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>
<p>Yes we are. You can trust us bla bla</p>',
                'status' => 1,
                'created_at' => '2018-07-20 14:13:28',
                'updated_at' => '2018-07-20 14:13:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'How do I pay the driver?',
                'answer' => '<p><strong>Hello</strong></p>
<p>You can do this. You can do this. You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;You can do this.&nbsp;</p>
<p><strong>Thank you.</strong></p>',
                'status' => 1,
                'created_at' => '2018-07-26 12:38:44',
                'updated_at' => '2018-07-26 12:38:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}