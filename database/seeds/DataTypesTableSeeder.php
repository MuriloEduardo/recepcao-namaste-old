<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuário',
                'display_name_plural' => 'Usuários',
                'icon' => 'voyager-person',
                'model_name' => 'App\\User',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-21 15:31:17',
                'updated_at' => '2018-04-11 22:48:30',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-21 15:31:17',
                'updated_at' => '2018-03-21 15:31:17',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-21 15:31:18',
                'updated_at' => '2018-03-21 15:31:18',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'events',
                'slug' => 'eventos',
                'display_name_singular' => 'Evento',
                'display_name_plural' => 'Eventos',
                'icon' => 'voyager-pizza',
                'model_name' => 'App\\Event',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-22 19:38:32',
                'updated_at' => '2018-03-22 19:58:02',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'therapists',
                'slug' => 'terapeutas',
                'display_name_singular' => 'Terapeuta',
                'display_name_plural' => 'Terapeutas',
                'icon' => 'voyager-study',
                'model_name' => 'App\\Therapist',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-23 12:56:14',
                'updated_at' => '2018-03-23 12:56:14',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'customers',
                'slug' => 'clientes',
                'display_name_singular' => 'Cliente',
                'display_name_plural' => 'Clientes',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Customer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-23 15:22:05',
                'updated_at' => '2018-03-23 15:22:05',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'customer_types',
                'slug' => 'tipos-de-cliente',
                'display_name_singular' => 'Tipo de Cliente',
                'display_name_plural' => 'Tipos de Clientes',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\CustomerType',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-23 19:02:22',
                'updated_at' => '2018-03-23 19:02:22',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'how_did_find_outs',
                'slug' => 'como-ficou-sabendo',
                'display_name_singular' => 'Como Ficou Sabendo',
                'display_name_plural' => 'Como Ficou Sabendo',
                'icon' => 'voyager-megaphone',
                'model_name' => 'App\\HowDidFindOut',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-23 19:09:38',
                'updated_at' => '2018-03-23 19:09:38',
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'professionals',
                'slug' => 'profissionais',
                'display_name_singular' => 'Profissional',
                'display_name_plural' => 'Profissionais',
                'icon' => 'voyager-study',
                'model_name' => 'App\\Professional',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-24 23:40:58',
                'updated_at' => '2018-03-24 23:40:58',
            ),
            9 => 
            array (
                'id' => 16,
                'name' => 'professional_types',
                'slug' => 'tipos-de-profissional',
                'display_name_singular' => 'Tipo de Profissional',
                'display_name_plural' => 'Tipos de Profissionais',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\ProfessionalType',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-25 14:50:30',
                'updated_at' => '2018-03-25 15:06:13',
            ),
            10 => 
            array (
                'id' => 18,
                'name' => 'participations',
                'slug' => 'participacoes',
                'display_name_singular' => 'Participação',
                'display_name_plural' => 'Participações',
                'icon' => 'voyager-list-add',
                'model_name' => 'App\\Participation',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-25 20:58:13',
                'updated_at' => '2018-03-25 21:25:11',
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'attachments',
                'slug' => 'anexos',
                'display_name_singular' => 'Anexo',
                'display_name_plural' => 'Anexos',
                'icon' => 'voyager-paperclip',
                'model_name' => 'App\\Attachment',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-03-29 15:23:30',
                'updated_at' => '2018-03-29 15:23:30',
            ),
            12 => 
            array (
                'id' => 22,
                'name' => 'events_classifications',
                'slug' => 'events-classifications',
                'display_name_singular' => 'Classificação de Evento',
                'display_name_plural' => 'Classificações de Eventos',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\EventClassification',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-12 01:21:28',
                'updated_at' => '2018-04-12 01:21:28',
            ),
            13 => 
            array (
                'id' => 23,
                'name' => 'event_classifications',
                'slug' => 'event-classifications',
                'display_name_singular' => 'Classificação de Evento',
                'display_name_plural' => 'Classificações de Eventos',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\EventClassification',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'created_at' => '2018-04-12 01:27:28',
                'updated_at' => '2018-04-12 01:28:04',
            ),
        ));
        
        
    }
}