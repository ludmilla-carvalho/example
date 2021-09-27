<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('terms')->delete();
        
        \DB::table('terms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Termos de Uso',
                'title_en' => NULL,
                'text' => '<p>O website de Pinheiro Neto Advogados, localizado no endereço eletrônico www.pinheironeto.com.br, tem como único objetivo fornecer informações institucionais sobre o escritório e seus integrantes. Nenhuma parte do conteúdo disponibilizado por meio deste website, incluindo boletins institucionais e artigos escritos por integrantes do escritório, deve ser interpretada como aconselhamento ou parecer jurídico. Orientações legais devem ser obtidas através de nossos advogados.</p><p><strong>Direitos Autorais</strong></p><p>Todos os materiais exibidos neste website estão protegidos pelas leis de Propriedade Intelectual e não podem ser reproduzidos e/ou distribuídos sem a expressa autorização de Pinheiro Neto Advogados.</p><p><strong>Informações de Terceiros</strong></p><p>Pinheiro Neto Advogados não se responsabiliza por informações publicadas em links externos que estejam contidos neste website.</p><p>Da mesma forma, o escritório não pode garantir a precisão de informações relacionadas a seminários e outros eventos organizados por terceiros</p>',
                'text_en' => '<p></p>',
                'version' => '1',
                'created_at' => '2021-09-02 17:38:24',
                'updated_at' => '2021-09-10 09:33:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}