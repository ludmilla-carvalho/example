<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 2,
                'sub_page_id' => NULL,
                'image' => '1627482517.jpg',
                'image_mobile' => '1629231342.png',
                'title' => 'Advogados',
                'title_en' => 'Advogados',
                'sub_title' => 'Excelência e dedicação para aprimorar seu negócio',
                'sub_title_en' => 'Excelência e dedicação para aprimorar seu negócio ',
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-08-17 16:54:22',
                'updated_at' => '2021-08-17 17:15:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 3,
                'sub_page_id' => NULL,
                'image' => '1631672856.png',
                'image_mobile' => '1629231744.png',
                'title' => 'Atuação',
                'title_en' => 'Atuação',
                'sub_title' => 'Somos um escritório brasileiro multidisciplinar de visão global',
                'sub_title_en' => 'Somos um escritório brasileiro multidisciplinar de visão global',
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-07-05 16:29:39',
                'updated_at' => '2021-09-14 23:27:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 4,
                'sub_page_id' => NULL,
                'image' => '1629236940.png',
                'image_mobile' => '1629236914.png',
                'title' => 'O Escritório',
                'title_en' => 'O Escritório',
                'sub_title' => 'Aprimoramos o seu negócio e a sociedade por meio do Direito',
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-08-17 18:48:33',
                'updated_at' => '2021-09-10 19:12:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => NULL,
                'sub_page_id' => 1,
                'image' => '1631646763.png',
                'image_mobile' => '1631646719.png',
                'title' => 'Escola de Formação',
                'title_en' => 'Escola de Formação',
                'sub_title' => NULL,
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => NULL,
                'updated_at' => '2021-09-14 16:12:43',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => NULL,
                'sub_page_id' => 2,
                'image' => '1631647767.png',
                'image_mobile' => '1631647767m.png',
                'title' => 'Responsabilidade Social',
                'title_en' => 'Responsabilidade Social',
                'sub_title' => 'Transformando histórias na mesma medida em que somos transformados',
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 16:29:27',
                'updated_at' => '2021-09-14 19:01:27',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => NULL,
                'sub_page_id' => 3,
                'image' => '1631647897.png',
                'image_mobile' => '1631647897m.png',
                'title' => 'Diversidade e Inclusão',
                'title_en' => 'Diversidade e Inclusão',
                'sub_title' => 'Incluir para ser plural.
Incluir para fazer o certo.',
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 16:31:37',
                'updated_at' => '2021-09-14 22:02:27',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => NULL,
                'sub_page_id' => 4,
                'image' => '1631650617.png',
                'image_mobile' => '1631650617m.png',
                'title' => 'Comissão da Mulher',
                'title_en' => 'Comissão da Mulher',
                'sub_title' => NULL,
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 17:16:57',
                'updated_at' => '2021-09-14 17:16:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'page_id' => NULL,
                'sub_page_id' => 5,
                'image' => '1631668899.png',
                'image_mobile' => '1631668899m.png',
                'title' => 'Comissão de Diversidade e Inclusão',
                'title_en' => 'Comissão de Diversidade e Inclusão',
                'sub_title' => NULL,
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 22:21:39',
                'updated_at' => '2021-09-14 22:21:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'page_id' => 6,
                'sub_page_id' => NULL,
                'image' => '1632236772.png',
                'image_mobile' => '1632236772m.png',
                'title' => 'Eventos',
                'title_en' => 'Eventos',
                'sub_title' => 'Conhecimento e troca de experiências com nossos convidados',
                'sub_title_en' => NULL,
                'link' => NULL,
                'text_link' => NULL,
                'text_link_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-21 12:06:12',
                'updated_at' => '2021-09-21 12:06:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}