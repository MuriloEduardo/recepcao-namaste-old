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
                'password' => '$2y$10$QtgCWkn8QBIspbHjjDLphu/4JeQyZRbovttKMAVj7J1CJoi1Z2jQe',
                'remember_token' => 'MUs1Fw8MQJfeyfzvRXUzwS8b71sHPo7a9jHlE4KVScCgeHgQ9X3jvswIuwQz',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-23 16:37:18',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Maria de Fátima Ribeiro',
                'email' => 'maria.ribeiro@gmail.com',
                'password' => '$2y$10$pUPAKYGibfJrlJOaXhObKOqLMK51aOC/iq2FWdcWGsi5KOyPocFfa',
                'remember_token' => 'ovKfVhNmWmVj4pym0nnuDAjkPQdhJJwtOeVhSyw9x3k4WozenN0dOUK941zL',
                'created_at' => '2018-03-22 16:08:35',
                'updated_at' => '2018-03-22 16:08:35',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Pedro Antônio Santos',
                'email' => 'pedro.antonio@gmail.com',
                'password' => '$2y$10$gQsjUxanJRxDsFmIIyfYau8PzeBvAMR4OeVIKTXaiMwJrzhjr7tU.',
                'remember_token' => 'bIR0YBDMQlZXuDK5VC51F33rKprNPqriFnIWCIhFP9J0pVbQLNeKbvDTDcXH',
                'created_at' => '2018-03-22 16:09:07',
                'updated_at' => '2018-03-22 17:05:07',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 4,
                'name' => 'Sw. Rutajit',
                'email' => 'rutajit@gmail.com',
                'password' => '$2y$10$uvUFYofhagswnICcPmf48utPnk9E.Rgm8JCDrnpx5bOstA6BsoUiq',
                'remember_token' => 'lbYv9NXyqXp7qnXZY7LlnoI1fiXON76M9KoUaHBkoc0sZ9XK2DuciQ3cc6Ao',
                'created_at' => '2018-03-23 11:54:45',
                'updated_at' => '2018-04-23 17:06:06',
            ),
        ));
        
        
    }
}