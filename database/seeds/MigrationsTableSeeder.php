<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 8,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 9,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 10,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 11,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 12,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 13,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 14,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 15,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 16,
                'migration' => '2017_01_15_000000_add_permission_group_id_to_permissions_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 17,
                'migration' => '2017_01_15_000000_create_permission_groups_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 18,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 19,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 21,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 22,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 23,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 24,
                'migration' => '2018_03_28_054713_create_customer_types_table',
                'batch' => 2,
            ),
            20 => 
            array (
                'id' => 25,
                'migration' => '2018_03_28_054713_create_customers_table',
                'batch' => 2,
            ),
            21 => 
            array (
                'id' => 26,
                'migration' => '2018_03_28_054713_create_data_rows_table',
                'batch' => 2,
            ),
            22 => 
            array (
                'id' => 27,
                'migration' => '2018_03_28_054713_create_data_types_table',
                'batch' => 2,
            ),
            23 => 
            array (
                'id' => 28,
                'migration' => '2018_03_28_054713_create_events_table',
                'batch' => 2,
            ),
            24 => 
            array (
                'id' => 29,
                'migration' => '2018_03_28_054713_create_how_did_find_out_customer_table',
                'batch' => 2,
            ),
            25 => 
            array (
                'id' => 30,
                'migration' => '2018_03_28_054713_create_how_did_find_outs_table',
                'batch' => 2,
            ),
            26 => 
            array (
                'id' => 31,
                'migration' => '2018_03_28_054713_create_menu_items_table',
                'batch' => 2,
            ),
            27 => 
            array (
                'id' => 32,
                'migration' => '2018_03_28_054713_create_menus_table',
                'batch' => 2,
            ),
            28 => 
            array (
                'id' => 33,
                'migration' => '2018_03_28_054713_create_customer_participation_table',
                'batch' => 2,
            ),
            29 => 
            array (
                'id' => 34,
                'migration' => '2018_03_28_054713_create_participations_table',
                'batch' => 2,
            ),
            30 => 
            array (
                'id' => 35,
                'migration' => '2018_03_28_054713_create_password_resets_table',
                'batch' => 2,
            ),
            31 => 
            array (
                'id' => 36,
                'migration' => '2018_03_28_054713_create_permission_groups_table',
                'batch' => 2,
            ),
            32 => 
            array (
                'id' => 37,
                'migration' => '2018_03_28_054713_create_permission_role_table',
                'batch' => 2,
            ),
            33 => 
            array (
                'id' => 38,
                'migration' => '2018_03_28_054713_create_permissions_table',
                'batch' => 2,
            ),
            34 => 
            array (
                'id' => 39,
                'migration' => '2018_03_28_054713_create_professional_customer_table',
                'batch' => 2,
            ),
            35 => 
            array (
                'id' => 40,
                'migration' => '2018_03_28_054713_create_professional_types_table',
                'batch' => 2,
            ),
            36 => 
            array (
                'id' => 41,
                'migration' => '2018_03_28_054713_create_professionals_table',
                'batch' => 2,
            ),
            37 => 
            array (
                'id' => 42,
                'migration' => '2018_03_28_054713_create_roles_table',
                'batch' => 2,
            ),
            38 => 
            array (
                'id' => 43,
                'migration' => '2018_03_28_054713_create_settings_table',
                'batch' => 2,
            ),
            39 => 
            array (
                'id' => 44,
                'migration' => '2018_03_28_054713_create_translations_table',
                'batch' => 2,
            ),
            40 => 
            array (
                'id' => 45,
                'migration' => '2018_03_28_054713_create_users_table',
                'batch' => 2,
            ),
            41 => 
            array (
                'id' => 46,
                'migration' => '2018_03_28_054716_add_foreign_keys_to_data_rows_table',
                'batch' => 2,
            ),
            42 => 
            array (
                'id' => 47,
                'migration' => '2018_03_28_054716_add_foreign_keys_to_menu_items_table',
                'batch' => 2,
            ),
            43 => 
            array (
                'id' => 48,
                'migration' => '2018_03_28_054716_add_foreign_keys_to_permission_role_table',
                'batch' => 2,
            ),
            44 => 
            array (
                'id' => 49,
                'migration' => '2018_03_28_153547_create_customer_types_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 50,
                'migration' => '2018_03_28_153547_create_customers_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 51,
                'migration' => '2018_03_28_153547_create_data_rows_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 52,
                'migration' => '2018_03_28_153547_create_data_types_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 53,
                'migration' => '2018_03_28_153547_create_events_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 54,
                'migration' => '2018_03_28_153547_create_how_did_find_out_customer_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 55,
                'migration' => '2018_03_28_153547_create_how_did_find_outs_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 56,
                'migration' => '2018_03_28_153547_create_menu_items_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 57,
                'migration' => '2018_03_28_153547_create_menus_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 58,
                'migration' => '2018_03_28_153547_create_customer_participation_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 59,
                'migration' => '2018_03_28_153547_create_participations_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 60,
                'migration' => '2018_03_28_153547_create_password_resets_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 61,
                'migration' => '2018_03_28_153547_create_permission_groups_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 62,
                'migration' => '2018_03_28_153547_create_permission_role_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 63,
                'migration' => '2018_03_28_153547_create_permissions_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 64,
                'migration' => '2018_03_28_153547_create_professional_customer_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 65,
                'migration' => '2018_03_28_153547_create_professional_types_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 66,
                'migration' => '2018_03_28_153547_create_professionals_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 67,
                'migration' => '2018_03_28_153547_create_roles_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 68,
                'migration' => '2018_03_28_153547_create_settings_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 69,
                'migration' => '2018_03_28_153547_create_translations_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 70,
                'migration' => '2018_03_28_153547_create_users_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 71,
                'migration' => '2018_03_28_153549_add_foreign_keys_to_data_rows_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 72,
                'migration' => '2018_03_28_153549_add_foreign_keys_to_menu_items_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 73,
                'migration' => '2018_03_28_153549_add_foreign_keys_to_permission_role_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 74,
                'migration' => '2018_04_23_171433_create_attachments_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 75,
                'migration' => '2018_04_23_171433_create_customer_types_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 76,
                'migration' => '2018_04_23_171433_create_customers_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 77,
                'migration' => '2018_04_23_171433_create_data_rows_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 78,
                'migration' => '2018_04_23_171433_create_data_types_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 79,
                'migration' => '2018_04_23_171433_create_event_classifications_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 80,
                'migration' => '2018_04_23_171433_create_events_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 81,
                'migration' => '2018_04_23_171433_create_how_did_find_out_customer_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 82,
                'migration' => '2018_04_23_171433_create_how_did_find_outs_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 83,
                'migration' => '2018_04_23_171433_create_menu_items_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 84,
                'migration' => '2018_04_23_171433_create_menus_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 85,
                'migration' => '2018_04_23_171433_create_customer_participation_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 86,
                'migration' => '2018_04_23_171433_create_participations_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 87,
                'migration' => '2018_04_23_171433_create_password_resets_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 88,
                'migration' => '2018_04_23_171433_create_permission_groups_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 89,
                'migration' => '2018_04_23_171433_create_permission_role_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 90,
                'migration' => '2018_04_23_171433_create_permissions_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 91,
                'migration' => '2018_04_23_171433_create_professional_customer_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 92,
                'migration' => '2018_04_23_171433_create_professional_types_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 93,
                'migration' => '2018_04_23_171433_create_professionals_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 94,
                'migration' => '2018_04_23_171433_create_roles_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 95,
                'migration' => '2018_04_23_171433_create_settings_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 96,
                'migration' => '2018_04_23_171433_create_translations_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 97,
                'migration' => '2018_04_23_171433_create_users_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 98,
                'migration' => '2018_04_23_171435_add_foreign_keys_to_data_rows_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 99,
                'migration' => '2018_04_23_171435_add_foreign_keys_to_menu_items_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 100,
                'migration' => '2018_04_23_171435_add_foreign_keys_to_permission_role_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}