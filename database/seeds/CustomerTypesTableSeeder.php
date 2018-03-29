<?php

use Illuminate\Database\Seeder;

class CustomerTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_types')->delete();
        
        \DB::table('customer_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lable' => 'Amigos',
                'created_at' => '2018-03-23 19:34:26',
                'updated_at' => '2018-03-23 19:34:26',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'lable' => 'Padrão',
                'created_at' => '2018-03-23 19:41:03',
                'updated_at' => '2018-03-25 22:46:08',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'lable' => 'Visitante',
                'created_at' => '2018-03-25 22:46:19',
                'updated_at' => '2018-03-25 22:46:19',
                'created_id' => 1,
                'updated_id' => 1,
            ),
        ));
        
        
    }
}