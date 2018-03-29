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
                'description' => NULL,
                'created_at' => '2018-03-26 04:01:04',
                'updated_at' => '2018-03-26 05:43:08',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Evento 2',
                'description' => NULL,
                'created_at' => '2018-03-26 04:01:18',
                'updated_at' => '2018-03-26 04:01:18',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Evento 3',
                'description' => NULL,
                'created_at' => '2018-03-26 04:01:37',
                'updated_at' => '2018-03-26 04:01:37',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'dasdasdas',
                'description' => NULL,
                'created_at' => '2018-03-27 13:36:59',
                'updated_at' => '2018-03-27 13:36:59',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'criado com ajax',
                'description' => NULL,
                'created_at' => '2018-03-27 13:41:22',
                'updated_at' => '2018-03-27 13:41:22',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'bla bla',
                'description' => NULL,
                'created_at' => '2018-03-27 13:44:12',
                'updated_at' => '2018-03-27 13:44:12',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'ai papai',
                'description' => NULL,
                'created_at' => '2018-03-27 13:48:36',
                'updated_at' => '2018-03-27 13:48:36',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'xuxuzinnoazeite',
                'description' => NULL,
                'created_at' => '2018-03-27 13:54:25',
                'updated_at' => '2018-03-27 13:54:25',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'xxtonline',
                'description' => NULL,
                'created_at' => '2018-03-27 14:03:30',
                'updated_at' => '2018-03-27 14:03:30',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'dlkamsdkmlaksmd',
                'description' => NULL,
                'created_at' => '2018-03-27 14:08:11',
                'updated_at' => '2018-03-27 14:08:11',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            10 => 
            array (
                'id' => 16,
                'name' => '@@@@',
                'description' => NULL,
                'created_at' => '2018-03-27 14:10:08',
                'updated_at' => '2018-03-27 14:10:08',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            11 => 
            array (
                'id' => 17,
                'name' => '!!!!',
                'description' => NULL,
                'created_at' => '2018-03-27 14:10:45',
                'updated_at' => '2018-03-27 14:10:45',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'dpaoskdpoakspdokapsd',
                'description' => NULL,
                'created_at' => '2018-03-27 14:12:18',
                'updated_at' => '2018-03-27 14:12:18',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'Aniversário da Comuna',
                'description' => NULL,
                'created_at' => '2018-03-27 14:13:50',
                'updated_at' => '2018-03-27 14:13:50',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'Maratona do Alto Conhecimento',
                'description' => NULL,
                'created_at' => '2018-03-27 14:14:13',
                'updated_at' => '2018-03-27 14:14:13',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'djoaisjodijaosidjadios',
                'description' => NULL,
                'created_at' => '2018-03-27 22:11:26',
                'updated_at' => '2018-03-27 22:11:26',
                'created_id' => 1,
                'updated_id' => 1,
            ),
        ));
        
        
    }
}