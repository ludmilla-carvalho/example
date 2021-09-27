<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LawyerSubtypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lawyer_subtypes')->delete();
        
        \DB::table('lawyer_subtypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lawyer_type_id' => 4,
                'title' => 'Assistente jurídico',
                'slug' => 'assistente-juridico',
                'title_en' => 'Legal assistent',
                'plural' => 'Assistentes jurídicos',
                'plural_en' => 'Legal assistents',
                'feminine' => 'Assistente jurídico',
                'feminine_en' => 'Legal assistent',
                'created_at' => '2021-08-30 13:00:50',
                'updated_at' => '2021-08-30 13:00:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'lawyer_type_id' => 4,
                'title' => 'Auxiliar jurídico',
                'slug' => 'auxiliar-juridico',
                'title_en' => 'Legal assistant',
                'plural' => 'Auxiliares jurídicos',
                'plural_en' => 'Legal assistants',
                'feminine' => 'Auxiliar jurídico',
                'feminine_en' => 'Legal assistant',
                'created_at' => '2021-08-30 13:00:50',
                'updated_at' => '2021-08-30 13:00:50',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lawyer_type_id' => 4,
                'title' => 'Estagiário',
                'slug' => 'estagiario',
                'title_en' => 'Intern',
                'plural' => 'Estagiários',
                'plural_en' => 'Interns',
                'feminine' => 'Estagiária',
                'feminine_en' => 'Intern',
                'created_at' => '2021-08-30 13:00:50',
                'updated_at' => '2021-08-30 13:00:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'lawyer_type_id' => 5,
                'title' => 'Gerente',
                'slug' => 'gerente',
                'title_en' => 'Manager',
                'plural' => 'Gerentes',
                'plural_en' => 'Managers',
                'feminine' => 'Gerente',
                'feminine_en' => 'Manager',
                'created_at' => '2021-08-30 13:08:02',
                'updated_at' => '2021-08-30 13:08:02',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'lawyer_type_id' => 5,
                'title' => 'Coordenador executivo',
                'slug' => 'coordenador-executivo',
                'title_en' => 'Executive Coordinator',
                'plural' => 'Coordenadores executivo',
                'plural_en' => 'Executive Coordinators',
                'feminine' => 'Coordenadora executiva',
                'feminine_en' => 'Executive Coordinator',
                'created_at' => '2021-08-30 13:09:42',
                'updated_at' => '2021-08-30 13:09:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}