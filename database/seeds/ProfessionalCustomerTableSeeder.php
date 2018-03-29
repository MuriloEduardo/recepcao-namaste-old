<?php

use Illuminate\Database\Seeder;

class ProfessionalCustomerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professional_customer')->delete();
        
        \DB::table('professional_customer')->insert(array (
            0 => 
            array (
                'professional_id' => 1,
                'customer_id' => 1,
            ),
            1 => 
            array (
                'professional_id' => 1,
                'customer_id' => 2,
            ),
            2 => 
            array (
                'professional_id' => 2,
                'customer_id' => 3,
            ),
            3 => 
            array (
                'professional_id' => 2,
                'customer_id' => 4,
            ),
            4 => 
            array (
                'professional_id' => 2,
                'customer_id' => 5,
            ),
            5 => 
            array (
                'professional_id' => 2,
                'customer_id' => 1,
            ),
            6 => 
            array (
                'professional_id' => 3,
                'customer_id' => 1,
            ),
            7 => 
            array (
                'professional_id' => 3,
                'customer_id' => 2,
            ),
            8 => 
            array (
                'professional_id' => 3,
                'customer_id' => 3,
            ),
            9 => 
            array (
                'professional_id' => 3,
                'customer_id' => 4,
            ),
            10 => 
            array (
                'professional_id' => 3,
                'customer_id' => 5,
            ),
            11 => 
            array (
                'professional_id' => 3,
                'customer_id' => 6,
            ),
            12 => 
            array (
                'professional_id' => 4,
                'customer_id' => 3,
            ),
        ));
        
        
    }
}