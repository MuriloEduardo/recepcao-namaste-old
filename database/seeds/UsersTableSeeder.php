<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Nisargam',
                'email' => 'murilosantoseduardo@gmail.com',
                'avatar' => 'usuarios/March2018/gcMgn64syLa5SZ2UBhfm.jpg',
                'password' => '$2y$10$QtgCWkn8QBIspbHjjDLphu/4JeQyZRbovttKMAVj7J1CJoi1Z2jQe',
                'remember_token' => '59U2auPK73hVdKRVn0cZLT4VEgowSbq8QuHotpyI9nNJHVwWlltswoxjLSuj',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-23 16:37:18',
                'created_id' => 0,
                'updated_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Maria de Fátima Ribeiro',
                'email' => 'maria.ribeiro@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$pUPAKYGibfJrlJOaXhObKOqLMK51aOC/iq2FWdcWGsi5KOyPocFfa',
                'remember_token' => 'GZQd4oApMo3YyLzBAPRpELCFq2Q0vpVsr7LwbFaI2oovbPcnMiize59NySsY',
                'created_at' => '2018-03-22 16:08:35',
                'updated_at' => '2018-03-22 16:08:35',
                'created_id' => 0,
                'updated_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Pedro Antônio Santos',
                'email' => 'pedro.antonio@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$gQsjUxanJRxDsFmIIyfYau8PzeBvAMR4OeVIKTXaiMwJrzhjr7tU.',
                'remember_token' => 'bIR0YBDMQlZXuDK5VC51F33rKprNPqriFnIWCIhFP9J0pVbQLNeKbvDTDcXH',
                'created_at' => '2018-03-22 16:09:07',
                'updated_at' => '2018-03-22 17:05:07',
                'created_id' => 0,
                'updated_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 4,
                'name' => 'Sw. Rutajit',
                'email' => 'rutajit@gmail.com',
                'avatar' => 'usuarios/March2018/IvFNfBgGxQivzLlAVgCc.png',
                'password' => '$2y$10$ijxwC8fYaINZaCyLOC4c4OtHzkthXmTmuEiWwItUr378nHMVifYSi',
                'remember_token' => 'lbYv9NXyqXp7qnXZY7LlnoI1fiXON76M9KoUaHBkoc0sZ9XK2DuciQ3cc6Ao',
                'created_at' => '2018-03-23 11:54:45',
                'updated_at' => '2018-03-23 17:00:56',
                'created_id' => 0,
                'updated_id' => 4,
            ),
        ));
        
        
    }
}