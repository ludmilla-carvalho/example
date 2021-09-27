<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HighlightsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('highlights')->delete();
        
        \DB::table('highlights')->insert(array (
            0 => 
            array (
                'id' => 6,
                'page_id' => 1,
                'image' => '1625176533.png',
                'image_mobile' => '1629225979.png',
                'title' => 'Aprimoramos seu negócio e a sociedade pelo Direito',
                'title_en' => 'Aprimoramos seu negócio e a sociedade pelo Direito',
                'sub_title' => 'Traduzimos o cenário jurídico brasileiro, combinando tradição e inovação há mais de 75 anos.',
                'sub_title_en' => 'Traduzimos o cenário jurídico brasileiro, combinando tradição e inovação há mais de 75 anos.',
                'link' => '',
                'text_link' => 'Conheça nossa história',
                'text_link_en' => 'Conheça nossa história',
                'order' => 1,
                'publish' => 1,
                'created_at' => '2021-06-28 19:00:45',
                'updated_at' => '2021-08-17 15:46:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}