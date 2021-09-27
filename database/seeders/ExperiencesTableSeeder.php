<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('experiences')->delete();
        
        \DB::table('experiences')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Gibson, Dunn & Crutcher LLP, EUA',
                'title_en' => 'Gibson, Dunn & Crutcher LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Latham & Watkins LLP, EUA',
                'title_en' => 'Latham & Watkins LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'title' => 'King & Spalding - Houston (EUA)',
            'title_en' => 'King & Spalding - Houston (EUA)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Kirkland & Ellis LLP, EUA',
                'title_en' => 'Kirkland & Ellis LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Cravath, Swaine & Moore LLP, EUA',
                'title_en' => 'Cravath, Swaine & Moore LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Fasken Martineau, Canadá ',
                'title_en' => 'Fasken Martineau, Canadá ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Herbert Smith Freehills, Inglaterra',
                'title_en' => 'Herbert Smith Freehills, UK ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Pillsbury Winthrop Shaw Pittman LLP, EUA ',
                'title_en' => 'Pillsbury Winthrop Shaw Pittman LLP, EUA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
            'title' => 'Licenciado para a prática da advocacia no Estado de Nova Iorque-EUA (2007)',
            'title_en' => 'Admitted to practice in New York State (2007)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
            'title' => 'World Trade Organization (08/2004 - 12/2004)',
            'title_en' => 'World Trade Organization (08/2004 - 12/2004)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
            'title' => 'Sidley Austin LLP (09/2003 - 07/2004)',
            'title_en' => 'Sidley Austin LLP (09/2003 - 07/2004)',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Allen & Overy LLP, Inglaterra',
                'title_en' => 'Allen & Overy LLP, UK ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Cleary Gottlieb Steen & Hamilton LLP, EUA',
                'title_en' => 'Cleary Gottlieb Steen & Hamilton LLP, USA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Hogan Lovells US LLP, EUA',
                'title_en' => 'Hogan Lovells US LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Linklaters, EUA',
                'title_en' => 'Linklaters, USA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Sullivan & Cromwell LLP, EUA',
                'title_en' => 'Sullivan & Cromwell LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Simpson Thacher & Bartlett LLP, EUA',
                'title_en' => 'Simpson Thacher & Bartlett LLP, USA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Simmons & Simmons, Inglaterra',
                'title_en' => 'Simmons & Simmons, UK',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Howrey Simon Arnold & White LLC, EUA',
                'title_en' => 'Howrey Simon Arnold & White LLC, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'De Brauw Blackstone Westbroek, Holanda',
                'title_en' => 'De Brauw Blackstone Westbroek, Netherlands',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Gómez-Acebo & Pombo, Espanha',
                'title_en' => 'Gómez-Acebo & Pombo, Spain ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Piergrossi Villa Manca Graziadei, Itália ',
                'title_en' => 'Piergrossi Villa Manca Graziadei, Italy ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Davis Polk & Wardwell LLP, EUA ',
                'title_en' => 'Davis Polk & Wardwell LLP, USA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Quinn Emanuel Urquhart & Sullivan, LLP, EUA',
                'title_en' => 'Quinn Emanuel Urquhart & Sullivan, LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Hunton & Williams LLP, EUA',
                'title_en' => 'Hunton & Williams LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Deutsche Bank Securities, EUA',
                'title_en' => 'Deutsche Bank Securities, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Linklaters, Inglaterra',
                'title_en' => 'Linklaters, England',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Slaughter & May, Inglaterra
',
                'title_en' => 'Slaughter & May, UK
