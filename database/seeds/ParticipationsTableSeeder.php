<?php

use Illuminate\Database\Seeder;

class ParticipationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('participations')->delete();
        
        \DB::table('participations')->insert(array (
            0 => 
            array (
                'id' => 17,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-26 05:24:45',
                'updated_at' => '2018-03-26 23:19:10',
                'event_id' => 6,
                'start_date' => '2018-03-25 00:00:00',
                'end_date' => '2018-03-25 00:00:00',
            ),
            1 => 
            array (
                'id' => 18,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-26 23:19:51',
                'updated_at' => '2018-03-26 23:19:51',
                'event_id' => 6,
                'start_date' => '2018-03-26 00:00:00',
                'end_date' => '2018-03-26 00:00:00',
            ),
            2 => 
            array (
                'id' => 19,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-27 14:14:23',
                'updated_at' => '2018-03-27 14:14:23',
                'event_id' => 20,
                'start_date' => NULL,
                'end_date' => NULL,
            ),
            3 => 
            array (
                'id' => 20,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-27 22:11:55',
                'updated_at' => '2018-03-27 22:11:55',
                'event_id' => 21,
                'start_date' => '2018-03-27 00:00:00',
                'end_date' => '2018-03-27 00:00:00',
            ),
        ));
        
        
    }
}