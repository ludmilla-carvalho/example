<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GraduationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('graduations')->delete();
        
        \DB::table('graduations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'LLM em Direito pela University of London',
                'title_en' => 'LL.M. from the University of London',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'MBA em Administração pela University of Glasgow',
                'title_en' => 'MBA in Business Administration from the University of Glasgow',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'title' => 'Especialização em Administração pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Business Administration from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'MBA em Program for Leadership Development pela Harvard Business School',
                'title_en' => 'MBA in Program for Leadership Development from the Harvard Business School',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
            'title' => 'Mestrado em Direito Tributário pela Pontifícia Universidade Católica de São Paulo (PUC-SP) ',
            'title_en' => 'Master\'s Degree in Tax Law from the Pontifical Catholic University of São Paulo (PUC-SP) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'LLM em Direito pela Columbia Law School ',
                'title_en' => 'LL.M. from the Columbia Law School ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'LLM em Direito pela Columbia University ',
                'title_en' => 'LL.M. from the Columbia University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'LLM em Direito pela Heidelberg University',
                'title_en' => 'LL.M. from the Heidelberg University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
            'title' => 'Mestrado em Direito pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
            'title' => 'Especialização em Direito Sanitário pela Universidade de São Paulo (USP)',
            'title_en' => 'Specialization Degree (Certificate) in Health Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
            'title' => 'Mestrado em Direito Comercial pela Universidade de São Paulo (USP)',
            'title_en' => 'Master\'s Degree in Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
            'title' => 'Graduação em Direito pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Bachelor\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
            'title' => 'Graduação em Direito pela Universidade de São Paulo (USP)',
            'title_en' => 'Bachelor\'s Degree in Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
            'title' => 'Especialização em Direito Econômico pela Fundação Getúlio Vargas (FGV) ',
            'title_en' => 'Specialization Degree (Certificate) in Business Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
            'title' => 'Pós-Graduação em Administração pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Business Administration from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
            'title' => 'Extensão em Direito Tributário pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Extension Course in Tax Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Extensão em Direito pela Fundação Dom Cabral',
                'title_en' => 'Extension Course in Law from the Dom Cabral Foundation',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'LLM em Direito pela Georgetown University Law Center',
                'title_en' => 'LL.M. from the Georgetown University Law Center',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
            'title' => 'Extensão em Processo Civil pela Pontifícia Universidade Católica de São Paulo (PUC-SP) ',
            'title_en' => 'Extension Course in Civil Procedure from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Especialização em Direito Privado pela University of Illinois College of Law ',
            'title_en' => 'Specialization Degree (Certificate) in Law from the University of Illinois College of Law',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
            'title' => 'LLM em Direito pela Pontifícia  Universidade Católica do Rio de Janeiro (PUC-Rio)',
            'title_en' => 'Masters’ Degree in Law from the Pontifical Catholic University of Rio de Janeiro (PUC-Rio) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Extensão em Direito pela Universidade Cândido Mendes',
                'title_en' => 'Extension Course in Law from the Cândido Mendes University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
            'title' => 'Graduação em Direito pela Pontifícia Universidade Católica do Rio de Janeiro (PUC-Rio)',
            'title_en' => 'Bachelor\'s Degree in Law from the Pontifical Catholic University of Rio de Janeiro (PUC-Rio)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'LLM em Direito pela Boston University',
                'title_en' => 'LL.M. from the Boston University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'LLM em Corporate Law pela Harvard Law School',
                'title_en' => 'LL.M. in Corporate Law from the Harvard Law School',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
            'title' => 'Especialização em Direito Empresarial (Administração Empresarial e Tributária) pela Universidade de São Paulo (USP) ',
            'title_en' => 'Master\'s Degree in International Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'LLM em Direito pela University of Chicago',
                'title_en' => 'LL.M. from the University of Chicago',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Mestrado em Direito Tributário pela Universidade Candido Mendes',
                'title_en' => 'Master\'s Degree in Tax Law from the Cândido Mendes University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
            'title' => 'LLM em Direito de Recursos Naturais pela University of Dundee - Centre for Energy, Petroleum and Mineral Law and Policy (CEPMLP)',
            'title_en' => 'LL.M. in Natural Resources Law from the University of Dundee - Centre for Energy, Petroleum and Mineral Law and Policy (CEPMLP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
            'title' => 'Graduação em Direito pela Universidade de Brasília (UnB)',
            'title_en' => 'Bachelor\'s Degree in Law from the  University of Brasília (UnB)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'Extensão em Understanding U.S. Intellectual Property Law pela Stanford University',
                'title_en' => 'Extension Course in Understanding U.S. Intellectual Property Law from the Stanford University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
            'title' => 'Extensão em Responsabilidade Civil nos Meios de Comunicação e na Internet pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Extension Course in Civil Liability in the Media and the Internet from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
            'title' => 'Mestrado em Direito Constitucional pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Constitutional Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
            'title' => 'Mestrado em Direito Previdenciário pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Social Security Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
            'title' => 'Pós-Graduação em Direito pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'Graduação em Direito pela Universidade Presbiteriana Mackenzie',
                'title_en' => 'Bachelor\'s Degree in Law from the Mackenzie Presbyterian University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
            'title' => 'MBA em Direito da Economia e da Empresa pela Fundação Getúlio Vargas (FGV) ',
            'title_en' => 'MBA in Business and Corporate Law from the Getúlio Vargas Foundation (FGV) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'LLM em Direito pela Universitat de Barcelona',
                'title_en' => 'LL.M. from the Universitat de Barcelona',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
            'title' => 'Especialização em Direito Tributário pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Specialization Degree (Certificate) in Tax Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'Especialização em Direito pela Università degli Studi di Milano',
            'title_en' => 'Specialization Degree (Certificate) in Law from the Università degli Studi di Milano ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
            'title' => 'Mestrado em Direito pela Universidade de São Paulo (USP)',
            'title_en' => 'Master\'s Degree in Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
            'title' => 'Especialização em Direito pela Universidade de Brasília (UnB)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the University of Brasília (UnB) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
            'title' => 'Graduação em Direito pela Universidade Paulista (UNIP)',
            'title_en' => 'Bachelor\'s Degree in Law from the Universidade Paulista (UNIP) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'LLM em Direito pela University of Michigan',
                'title_en' => 'LL.M. from the University of Michigan',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'MBA em Administração pela University of Pennsylvania',
                'title_en' => 'MBA in Business Administration from the University of Pennsylvania ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
            'title' => 'Especialização em Finanças pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Finance from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'Especialização em Direito pela Universidade Presbiteriana Mackenzie',
            'title_en' => 'Specialization Degree (Certificate) in Law from the Mackenzie Presbyterian University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'LLM em Direito pela Northwestern University',
                'title_en' => 'LL.M. from the Northwestern University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
            'title' => 'Mestrado em Direito pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Master\'s Degree in Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'title' => 'LLM em Direito Tributário Internacional pela University of Florida',
                'title_en' => 'LL.M. in International Tax Law from the University of Florida',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
            'title' => 'Graduação em Administração pela Fundação Getúlio Vargas (FGV) ',
            'title_en' => 'Bachelor\'s Degree in Business Administration from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'title' => 'Mestrado em Direito pela University of London',
                'title_en' => 'LL.M. from the University of London',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
            'title' => 'Mestrado em Direito das Relações Sociais (Direito Comercial) pela  Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Corporate Relations Law (Commercial Law) from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'title' => 'LLM em Direito Tributário pela Leiden University',
                'title_en' => 'LL.M. in Tax Law from the Leiden University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'title' => 'MBA em Administração e Finanças pelo Instituto Brasileiro de Mercado de Capitais ',
            'title_en' => 'MBA in Business Administration and Finance from the Instituto Brasileiro de Mercado de Capitais (IBMEC)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
            'title' => 'Especialização em Direito pela Pontifícia Universidade Católica de São Paulo (PUC–SP)',
            'title_en' => 'Specialization Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'title' => 'LLM em Direito pela University of California',
                'title_en' => 'LL.M. from the University of California',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
            'title' => 'LLM em Direito Mercado Financeiro e de Capitail pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'LL.M. in Financial and Capital Markets Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'title' => 'LLM em Direito pela Stanford University',
                'title_en' => 'LL.M. from the Stanford University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'title' => 'Extensão em Administração pela New York University',
                'title_en' => 'Extension Course in Business Administration from the New York University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'title' => 'Extensão em Direito do Mercado Financeiro e de Capitais pela Fundação Getúlio Vargas - Escola de Direito de São Paulo ',
            'title_en' => 'Extension Course in Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
            'title' => 'Extensão em Relações Internacionais pela Universidade de São Paulo (USP)',
            'title_en' => 'Extension Course  in International Relations from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'title' => 'Mestrado em Direito pela Harvard Law School',
                'title_en' => 'LL.M. from the Harvard Law School',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
            'title' => 'Especialização em Direito Societário e Mercado de Capitais pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree in Law from the  Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
            'title' => 'MBA em Administração pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'MBA in Business Administration from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'title' => 'LLM em Direito pela New York University',
                'title_en' => 'LL.M. from the New York University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'title' => 'LLM em Direito pela University of Illinois College of Law',
                'title_en' => 'LL.M. from the University of Illinois College of Law',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
            'title' => 'MBA Executivo em Finanças pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Executive MBA in Finance from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'title' => 'LLM em Direito de Propriedade Intelectual e Tecnologia pela Stanford University',
                'title_en' => 'LL.M. from the Stanford University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
            'title' => 'Mestrado em Direito Processual Civil pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'title' => 'LLM em Direito Comercial pela University of California, Berkeley',
                'title_en' => 'LL.M. from the University of California, Berkeley',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
            'title' => 'LLM em Direito Societário pelo Instituto de Ensino e Pesquisa (Insper) ',
            'title_en' => 'Master’s Degree in Corporate Law from the Instituto de Ensino e Pesquisa (Insper) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
            'title' => 'LLM em Mercado Financeiro e Mercado de Capitais pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Master’s Degree in Financial and Capital Markets Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
            'title' => 'Especialização em Regulatório de Energia  pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree in Energy Regulation from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'title' => 'Graduação em Direito pelo Centro Universitário da Cidade, Rio de Janeiro',
                'title_en' => 'Bachelor\'s Degree in Law from the Centro Universitário da Cidade - RJ ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'title' => 'LLM em Direito pela Cambridge University ',
                'title_en' => 'LL.M. from the Cambridge University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
            'title' => 'Doutorado em Direito pela Universidade de São Paulo (USP)',
            'title_en' => 'Doctor\'s Degree in Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'title' => 'LLM em Direito, Ciência e Tecnologia pela  Stanford University ',
                'title_en' => 'LL.M. in Law, Science and Technology from the Stanford University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'title' => 'LLM em Direito pela University of Virginia',
                'title_en' => 'LL.M from the University of Virginia',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
            'title' => 'Especialização em Direito pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'title' => 'LLM em Direito pela University of Warwick',
                'title_en' => 'LL.M. from the University of Warwick',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
            'title' => 'MBA em Direito pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'MBA in Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
            'title' => 'Graduação em Relações Internacionais pela Universidade de Brasília (UnB)',
            'title_en' => 'Bachelor\'s Degree in International Relations from the University of Brasília (UnB)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
            'title' => 'Graduação em Direito pelo Centro Universitário de Brasília (UniCEUB)',
            'title_en' => 'Bachelor\'s Degree in Law from the Centro Universitário de Brasília (UniCEUB)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'title' => 'LLM em Direito pela University of Oxford',
                'title_en' => 'LL.M. from the University of Oxford',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
            'title' => 'Mestrado em Direito do Trabalho pela Universidade de São Paulo (USP)',
            'title_en' => 'Master\'s Degree in Labor Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
            'title' => 'Especialização em Direito pela Universidade de São Paulo (USP)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'title' => 'LLM em International Commercial and Corporate Law pelo Queen Mary College, da Universidade de Londres ',
                'title_en' => 'LL.M. in International Commercial and Corporate Law from the Queen Mary College, London University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
            'title' => 'Mestrado em Direito Civil pela Universidade do Estado do Rio de Janeiro (UERJ)',
            'title_en' => 'Master\'s Degree in Civil Law from the University of the State of Rio de Janeiro (UERJ)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
            'title' => 'Pós-Graduação em Direito pela Universidade do Estado do Rio de Janeiro (UERJ)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the University of the State of Rio de Janeiro (UERJ)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
            'title' => 'Graduação em Direito pela Universidade do Estado do Rio de Janeiro (UERJ)',
            'title_en' => 'Bachelor\'s Degree in Law from the University of the State of Rio de Janeiro (UERJ)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'title' => 'LLM em Direito Comercial Northwestern University',
                'title_en' => 'Master\'s Degree in Business Law from the Northwestern University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
            'title' => 'Mestrado em Direito Comercial pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Commercial Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'title' => 'Especialização em Direito pela New York University',
            'title_en' => 'Specialization Degree (Certificate) in Law from the New York University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
            'title' => 'Graduação em Direito pela Pontifícia Universidade Católica de Campinas (PUC-Campinas)',
            'title_en' => 'Bachelor\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
            'title' => 'Mestrado em Direitos Difusos e Coletivos pela Universidade Católica de São Paulo (PUC-SP)  ',
            'title_en' => 'Master\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
            'title' => 'MBA em Energy Business pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'MBA in Energy Business from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
            'title' => 'Graduação em Direito pela Universidade Federal do Rio de Janeiro (UFRJ)',
            'title_en' => 'Bachelor\'s Degree in Law from the Federal University of Rio de Janeiro (UFRJ)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'title' => 'LLM em Direito Tributário pela Universidad Carlos III de Madri',
                'title_en' => 'LL.M. in Tax Law from the Universidad Carlos III de Madri ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'title' => 'LLM em Direito Empresarial pela Cambridge University',
                'title_en' => 'LL.M. in Corporate Law from the Cambridge University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
            'title' => 'Graduação em Direito pela Universidade do Estado do Rio de Janeiro (UERJ)',
            'title_en' => 'Bachelor\'s Degree in Law from the University of the State of Rio de Janeiro (UERJ) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
            'title' => 'Pós-graduação em Economia pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Economy from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'title' => 'LLM em Direito pela University of Pennsylvania ',
                'title_en' => 'LL.M. from the University of Pennsylvania',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'title' => 'Pós-graduação em Administração pela University of Pennsylvania',
            'title_en' => 'Specialization Degree (Certificate) in Business Administration from the University of Pennsylvania',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
            'title' => 'Bacharel em Direito pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Bachelor\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'title' => 'LLM em Direito Comercial Internacional e Europeu pela University of Kent',
                'title_en' => 'LL.M. in International and European Business Law from the University of Kent',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'title' => 'LLM em Contratos de Energia e Recursos Naturais pela Queen Mary University of London',
                'title_en' => 'LL.M. in Energy and Natural Resources Contracts from the Queen Mary University of London',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
            'title' => 'Pós-gradução em Direito Societário e Mercado de Capitais pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Corporate Law and Capital Markets from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'title' => 'LLM em Direito pela Université René Descartes – Paris V',
                'title_en' => 'LL.M. in Law from the Université René Descartes – Paris V',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'title' => 'LLM pela Northwestern University School of Law',
                'title_en' => 'LL.M. from the Northwestern University School of Law',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'title' => 'Especialização em Administração pela Kellogg School of Management – Northwestern University',
            'title_en' => 'Specialization Degree (Certificate) in Business Administration from the Kellogg School of Management – Northwestern University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
            'title' => 'Doutor em Direito Internacional pela Universidade de São Paulo (USP) ',
            'title_en' => 'Doctor\'s Degree in International Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'title' => 'Executive MBA pelo Insper - Instituto de Ensino e Pesquisas',
            'title_en' => 'Executive MBA from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'title' => 'LLM em Banking Law and Financial Regulation pela University of London',
                'title_en' => 'LL.M. in Banking Law and Financial Regulation from the University of London',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
            'title' => 'LLM em Direito do Mercado Financeiro e de Capitais pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Master’s Degree in Financial and Capital Markets Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'title' => 'Graduação em Direito pela Universidade Cândido Mendes',
                'title_en' => 'Bachelor\'s Degree in Law from the Cândido Mendes University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'title' => 'LLM em Direito pela University of Nottingham',
                'title_en' => 'LL.M. from the University of Nottingham ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'title' => 'LLM em Banking & Finance pela Boston University ',
                'title_en' => 'LL.M. in Banking & Finance from the Boston University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'title' => 'LLM em Direito pela Georgetown University ',
                'title_en' => 'LL.M. from the Georgetown University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
            'title' => 'Especialização em Economia pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specialization Degree (Certificate) in Economics from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'title' => 'Pós-graduação em Direito Tributário pela CEU Law School',
            'title_en' => 'Specialization Degree (Certificate) in Tax Law from the CEU Law School',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
            'title' => 'Mestrado em Direito Processual pela Universidade de São Paulo (USP)',
            'title_en' => 'Master\'s Degree in Procedure Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'title' => 'Especialização em Direito Processual pela Università Degli Studi Di Milano',
            'title_en' => 'Specialization Degree (Certificate) in Procedure Law from the Università Degli Studi di Milano',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
            'title' => 'Graduação em Direito Processual Civil pela Universidade de São Paulo (USP)',
            'title_en' => 'Bachelor\'s Degree in Civil Procedure Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
            'title' => 'Mestrado em Direito do Trabalho pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Labor Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
            'title' => 'Especialização em Direito do Trabalho pela Universidade de São Paulo (USP)',
            'title_en' => 'Specialization Degree (Certificate) in Labor Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'title' => 'Graduação em Direito pela Faculdade de Direito de São Bernardo do Campo',
                'title_en' => 'Bachelor\'s Degree in Law from the São Bernardo do Campo School of Law',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'title' => 'LLM pela University of Edinburgh',
                'title_en' => 'LL.M. from the University of Edinburgh',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
            'title' => 'Especialização em Direito do Mercado Financeiro e de Capitais pelo Instituto de Ensino e Pesquisa (Insper) ',
            'title_en' => 'Specialization Degree (Certificate) in Banking and Capital Markets from the Instituto de Ensino e Pesquisa (Insper) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
            'title' => 'LLM em Direito pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'LL.M. from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'title' => 'Extensão em Introdução ao Direito Norte-Americano pela New York University ',
                'title_en' => 'Extension Course in Law from the New York University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
            'title' => 'MBA pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'MBA from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
            'title' => 'Extensão em Responsabilidade Social no Terceiro Setor pela Fundação Instituto de Administração (FIA) ',
            'title_en' => 'Extension Course from the Fundação Instituto de Administração (FIA) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
            'title' => 'Mestrado em Direito Internacional Ambiental pela Universidade de São Paulo (USP) ',
            'title_en' => 'Master\'s Degree in Law from the University of São Paulo (USP) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
            'title' => 'Especialização em Direito Ambiental pela Faculdade de Saúde Pública da Universidade de São Paulo (USP)',
            'title_en' => 'Specialization degree in Environmental Law from Faculdade de Saúde Pública da Universidade de São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'title' => 'Especialização pela Kyoto University ',
                'title_en' => 'Specialization Degree from the Kyoto University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
            'title' => 'Mestrado em Direito Tributário pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Master\'s Degree in Tax Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
            'title' => 'MBA em Finanças pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Post-Graduate Degree in Corporate Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'title' => 'LLM em Direito pela Duke University ',
                'title_en' => 'Master\'s Degree in Law from the Duke University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
            'title' => 'Pós-graduação em Direito Societário pelo Instituto de Ensino e Pesquisa (Insper)',
            'title_en' => 'Post-Graduate Degree in Corporate Law from the Instituto de Ensino e Pesquisa (Insper)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'title' => 'MBA em Sports Management and Legal Skills  pelo ISDE/FC Barcelona',
                'title_en' => 'MBA in Sports Management and Legal Skills  from ISDE/FC Barcelona',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
            'title' => 'Doutorado em Direito pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Doctor\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
            'title' => 'Especialização em Gestão Ambiental pela Universidade Estadual de Campinas (UNICAMP)',
            'title_en' => 'Specialization Degree (Certificate) from the University of Campinas (Unicamp)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'title' => 'LLM em Direito pela University College London',
                'title_en' => 'Master\'s Degree in Law from the University College London ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'title' => 'Extensão em US Intellectual Property Law pela 3rd Annual International Professional Certificate Summer Program - Stanford Law School',
                'title_en' => 'Extension in US Intellectual Property Law from 3rd Annual International Professional Certificate Summer Program - Stanford Law School',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
            'title' => 'Extensão em Direito do Entretenimento pelo Centro de Extensão Universitária (CEU – IICS)',
            'title_en' => 'Extension Course in Entertainment Law from the Centro de Extensão Universitária (CEU – IICS)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
            'title' => 'Especialização em Direito Processual Civil pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Specialization Degree (Certificate) in Civil Procedure from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
            'title' => 'Mestrado em Direito Comercial - Propriedade Intelectual pela Universidade de São Paulo (USP)',
            'title_en' => 'Master\'s Degree in Intellectual Property from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'title' => 'Especialização em Administração em Recursos Humanos pela New York University',
            'title_en' => 'Specialization Degree (Certificate) in Human Resources Management from the New York University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
            'title' => 'Graduação em Direito pela Centro Universitário de Brasília (UniCEUB)',
            'title_en' => 'Bachelor\'s Degree in Law from the Centro Universitário de Brasília (UniCEUB)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
            'title' => 'Especialização em Direito pelo Centro Universitário do Distrito Federal (UniDF)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the Centro Universitário do Distrito Federal (UniDF)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
            'title' => 'Extensão em Direito pela Universidade de Brasília (UnB)',
            'title_en' => 'Extension Course in Law from the University of Brasília (UnB)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
            'title' => 'Especialização em Gestão Ambiental pela Universidade Federal do Rio de Janeiro (COPPE-UFRJ)',
            'title_en' => 'Specialization Degree (Certificate) in Environmental Management from the Federal University of Rio de Janeiro (COPPE-UFRJ)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'title' => 'LL.M. em Direito pela University of California, Berkeley',
                'title_en' => 'Master\'s Degree in Law from the University of California',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'title' => 'Especialização em Direito pela Universidade Cândido Mendes',
            'title_en' => 'Specialization Degree (Certificate) in Law from the Cândido Mendes University',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'title' => 'Mestrado em Direito pela Universitat de Barcelona',
                'title_en' => 'Master\'s Degree in Law from the Universitat de Barcelona',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'title' => 'Pós-graduação em Direito pela Universitat de Barcelona',
                'title_en' => 'Post-Graduate Degree in Law from the Universitat de Barcelona',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
            'title' => 'Especialização em Direito pela Universidade do Estado do Rio de Janeiro (UERJ)',
            'title_en' => 'Specialization Degree (Certificate) in Law from the University of the State of Rio de Janeiro (UERJ)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'title' => 'Graduação em Direito pela Instituto Metodista Bennett',
                'title_en' => 'Bachelor’s Degree in Law from the Bennett Methodist Institute',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
            'title' => 'Pós-graduação em Direito Empresarial pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Post-graduate Degree in Corporate Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
            'title' => 'Mestrado em Administração de Empresas pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Master\'s Degree in Business Administration from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
            'title' => 'Especialização em Direito pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Specializaton Degree (Certificate) in Law from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
            'title' => 'Especialização em Processo Civil pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Extension Course in Tax Law from the Getúlio Vargas Foundation (FGV) ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
            'title' => 'Mestrado pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
            'title' => 'Especialização pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Specialization Degree (Certificate) from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
            'title' => 'Graduação em Administração de Empresas pela Fundação Getúlio Vargas (FGV)',
            'title_en' => 'Bachelor\'s Degree in Business Administration from the Getúlio Vargas Foundation (FGV)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
            'title' => 'Mestrado em Direito Internacional pela Universidade de São Paulo (USP)',
            'title_en' => 'Master\'s Degree in International Law from the University of São Paulo (USP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
            'title' => 'Graduação em Direito pela Universidade Católica de São Paulo (PUC-SP) ',
            'title_en' => 'Bachelor\'s Degree in Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
            'title' => 'Mestrado em Direito Tributário pela Pontífica Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Tax Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
            'title' => 'Especialização em Direito Tributário pela Pontífica Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Specialization Degree (Certificate) in Tax Law from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
            'title' => 'Mestrado em Direito das Relações Sociais (Direito Comercial) pela Pontifícia Universidade Católica de São Paulo (PUC-SP)',
            'title_en' => 'Master\'s Degree in Corporate Relations Law (Commercial Law) from the Pontifical Catholic University of São Paulo (PUC-SP)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
            'title' => 'Graduação em Engenharia pela Universidade de São Paulo (USP)',
            'title_en' => 'Bachelor\'s Degree in Engineering from the University of São Paulo (USP)
',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'title' => 'LLM em Direito, Ciência e Tecnologia pela Stanford University',
                'title_en' => 'LL.M. in Law, Science and Technology from the Stanford University ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}