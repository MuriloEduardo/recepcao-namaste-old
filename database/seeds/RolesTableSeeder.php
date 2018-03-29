<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'root',
                'display_name' => 'Desenvolvedor',
                'created_at' => '2018-03-21 15:31:18',
                'updated_at' => '2018-03-23 18:50:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuário',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-22 16:05:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'display_name' => 'Administrador',
                'created_at' => '2018-03-22 13:35:40',
                'updated_at' => '2018-03-22 16:05:02',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'dev',
                'display_name' => 'Desenvolvedor',
                'created_at' => '2018-03-22 20:30:12',
                'updated_at' => '2018-03-22 20:30:12',
            ),
        ));
        
        
    }
}