<?php

use Illuminate\Database\Seeder;

class AttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attachments')->delete();
        
        \DB::table('attachments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => '[{"download_link":"anexos\\/March2018\\/nQfVRKCSlosuDjMBnjnR.jpg","original_name":"1522338763257-647184777.jpg"}]',
                'title' => 'Banheiro',
                'active' => 0,
                'customer_id' => 1,
                'created_at' => '2018-03-29 15:38:00',
                'updated_at' => '2018-03-29 15:53:28',
            ),
            1 => 
            array (
                'id' => 2,
            'path' => '[{"download_link":"anexos\\/March2018\\/TwKHdEuwlCb5hbktb30o.png","original_name":"Captura de Tela 2018-03-29 a\\u0300s 11.32.02 (2).png"}]',
                'title' => 'Primeira ficha cadastral',
                'active' => 1,
                'customer_id' => 1,
                'created_at' => '2018-03-29 19:45:20',
                'updated_at' => '2018-03-29 19:45:20',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => '[{"download_link":"anexos\\/March2018\\/J8hB2hleLWVVQ5j03nin.xlsx","original_name":"Requisitos_Namaste_v1.xlsx"}]',
                'title' => 'Bla bla whiskas sache',
                'active' => 1,
                'customer_id' => 16,
                'created_at' => '2018-03-29 19:48:00',
                'updated_at' => '2018-03-30 13:45:22',
            ),
        ));
        
        
    }
}