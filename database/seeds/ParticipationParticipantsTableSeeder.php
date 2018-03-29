<?php

use Illuminate\Database\Seeder;

class ParticipationParticipantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('participation_participants')->delete();
        
        \DB::table('participation_participants')->insert(array (
            0 => 
            array (
                'id' => 8,
                'customer_id' => NULL,
                'professional_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 17,
            ),
            1 => 
            array (
                'id' => 9,
                'customer_id' => NULL,
                'professional_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 17,
            ),
            2 => 
            array (
                'id' => 10,
                'customer_id' => NULL,
                'professional_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 17,
            ),
            3 => 
            array (
                'id' => 11,
                'customer_id' => 6,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 17,
            ),
            4 => 
            array (
                'id' => 12,
                'customer_id' => 1,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 18,
            ),
            5 => 
            array (
                'id' => 13,
                'customer_id' => 3,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 18,
            ),
            6 => 
            array (
                'id' => 14,
                'customer_id' => 4,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 18,
            ),
            7 => 
            array (
                'id' => 15,
                'customer_id' => 3,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 19,
            ),
            8 => 
            array (
                'id' => 16,
                'customer_id' => 1,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 20,
            ),
            9 => 
            array (
                'id' => 17,
                'customer_id' => 4,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 20,
            ),
            10 => 
            array (
                'id' => 18,
                'customer_id' => NULL,
                'professional_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 20,
            ),
            11 => 
            array (
                'id' => 19,
                'customer_id' => NULL,
                'professional_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 20,
            ),
        ));
        
        
    }
}