<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'AUM',
                'created_at' => '2018-03-26 04:01:04',
                'updated_at' => '2018-04-12 01:49:45',
                'event_classification_id' => 1,
            ),
            1 => 
            array (
                'id' => 19,
                'name' => 'Aniversário da Comuna',
                'created_at' => '2018-03-27 14:13:50',
                'updated_at' => '2018-04-12 01:50:20',
                'event_classification_id' => 3,
            ),
            2 => 
            array (
                'id' => 20,
                'name' => 'Auto Conhecimento',
                'created_at' => '2018-03-27 14:14:13',
                'updated_at' => '2018-04-12 01:42:19',
                'event_classification_id' => 1,
            ),
            3 => 
            array (
                'id' => 23,
                'name' => 'Grupo',
                'created_at' => '2018-04-04 22:37:02',
                'updated_at' => '2018-04-12 01:49:08',
                'event_classification_id' => 2,
            ),
            4 => 
            array (
                'id' => 24,
                'name' => 'Experimental',
                'created_at' => '2018-04-04 22:37:16',
                'updated_at' => '2018-04-12 01:49:20',
                'event_classification_id' => 2,
            ),
            5 => 
            array (
                'id' => 25,
                'name' => 'grupo feito com ajax',
                'created_at' => '2018-04-12 05:10:56',
                'updated_at' => '2018-04-12 05:10:56',
                'event_classification_id' => NULL,
            ),
        ));
        
        
    }
}