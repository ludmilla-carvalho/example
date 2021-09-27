<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawyerTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lawyer_types')->delete();
        
        \DB::table('lawyer_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Sócio',
                'slug' => 'socio',
                'title_en' => 'Partner',
                'plural' => 'Sócios',
                'plural_en' => 'Partners',
                'feminine' => 'Sócia',
                'feminine_en' => 'Partner',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => '2021-07-28 15:27:39',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Consultor',
                'slug' => 'consultor',
                'title_en' => 'Counsel',
                'plural' => 'Consultores',
                'plural_en' => 'Counsel',
                'feminine' => 'Consultora',
                'feminine_en' => 'Counsel',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => '2021-07-28 15:27:39',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Associado',
                'slug' => 'associado',
                'title_en' => 'Associate',
                'plural' => 'Associados',
                'plural_en' => 'Associate',
                'feminine' => 'Associada',
                'feminine_en' => 'Associates',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => '2021-07-28 15:27:39',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Integrante do jurídico',
                'slug' => 'integrante-do-juridico',
                'title_en' => 'Legal member',
                'plural' => 'Integrantes do jurídico',
                'plural_en' => 'Legal members',
                'feminine' => 'Integrante do jurídico',
                'feminine_en' => 'Legal member',
                'created_at' => '2021-08-30 11:33:25',
                'updated_at' => '2021-08-30 11:33:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Integrante do administrativo',
                'slug' => 'integrante-do-administrativo',
                'title_en' => 'Administrative member',
                'plural' => 'Integrantes do administrativo',
                'plural_en' => 'Administrative members',
                'feminine' => 'Integrante do administrativo',
                'feminine_en' => 'Administrative member',
                'created_at' => '2021-08-30 11:34:20',
                'updated_at' => '2021-08-30 11:34:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}