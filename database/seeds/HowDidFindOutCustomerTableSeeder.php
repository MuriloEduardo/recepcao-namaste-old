<?php

use Illuminate\Database\Seeder;

class HowDidFindOutCustomerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('how_did_find_out_customer')->delete();
        
        \DB::table('how_did_find_out_customer')->insert(array (
            0 => 
            array (
                'how_did_find_out_id' => 1,
                'customer_id' => 6,
            ),
            1 => 
            array (
                'how_did_find_out_id' => 2,
                'customer_id' => 6,
            ),
            2 => 
            array (
                'how_did_find_out_id' => 3,
                'customer_id' => 6,
            ),
            3 => 
            array (
                'how_did_find_out_id' => 3,
                'customer_id' => 7,
            ),
            4 => 
            array (
                'how_did_find_out_id' => 1,
                'customer_id' => 1,
            ),
            5 => 
            array (
                'how_did_find_out_id' => 2,
                'customer_id' => 1,
            ),
            6 => 
            array (
                'how_did_find_out_id' => 3,
                'customer_id' => 1,
            ),
            7 => 
            array (
                'how_did_find_out_id' => 2,
                'customer_id' => 15,
            ),
            8 => 
            array (
                'how_did_find_out_id' => 3,
                'customer_id' => 14,
            ),
        ));
        
        
    }
}