',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Deloitte Touche Tohmatsu, Holanda',
                'title_en' => 'Deloitte Touche Tohmatsu, Netherlands',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
            'title' => 'Credit Suisse First Boston (CSFB), Morgan Stanley, Mizuho Bank, Japão ',
            'title_en' => 'Credit Suisse First Boston (CSFB), Morgan Stanley, Mizuho Bank, Japan',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'Skadden, Arps, Slate, Meagher & Flom LLP, EUA',
                'title_en' => 'Skadden, Arps, Slate, Meagher & Flom LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'U.S. Securities and Exchange Commission, Washington, D.C',
                'title_en' => 'U.S. Securities and Exchange Commission, Washington, D.C',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'Greenberg Traurig LLP, EUA',
                'title_en' => 'Greenberg Traurig LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'Mayer Brown, EUA',
                'title_en' => 'Mayer Brown, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'Professor at the University of Illinois Law School, Champaign, IL ',
                'title_en' => 'Professor at the University of Illinois Law School, Champaign, IL ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'Fullbright & Jawors ,EUA',
                'title_en' => 'Fullbright & Jawors ,EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'Fenwick & West, California, EUA ',
                'title_en' => 'Fenwick & West, California, EUA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'Dechert LLP, EUA',
                'title_en' => 'Dechert LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'Denton, Wilde & Sapte, Inglaterra',
                'title_en' => 'Denton, Wilde & Sapte, England ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'Reed Smith LLP e no Herbert Smith LLP, Inglaterra',
                'title_en' => 'Reed Smith LLP e no Herbert Smith LLP, England',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'Bryan Cave LLP, EUA',
                'title_en' => 'Bryan Cave LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'title' => 'Debevoise & Plimpton LLP, EUA',
                'title_en' => 'Debevoise & Plimpton LLP, EUA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'title' => 'Pinheiro Neto Advogados, Inglaterra ',
                'title_en' => 'Pinheiro Neto Advogados, Engand',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'title' => 'Shearman & Sterling LLP, EUA ',
                'title_en' => 'Shearman & Sterling LLP, EUA ',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'title' => 'Trenité Van Doorne, Holanda',
                'title_en' => 'Trenité Van Doorne, Netherlands',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'title' => 'MacFarlanes LLP, Inglaterra',
                'title_en' => 'MacFarlanes LLP, UK',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'title' => 'Ferrante PLLC, EUA',
                'title_en' => 'Ferrante PLLC, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'title' => 'Kobre & Kim LLP, EUA',
                'title_en' => 'Kobre & Kim LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'title' => 'US Environmetal Protection Agency - USEPA, EUA',
                'title_en' => 'US Environmetal Protection Agency - USEPA, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'title' => 'Herbert T. Patty Law, EUA',
                'title_en' => 'Herbert T. Patty Law, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'title' => 'White & Case LLC, EUA',
                'title_en' => 'White & Case LLC, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'title' => 'Veira de Almeida & Associados, Portugal',
                'title_en' => 'Veira de Almeida & Associados, Portugal',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
            'title' => 'Ernst & Young, U.S. LLP (EY), EUA',
            'title_en' => 'Ernst & Young, U.S. LLP (EY), USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'title' => 'Yulchon LLC, Coréia do Sul',
                'title_en' => 'Yulchon LLC, South Korea',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'title' => 'Centre of Analysis of Risk and Regulation, Inglaterra',
                'title_en' => 'Centre of Analysis of Risk and Regulation, England',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'title' => 'Nishimura & Asahi, Japão',
                'title_en' => 'Nishimura & Asahi, Japan',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'title' => 'Brigard & Urrutia, Colômbia',
                'title_en' => 'Brigard & Urrutia, Colombia',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'title' => 'Kirkland & Ellis LLP, EUA',
                'title_en' => 'Kirkland & Ellis LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'title' => 'PwC, Luxemburgo',
                'title_en' => 'PwC, Luxemburg',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'title' => 'PwC, Itália',
                'title_en' => 'PwC, Italy',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'title' => 'Morrison & Foerster LLP, EUA',
                'title_en' => 'Morrison & Foerster LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'title' => 'MoloLamken LLP, EUA',
                'title_en' => 'MoloLamken LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'title' => 'Clifford Chance US LLP, EUA',
                'title_en' => 'Clifford Chance US LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'title' => 'Allen&Overy, EUA',
                'title_en' => 'Allen&Overy, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'title' => 'Loyens&Loeff NV, Holanda',
                'title_en' => 'Loyens&Loeff NV, Netherlands',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'title' => 'Shin & Kim LLC, Coréia do Sul',
                'title_en' => 'Shin & Kim LLC, South Korea',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'title' => 'White & Case LLP, EUA',
                'title_en' => 'White & Case LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'title' => 'Willkie Farr & Gallagher LLP, EUA',
                'title_en' => 'Willkie Farr & Gallagher LLP, USA',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}