<?php

use Illuminate\Database\Seeder;

class ProfessionalTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professional_types')->delete();
        
        \DB::table('professional_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lable' => 'Terapeuta',
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-25 15:08:14',
                'updated_at' => '2018-03-25 15:08:14',
            ),
            1 => 
            array (
                'id' => 2,
                'lable' => 'Face Original',
                'created_id' => 1,
                'updated_id' => 1,
                'created_at' => '2018-03-25 15:08:31',
                'updated_at' => '2018-03-25 15:08:31',
            ),
        ));
        
        
    }
}