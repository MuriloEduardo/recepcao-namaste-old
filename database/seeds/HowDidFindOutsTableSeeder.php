<?php

use Illuminate\Database\Seeder;

class HowDidFindOutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('how_did_find_outs')->delete();
        
        \DB::table('how_did_find_outs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lable' => 'Redes sociais',
                'created_at' => '2018-03-23 19:52:04',
                'updated_at' => '2018-03-23 19:52:04',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'lable' => 'Folder',
                'created_at' => '2018-03-23 19:52:16',
                'updated_at' => '2018-03-23 19:52:16',
                'created_id' => 1,
                'updated_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'lable' => 'Passando na frente',
                'created_at' => '2018-03-23 19:52:27',
                'updated_at' => '2018-03-23 19:52:27',
                'created_id' => 1,
                'updated_id' => 1,
            ),
        ));
        
        
    }
}