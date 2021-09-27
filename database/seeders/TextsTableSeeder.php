<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TextsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('texts')->delete();
        
        \DB::table('texts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 3,
                'sub_page_id' => NULL,
                'title' => 'Áreas de atuação',
                'title_en' => 'Áreas de atuação',
                'text' => 'Nós entendemos o seu negócio e trabalhamos juntos para resolver desafios jurídicos com soluções inovadoras e multidisciplinares, combinando nossa visão global e a experiência em 40 práticas do Direito.',
                'text_en' => '',
                'publish' => 1,
                'created_at' => '2021-07-05 17:28:17',
                'updated_at' => '2021-08-17 19:20:25',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 2,
                'sub_page_id' => NULL,
                'title' => 'Profissionais',
                'title_en' => 'Profissionais',
                'text' => 'Com advogados especialistas em suas áreas de atuação e dedicados a entender as necessidades de nossos clientes, criamos uma rede multidisciplinar. 
Estamos preparados para os desafios jurídicos do mundo atual.

Conheça nossos advogados:',
                'text_en' => 'Com advogados especialistas em suas áreas de atuação e dedicados a entender as necessidades de nossos clientes, criamos uma rede multidisciplinar. 
Estamos preparados para os desafios jurídicos do mundo atual.

Conheça nossos advogados:',
                'publish' => 1,
                'created_at' => '2021-07-28 10:28:32',
                'updated_at' => '2021-07-28 10:36:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => NULL,
                'sub_page_id' => 2,
                'title' => 'Responsabilidade Social',
                'title_en' => 'Responsabilidade Social',
                'text' => 'Sonhamos com um mundo em que as pessoas tenham mais oportunidades. Essa vontade nos motiva a olhar para a sociedade e a pensar como podemos devolver parte de tudo o que recebemos.  ',
                'text_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 17:59:51',
                'updated_at' => '2021-09-14 17:59:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => NULL,
                'sub_page_id' => 3,
                'title' => 'Diversidade e Inclusão',
                'title_en' => 'Diversidade e Inclusão',
                'text' => '<p>Acreditamos que valorizar a <strong>diversidade</strong> e garantir a <strong>inclusão</strong> é o certo a se fazer, incentivando discussões que criem um ambiente de trabalho acolhedor.</p>',
                'text_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 18:04:25',
                'updated_at' => '2021-09-14 18:04:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => NULL,
                'sub_page_id' => 4,
                'title' => 'Comissão da Mulher',
                'title_en' => 'Comissão da Mulher',
                'text' => '<p>Ao <strong>apoiar</strong> genuinamente as nossas integrantes em suas carreiras, ao <strong>incentivá-las</strong> em seu desenvolvimento profissional e ao <strong>conectá-las entre si e com a liderança feminina</strong>, cumprimos com o nosso propósito: transformar as suas histórias e, com isso, a história de Pinheiro Neto Advogados.</p>',
                'text_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 18:05:21',
                'updated_at' => '2021-09-14 18:05:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => NULL,
                'sub_page_id' => 1,
                'title' => 'Escola de Formação',
                'title_en' => 'Escola de Formação',
                'text' => '<p>Aprimoramos e complementamos os conhecimentos dos advogados desde o início da carreira, dando suporte para nossos integrantes desenvolverem seus talentos.</p>',
                'text_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 18:10:33',
                'updated_at' => '2021-09-14 18:10:33',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => NULL,
                'sub_page_id' => 5,
                'title' => 'Comissão de Diversidade e Inclusão',
                'title_en' => 'Comissão de Diversidade e Inclusão',
                'text' => '<p>Acreditamos que valorizar a <strong>diversidade</strong> e garantir a <strong>inclusão</strong> é o certo a se fazer, incentivando discussões que criem um ambiente de trabalho acolhedor.</p>',
                'text_en' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 23:13:25',
                'updated_at' => '2021-09-14 23:13:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}