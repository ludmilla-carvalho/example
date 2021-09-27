<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home',
                'slug' => 'home',
                'name_en' => 'Home',
                'icon' => '1631549293.svg',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'is_fixed' => 1,
                'publish' => 1,
                'order' => 1,
                'created_at' => '2021-06-25 15:58:29',
                'updated_at' => '2021-09-13 13:08:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Advogados',
                'slug' => 'advogados',
                'name_en' => 'Advogados',
                'icon' => '1631549415.svg',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'is_fixed' => 1,
                'publish' => 1,
                'order' => 3,
                'created_at' => '2021-07-02 12:52:32',
                'updated_at' => '2021-09-13 13:10:15',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Atuação',
                'slug' => 'atuacao',
                'name_en' => 'Atuação',
                'icon' => '1631549376.svg',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'is_fixed' => 1,
                'publish' => 1,
                'order' => 5,
                'created_at' => '2021-07-02 12:52:32',
                'updated_at' => '2021-09-13 13:09:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'O Escritório',
                'slug' => 'o-escritorio',
                'name_en' => 'O Escritório',
                'icon' => '1631549326.svg',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'is_fixed' => 1,
                'publish' => 1,
                'order' => 2,
                'created_at' => NULL,
                'updated_at' => '2021-09-13 13:08:46',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Carreira',
                'slug' => 'carreira',
                'name_en' => 'Carreira',
                'icon' => '1631549359.svg',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'is_fixed' => 1,
                'publish' => 0,
                'order' => 4,
                'created_at' => NULL,
                'updated_at' => '2021-09-13 13:09:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Eventos',
                'slug' => 'eventos',
                'name_en' => 'Eventos',
                'icon' => '1632236044.svg',
                'tit_seo' => NULL,
                'tit_seo_en' => NULL,
                'desc_seo' => NULL,
                'desc_seo_en' => NULL,
                'is_fixed' => 0,
                'publish' => 1,
                'order' => 7,
                'created_at' => '2021-09-21 11:54:04',
                'updated_at' => '2021-09-21 11:54:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}