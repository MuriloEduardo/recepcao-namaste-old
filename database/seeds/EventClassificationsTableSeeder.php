<?php

use Illuminate\Database\Seeder;

class EventClassificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_classifications')->delete();
        
        \DB::table('event_classifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Meditação',
                'created_at' => '2018-04-12 01:29:38',
                'updated_at' => '2018-04-12 01:29:38',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'Bioenergética',
                'created_at' => '2018-04-12 01:29:57',
                'updated_at' => '2018-04-12 01:29:57',
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Festa',
                'created_at' => '2018-04-12 01:50:04',
                'updated_at' => '2018-04-12 01:50:04',
            ),
        ));
        
        
    }
}