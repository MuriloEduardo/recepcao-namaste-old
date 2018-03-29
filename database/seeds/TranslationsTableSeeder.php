<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Post',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Página',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizador',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categoria',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Menu',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Função',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Posts',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'categoria-1',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Categoria 1',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'categoria-2',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Categoria 2',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Olá Mundo',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'ola-mundo',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Painel de Controle',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Media',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Publicações',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 8,
                'locale' => 'pt',
                'value' => 'Ferramentas',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 9,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'pt',
                'value' => 'Base de dados',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'pt',
                'value' => 'Configurações',
                'created_at' => '2018-03-21 15:31:20',
                'updated_at' => '2018-03-21 15:31:20',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 14,
                'locale' => 'en',
                'value' => 'Clientes',
                'created_at' => '2018-03-22 17:34:41',
                'updated_at' => '2018-03-22 17:34:41',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Cliente',
                'created_at' => '2018-03-22 17:36:51',
                'updated_at' => '2018-03-22 17:36:51',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'Clientes',
                'created_at' => '2018-03-22 17:36:51',
                'updated_at' => '2018-03-22 17:36:51',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Usuário',
                'created_at' => '2018-03-22 17:38:04',
                'updated_at' => '2018-03-22 17:38:04',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Usuários',
                'created_at' => '2018-03-22 17:38:04',
                'updated_at' => '2018-03-22 17:38:04',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Usuários',
                'created_at' => '2018-03-22 17:39:14',
                'updated_at' => '2018-03-22 17:39:14',
            ),
        ));
        
        
    }
}