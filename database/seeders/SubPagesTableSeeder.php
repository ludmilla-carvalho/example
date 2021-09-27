<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_pages')->delete();
        
        \DB::table('sub_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 4,
                'name' => 'Escola de Formação',
                'slug' => 'escola-de-formacao',
                'name_en' => 'Escola de Formação',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'publish' => 1,
                'order' => 1,
                'created_at' => '2021-09-14 15:13:07',
                'updated_at' => '2021-09-14 15:13:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 4,
                'name' => 'Responsabilidade Social',
                'slug' => 'responsabilidade-social',
                'name_en' => 'Responsabilidade Social',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'publish' => 1,
                'order' => 2,
                'created_at' => '2021-09-14 16:23:12',
                'updated_at' => '2021-09-14 16:23:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 4,
                'name' => 'Diversidade e Inclusão',
                'slug' => 'diversidade-e-inclusao',
                'name_en' => 'Diversidade e Inclusão',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'publish' => 1,
                'order' => 3,
                'created_at' => '2021-09-14 16:31:13',
                'updated_at' => '2021-09-14 18:01:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 4,
                'name' => 'Comissão da Mulher',
                'slug' => 'comissao-da-mulher',
                'name_en' => 'Comissão da Mulher',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'publish' => 1,
                'order' => 4,
                'created_at' => '2021-09-14 17:16:11',
                'updated_at' => '2021-09-14 17:16:11',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 4,
                'name' => 'Comissão de Diversidade e Inclusão',
                'slug' => 'comissao-de-diversidade-e-inclusao',
                'name_en' => 'Comissão de Diversidade e Inclusão',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'publish' => 1,
                'order' => 5,
                'created_at' => '2021-09-14 22:20:28',
                'updated_at' => '2021-09-15 00:17:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}