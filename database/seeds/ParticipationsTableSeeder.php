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
            4 => 
            array (
                'id' => 21,
                'created_id' => 2,
                'updated_id' => 2,
                'created_at' => '2018-03-29 15:49:20',
                'updated_at' => '2018-03-29 15:49:20',
                'event_id' => 22,
                'start_date' => '2018-03-29 00:00:00',
                'end_date' => '2018-03-29 00:00:00',
            ),
            5 => 
            array (
                'id' => 22,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-29 16:55:11',
                'updated_at' => '2018-03-29 16:55:11',
                'event_id' => 6,
                'start_date' => NULL,
                'end_date' => NULL,
            ),
            6 => 
            array (
                'id' => 23,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-29 18:29:18',
                'updated_at' => '2018-03-29 18:29:18',
                'event_id' => 7,
                'start_date' => NULL,
                'end_date' => NULL,
            ),
            7 => 
            array (
                'id' => 24,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-29 18:35:36',
                'updated_at' => '2018-03-29 18:35:36',
                'event_id' => 7,
                'start_date' => NULL,
                'end_date' => NULL,
            ),
            8 => 
            array (
                'id' => 25,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-29 19:12:49',
                'updated_at' => '2018-03-29 19:12:49',
                'event_id' => 6,
                'start_date' => NULL,
                'end_date' => NULL,
            ),
            9 => 
            array (
                'id' => 26,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-04-04 22:18:04',
                'updated_at' => '2018-04-04 22:18:04',
                'event_id' => 6,
                'start_date' => '2018-04-04 00:00:00',
                'end_date' => NULL,
            ),
            10 => 
            array (
                'id' => 27,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-04-12 05:12:33',
                'updated_at' => '2018-04-12 05:12:33',
                'event_id' => 25,
                'start_date' => '2018-04-12 00:00:00',
                'end_date' => '2018-04-12 00:00:00',
            ),
            11 => 
            array (
                'id' => 28,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-04-12 18:14:16',
                'updated_at' => '2018-04-12 18:14:16',
                'event_id' => 6,
                'start_date' => '2018-04-12 00:00:00',
                'end_date' => '2018-04-12 00:00:00',
            ),
            12 => 
            array (
                'id' => 29,
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-04-12 18:14:17',
                'updated_at' => '2018-04-12 18:14:17',
                'event_id' => 6,
                'start_date' => '2018-04-12 00:00:00',
                'end_date' => '2018-04-12 00:00:00',
            ),
        ));
        
        
    }
}