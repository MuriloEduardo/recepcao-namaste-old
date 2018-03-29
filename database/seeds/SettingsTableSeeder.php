<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/March2018/iOqVJWqz0TELs0NfeOTU.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 6,
                'group' => 'Admin',
            ),
            1 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Seja bem-vindx! Use e abuse do controle de recepção do Namastê <3',
                'details' => '',
                'type' => 'text',
                'order' => 3,
                'group' => 'Admin',
            ),
            2 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings/March2018/ymnzCNWOkYi1T84kCpeC.gif',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            3 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings/March2018/6yq3o4PLNl6Nx4JXRXSb.png',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 11,
                'key' => 'admin.title',
                'display_name' => 'Título do Admin',
                'value' => 'Recepção Namastê',
                'details' => NULL,
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
        ));
        
        
    }
}