<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            19 => 
            array (
                'id' => 35,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            20 => 
            array (
                'id' => 36,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            21 => 
            array (
                'id' => 37,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            22 => 
            array (
                'id' => 38,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            23 => 
            array (
                'id' => 39,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-03-21 15:31:19',
                'updated_at' => '2018-03-21 15:31:19',
                'permission_group_id' => NULL,
            ),
            24 => 
            array (
                'id' => 40,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
                'permission_group_id' => NULL,
            ),
            25 => 
            array (
                'id' => 46,
                'key' => 'browse_events',
                'table_name' => 'events',
                'created_at' => '2018-03-22 19:38:32',
                'updated_at' => '2018-03-22 19:38:32',
                'permission_group_id' => NULL,
            ),
            26 => 
            array (
                'id' => 47,
                'key' => 'read_events',
                'table_name' => 'events',
                'created_at' => '2018-03-22 19:38:32',
                'updated_at' => '2018-03-22 19:38:32',
                'permission_group_id' => NULL,
            ),
            27 => 
            array (
                'id' => 48,
                'key' => 'edit_events',
                'table_name' => 'events',
                'created_at' => '2018-03-22 19:38:32',
                'updated_at' => '2018-03-22 19:38:32',
                'permission_group_id' => NULL,
            ),
            28 => 
            array (
                'id' => 49,
                'key' => 'add_events',
                'table_name' => 'events',
                'created_at' => '2018-03-22 19:38:32',
                'updated_at' => '2018-03-22 19:38:32',
                'permission_group_id' => NULL,
            ),
            29 => 
            array (
                'id' => 50,
                'key' => 'delete_events',
                'table_name' => 'events',
                'created_at' => '2018-03-22 19:38:32',
                'updated_at' => '2018-03-22 19:38:32',
                'permission_group_id' => NULL,
            ),
            30 => 
            array (
                'id' => 56,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'created_at' => '2018-03-23 15:22:05',
                'updated_at' => '2018-03-23 15:22:05',
                'permission_group_id' => NULL,
            ),
            31 => 
            array (
                'id' => 57,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'created_at' => '2018-03-23 15:22:05',
                'updated_at' => '2018-03-23 15:22:05',
                'permission_group_id' => NULL,
            ),
            32 => 
            array (
                'id' => 58,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'created_at' => '2018-03-23 15:22:05',
                'updated_at' => '2018-03-23 15:22:05',
                'permission_group_id' => NULL,
            ),
            33 => 
            array (
                'id' => 59,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'created_at' => '2018-03-23 15:22:05',
                'updated_at' => '2018-03-23 15:22:05',
                'permission_group_id' => NULL,
            ),
            34 => 
            array (
                'id' => 60,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'created_at' => '2018-03-23 15:22:05',
                'updated_at' => '2018-03-23 15:22:05',
                'permission_group_id' => NULL,
            ),
            35 => 
            array (
                'id' => 61,
                'key' => 'browse_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-03-23 19:02:22',
                'updated_at' => '2018-03-23 19:02:22',
                'permission_group_id' => NULL,
            ),
            36 => 
            array (
                'id' => 62,
                'key' => 'read_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-03-23 19:02:22',
                'updated_at' => '2018-03-23 19:02:22',
                'permission_group_id' => NULL,
            ),
            37 => 
            array (
                'id' => 63,
                'key' => 'edit_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-03-23 19:02:22',
                'updated_at' => '2018-03-23 19:02:22',
                'permission_group_id' => NULL,
            ),
            38 => 
            array (
                'id' => 64,
                'key' => 'add_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-03-23 19:02:22',
                'updated_at' => '2018-03-23 19:02:22',
                'permission_group_id' => NULL,
            ),
            39 => 
            array (
                'id' => 65,
                'key' => 'delete_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-03-23 19:02:22',
                'updated_at' => '2018-03-23 19:02:22',
                'permission_group_id' => NULL,
            ),
            40 => 
            array (
                'id' => 66,
                'key' => 'browse_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-03-23 19:09:38',
                'updated_at' => '2018-03-23 19:09:38',
                'permission_group_id' => NULL,
            ),
            41 => 
            array (
                'id' => 67,
                'key' => 'read_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-03-23 19:09:38',
                'updated_at' => '2018-03-23 19:09:38',
                'permission_group_id' => NULL,
            ),
            42 => 
            array (
                'id' => 68,
                'key' => 'edit_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-03-23 19:09:38',
                'updated_at' => '2018-03-23 19:09:38',
                'permission_group_id' => NULL,
            ),
            43 => 
            array (
                'id' => 69,
                'key' => 'add_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-03-23 19:09:38',
                'updated_at' => '2018-03-23 19:09:38',
                'permission_group_id' => NULL,
            ),
            44 => 
            array (
                'id' => 70,
                'key' => 'delete_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-03-23 19:09:38',
                'updated_at' => '2018-03-23 19:09:38',
                'permission_group_id' => NULL,
            ),
            45 => 
            array (
                'id' => 71,
                'key' => 'browse_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-03-24 23:40:58',
                'updated_at' => '2018-03-24 23:40:58',
                'permission_group_id' => NULL,
            ),
            46 => 
            array (
                'id' => 72,
                'key' => 'read_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-03-24 23:40:58',
                'updated_at' => '2018-03-24 23:40:58',
                'permission_group_id' => NULL,
            ),
            47 => 
            array (
                'id' => 73,
                'key' => 'edit_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-03-24 23:40:58',
                'updated_at' => '2018-03-24 23:40:58',
                'permission_group_id' => NULL,
            ),
            48 => 
            array (
                'id' => 74,
                'key' => 'add_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-03-24 23:40:58',
                'updated_at' => '2018-03-24 23:40:58',
                'permission_group_id' => NULL,
            ),
            49 => 
            array (
                'id' => 75,
                'key' => 'delete_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-03-24 23:40:58',
                'updated_at' => '2018-03-24 23:40:58',
                'permission_group_id' => NULL,
            ),
            50 => 
            array (
                'id' => 81,
                'key' => 'browse_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-03-25 14:50:30',
                'updated_at' => '2018-03-25 14:50:30',
                'permission_group_id' => NULL,
            ),
            51 => 
            array (
                'id' => 82,
                'key' => 'read_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-03-25 14:50:30',
                'updated_at' => '2018-03-25 14:50:30',
                'permission_group_id' => NULL,
            ),
            52 => 
            array (
                'id' => 83,
                'key' => 'edit_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-03-25 14:50:30',
                'updated_at' => '2018-03-25 14:50:30',
                'permission_group_id' => NULL,
            ),
            53 => 
            array (
                'id' => 84,
                'key' => 'add_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-03-25 14:50:30',
                'updated_at' => '2018-03-25 14:50:30',
                'permission_group_id' => NULL,
            ),
            54 => 
            array (
                'id' => 85,
                'key' => 'delete_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-03-25 14:50:30',
                'updated_at' => '2018-03-25 14:50:30',
                'permission_group_id' => NULL,
            ),
            55 => 
            array (
                'id' => 91,
                'key' => 'browse_participations',
                'table_name' => 'participations',
                'created_at' => '2018-03-25 20:58:13',
                'updated_at' => '2018-03-25 20:58:13',
                'permission_group_id' => NULL,
            ),
            56 => 
            array (
                'id' => 92,
                'key' => 'read_participations',
                'table_name' => 'participations',
                'created_at' => '2018-03-25 20:58:13',
                'updated_at' => '2018-03-25 20:58:13',
                'permission_group_id' => NULL,
            ),
            57 => 
            array (
                'id' => 93,
                'key' => 'edit_participations',
                'table_name' => 'participations',
                'created_at' => '2018-03-25 20:58:13',
                'updated_at' => '2018-03-25 20:58:13',
                'permission_group_id' => NULL,
            ),
            58 => 
            array (
                'id' => 94,
                'key' => 'add_participations',
                'table_name' => 'participations',
                'created_at' => '2018-03-25 20:58:13',
                'updated_at' => '2018-03-25 20:58:13',
                'permission_group_id' => NULL,
            ),
            59 => 
            array (
                'id' => 95,
                'key' => 'delete_participations',
                'table_name' => 'participations',
                'created_at' => '2018-03-25 20:58:13',
                'updated_at' => '2018-03-25 20:58:13',
                'permission_group_id' => NULL,
            ),
            60 => 
            array (
                'id' => 96,
                'key' => 'browse_attachments',
                'table_name' => 'attachments',
                'created_at' => '2018-03-29 15:23:30',
                'updated_at' => '2018-03-29 15:23:30',
                'permission_group_id' => NULL,
            ),
            61 => 
            array (
                'id' => 97,
                'key' => 'read_attachments',
                'table_name' => 'attachments',
                'created_at' => '2018-03-29 15:23:30',
                'updated_at' => '2018-03-29 15:23:30',
                'permission_group_id' => NULL,
            ),
            62 => 
            array (
                'id' => 98,
                'key' => 'edit_attachments',
                'table_name' => 'attachments',
                'created_at' => '2018-03-29 15:23:30',
                'updated_at' => '2018-03-29 15:23:30',
                'permission_group_id' => NULL,
            ),
            63 => 
            array (
                'id' => 99,
                'key' => 'add_attachments',
                'table_name' => 'attachments',
                'created_at' => '2018-03-29 15:23:30',
                'updated_at' => '2018-03-29 15:23:30',
                'permission_group_id' => NULL,
            ),
            64 => 
            array (
                'id' => 100,
                'key' => 'delete_attachments',
                'table_name' => 'attachments',
                'created_at' => '2018-03-29 15:23:30',
                'updated_at' => '2018-03-29 15:23:30',
                'permission_group_id' => NULL,
            ),
            65 => 
            array (
                'id' => 101,
                'key' => 'browse_events_classifications',
                'table_name' => 'events_classifications',
                'created_at' => '2018-04-12 01:21:28',
                'updated_at' => '2018-04-12 01:21:28',
                'permission_group_id' => NULL,
            ),
            66 => 
            array (
                'id' => 102,
                'key' => 'read_events_classifications',
                'table_name' => 'events_classifications',
                'created_at' => '2018-04-12 01:21:28',
                'updated_at' => '2018-04-12 01:21:28',
                'permission_group_id' => NULL,
            ),
            67 => 
            array (
                'id' => 103,
                'key' => 'edit_events_classifications',
                'table_name' => 'events_classifications',
                'created_at' => '2018-04-12 01:21:28',
                'updated_at' => '2018-04-12 01:21:28',
                'permission_group_id' => NULL,
            ),
            68 => 
            array (
                'id' => 104,
                'key' => 'add_events_classifications',
                'table_name' => 'events_classifications',
                'created_at' => '2018-04-12 01:21:28',
                'updated_at' => '2018-04-12 01:21:28',
                'permission_group_id' => NULL,
            ),
            69 => 
            array (
                'id' => 105,
                'key' => 'delete_events_classifications',
                'table_name' => 'events_classifications',
                'created_at' => '2018-04-12 01:21:28',
                'updated_at' => '2018-04-12 01:21:28',
                'permission_group_id' => NULL,
            ),
        ));
        
        
    }
}