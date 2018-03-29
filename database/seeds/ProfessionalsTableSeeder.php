<?php

use Illuminate\Database\Seeder;

class ProfessionalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professionals')->delete();
        
        \DB::table('professionals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Arine Cougo',
                'sannyas' => 'Manindra',
                'created_id' => 1,
                'created_at' => '2018-03-23 13:25:56',
                'updated_at' => '2018-03-25 23:05:32',
                'updated_id' => 1,
                'type_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rodolfo Braga',
                'sannyas' => 'Aiman',
                'created_id' => 1,
                'created_at' => '2018-03-23 13:37:25',
                'updated_at' => '2018-03-25 23:05:20',
                'updated_id' => 1,
                'type_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'José',
                'sannyas' => 'Prammit',
                'created_id' => 3,
                'created_at' => '2018-03-24 05:54:39',
                'updated_at' => '2018-03-25 15:17:59',
                'updated_id' => 1,
                'type_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vinicius',
                'sannyas' => 'Manav',
                'created_id' => 1,
                'created_at' => '2018-03-25 15:18:25',
                'updated_at' => '2018-03-25 15:24:12',
                'updated_id' => 1,
                'type_id' => 2,
            ),
        ));
        
        
    }
}