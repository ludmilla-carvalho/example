<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Assistência Judiciária 22 de Agosto',
                'title_en' => 'Assistência Judiciária 22 de Agosto',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:24:10',
                'updated_at' => '2021-09-14 21:24:10',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Departamento Jurídico XI de Agosto',
                'title_en' => 'Departamento Jurídico XI de Agosto',
            'text' => '<p>Instituição particular de assistência jurídica gratuita da Faculdade de Direito do Largo de São Francisco (USP), que atua em diversas esferas do Direito, nas vertentes consultiva e contenciosa, garantindo à população carente da cidade de São Paulo acesso gratuito à justiça.</p><p>Apoiado por Pinheiro Neto Advogados desde 2001</p>',
                'text_en' => NULL,
                'image' => '1631665543.png',
                'publish' => 1,
                'created_at' => '2021-09-14 21:25:43',
                'updated_at' => '2021-09-14 21:25:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Assistência Judiciária João Mendes',
                'title_en' => 'Assistência Judiciária João Mendes',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:26:10',
                'updated_at' => '2021-09-14 21:26:10',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'title' => 'Associação Paulista de Apoio à Família (APAF)',
            'title_en' => 'Associação Paulista de Apoio à Família (APAF)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:26:31',
                'updated_at' => '2021-09-14 21:26:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
            'title' => 'Casa Ondina Lobo (São Paulo)',
            'title_en' => 'Casa Ondina Lobo (São Paulo)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:27:56',
                'updated_at' => '2021-09-14 21:27:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
            'title' => 'Casas Taiguara (São Paulo)',
            'title_en' => 'Casas Taiguara (São Paulo)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:28:21',
                'updated_at' => '2021-09-14 21:28:21',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
            'title' => 'Centro Educacional Assistencial Profissionalizante (CEAP)',
            'title_en' => 'Centro Educacional Assistencial Profissionalizante (CEAP)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:28:38',
                'updated_at' => '2021-09-14 21:28:38',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Cidadãos do Futebol',
                'title_en' => 'Cidadãos do Futebol',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:29:12',
                'updated_at' => '2021-09-14 21:29:12',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Hospital de Amor',
                'title_en' => 'Hospital de Amor',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:29:30',
                'updated_at' => '2021-09-14 21:29:30',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
            'title' => 'Lar da Benção Divina (LAR)',
            'title_en' => 'Lar da Benção Divina (LAR)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:30:00',
                'updated_at' => '2021-09-14 21:30:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
            'title' => 'Nosso Lar (Brasília)',
            'title_en' => 'Nosso Lar (Brasília)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:30:19',
                'updated_at' => '2021-09-14 21:30:19',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
            'title' => 'Parceiros da Educação (Rio de Janeiro)',
            'title_en' => 'Parceiros da Educação (Rio de Janeiro)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:30:40',
                'updated_at' => '2021-09-14 21:31:19',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
            'title' => 'Projeto Guri (Sustenidos)',
            'title_en' => 'Projeto Guri (Sustenidos)',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:30:54',
                'updated_at' => '2021-09-14 21:31:21',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Sociedade Cultura Artística',
                'title_en' => 'Sociedade Cultura Artística',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:31:14',
                'updated_at' => '2021-09-14 21:31:22',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'TUCCA – Associação para Crianças e Adolescentes com Câncer ',
                'title_en' => 'TUCCA – Associação para Crianças e Adolescentes com Câncer ',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:31:41',
                'updated_at' => '2021-09-14 21:39:40',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Vocação',
                'title_en' => 'Vocação',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:32:02',
                'updated_at' => '2021-09-14 21:39:41',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Instituto Global Attitude e Escritório de Representação do Ministério das Relações Exteriores em São Paulo',
                'title_en' => 'Instituto Global Attitude e Escritório de Representação do Ministério das Relações Exteriores em São Paulo',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:32:22',
                'updated_at' => '2021-09-14 21:39:42',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Instituto Verdescola',
                'title_en' => 'Instituto Verdescola',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:33:20',
                'updated_at' => '2021-09-14 21:39:44',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => ' Liga Solidária',
                'title_en' => ' Liga Solidária',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:40:09',
                'updated_at' => '2021-09-14 21:41:45',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Lar das Crianças da Congregação Israelita Paulista',
                'title_en' => 'Lar das Crianças da Congregação Israelita Paulista',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:40:18',
                'updated_at' => '2021-09-14 21:41:47',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'ENLACE',
                'title_en' => 'ENLACE',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:40:38',
                'updated_at' => '2021-09-14 21:41:52',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Instituto Apoia',
                'title_en' => 'Instituto Apoia',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:40:54',
                'updated_at' => '2021-09-14 21:41:54',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Bandeirantes Rugby Club',
                'title_en' => 'Bandeirantes Rugby Club',
                'text' => NULL,
                'text_en' => NULL,
                'image' => NULL,
                'publish' => 1,
                'created_at' => '2021-09-14 21:41:39',
                'updated_at' => '2021-09-14 21:41:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}