<?php

use Illuminate\Database\Seeder;

class CustomerParticipationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_participation')->delete();
        
        \DB::table('customer_participation')->insert(array (
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
            12 => 
            array (
                'id' => 20,
                'customer_id' => 1,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 21,
            ),
            13 => 
            array (
                'id' => 21,
                'customer_id' => 4,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 21,
            ),
            14 => 
            array (
                'id' => 22,
                'customer_id' => NULL,
                'professional_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 21,
            ),
            15 => 
            array (
                'id' => 23,
                'customer_id' => 1,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 22,
            ),
            16 => 
            array (
                'id' => 24,
                'customer_id' => NULL,
                'professional_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 22,
            ),
            17 => 
            array (
                'id' => 25,
                'customer_id' => 4,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 23,
            ),
            18 => 
            array (
                'id' => 26,
                'customer_id' => 1,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 24,
            ),
            19 => 
            array (
                'id' => 28,
                'customer_id' => 1,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 26,
            ),
            20 => 
            array (
                'id' => 29,
                'customer_id' => 2,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 26,
            ),
            21 => 
            array (
                'id' => 30,
                'customer_id' => NULL,
                'professional_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 26,
            ),
            22 => 
            array (
                'id' => 31,
                'customer_id' => 17,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 27,
            ),
            23 => 
            array (
                'id' => 32,
                'customer_id' => 18,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 27,
            ),
            24 => 
            array (
                'id' => 33,
                'customer_id' => NULL,
                'professional_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 27,
            ),
            25 => 
            array (
                'id' => 34,
                'customer_id' => NULL,
                'professional_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 27,
            ),
            26 => 
            array (
                'id' => 35,
                'customer_id' => 6,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 25,
            ),
            27 => 
            array (
                'id' => 36,
                'customer_id' => 2,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 28,
            ),
            28 => 
            array (
                'id' => 37,
                'customer_id' => 19,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 28,
            ),
            29 => 
            array (
                'id' => 38,
                'customer_id' => NULL,
                'professional_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 28,
            ),
            30 => 
            array (
                'id' => 39,
                'customer_id' => 2,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 29,
            ),
            31 => 
            array (
                'id' => 40,
                'customer_id' => 19,
                'professional_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 29,
            ),
            32 => 
            array (
                'id' => 41,
                'customer_id' => NULL,
                'professional_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'participation_id' => 29,
            ),
        ));
        
        
    }
}