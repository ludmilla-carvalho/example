<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AwardLawyerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('award_lawyer')->delete();
        
        \DB::table('award_lawyer')->insert(array (
            0 => 
            array (
                'lawyer_id' => 1,
                'award_id' => 12,
                'year' => '2021',
                'created_at' => '2021-08-16 19:27:18',
                'updated_at' => '2021-08-16 19:27:18',
            ),
            1 => 
            array (
                'lawyer_id' => 2,
                'award_id' => 13,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:16',
                'updated_at' => '2021-08-16 19:28:16',
            ),
            2 => 
            array (
                'lawyer_id' => 3,
                'award_id' => 14,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            3 => 
            array (
                'lawyer_id' => 4,
                'award_id' => 15,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            4 => 
            array (
                'lawyer_id' => 5,
                'award_id' => 16,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            5 => 
            array (
                'lawyer_id' => 6,
                'award_id' => 17,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            6 => 
            array (
                'lawyer_id' => 7,
                'award_id' => 18,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            7 => 
            array (
                'lawyer_id' => 8,
                'award_id' => 19,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            8 => 
            array (
                'lawyer_id' => 9,
                'award_id' => 20,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            9 => 
            array (
                'lawyer_id' => 11,
                'award_id' => 21,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            10 => 
            array (
                'lawyer_id' => 12,
                'award_id' => 22,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            11 => 
            array (
                'lawyer_id' => 13,
                'award_id' => 23,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            12 => 
            array (
                'lawyer_id' => 14,
                'award_id' => 24,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            13 => 
            array (
                'lawyer_id' => 15,
                'award_id' => 25,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            14 => 
            array (
                'lawyer_id' => 16,
                'award_id' => 26,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            15 => 
            array (
                'lawyer_id' => 17,
                'award_id' => 27,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:29',
                'updated_at' => '2021-08-16 19:28:29',
            ),
            16 => 
            array (
                'lawyer_id' => 20,
                'award_id' => 28,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            17 => 
            array (
                'lawyer_id' => 19,
                'award_id' => 29,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            18 => 
            array (
                'lawyer_id' => 21,
                'award_id' => 30,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            19 => 
            array (
                'lawyer_id' => 22,
                'award_id' => 31,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            20 => 
            array (
                'lawyer_id' => 23,
                'award_id' => 29,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            21 => 
            array (
                'lawyer_id' => 24,
                'award_id' => 32,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            22 => 
            array (
                'lawyer_id' => 25,
                'award_id' => 33,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            23 => 
            array (
                'lawyer_id' => 27,
                'award_id' => 34,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            24 => 
            array (
                'lawyer_id' => 28,
                'award_id' => 29,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            25 => 
            array (
                'lawyer_id' => 29,
                'award_id' => 35,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            26 => 
            array (
                'lawyer_id' => 30,
                'award_id' => 36,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            27 => 
            array (
                'lawyer_id' => 31,
                'award_id' => 37,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            28 => 
            array (
                'lawyer_id' => 32,
                'award_id' => 26,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            29 => 
            array (
                'lawyer_id' => 33,
                'award_id' => 27,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            30 => 
            array (
                'lawyer_id' => 36,
                'award_id' => 39,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            31 => 
            array (
                'lawyer_id' => 37,
                'award_id' => 40,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            32 => 
            array (
                'lawyer_id' => 38,
                'award_id' => 41,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            33 => 
            array (
                'lawyer_id' => 40,
                'award_id' => 42,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            34 => 
            array (
                'lawyer_id' => 41,
                'award_id' => 43,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            35 => 
            array (
                'lawyer_id' => 42,
                'award_id' => 44,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            36 => 
            array (
                'lawyer_id' => 43,
                'award_id' => 45,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            37 => 
            array (
                'lawyer_id' => 44,
                'award_id' => 46,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            38 => 
            array (
                'lawyer_id' => 45,
                'award_id' => 47,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            39 => 
            array (
                'lawyer_id' => 46,
                'award_id' => 48,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            40 => 
            array (
                'lawyer_id' => 47,
                'award_id' => 41,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            41 => 
            array (
                'lawyer_id' => 48,
                'award_id' => 41,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:30',
                'updated_at' => '2021-08-16 19:28:30',
            ),
            42 => 
            array (
                'lawyer_id' => 49,
                'award_id' => 23,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            43 => 
            array (
                'lawyer_id' => 50,
                'award_id' => 42,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            44 => 
            array (
                'lawyer_id' => 51,
                'award_id' => 49,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            45 => 
            array (
                'lawyer_id' => 53,
                'award_id' => 50,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            46 => 
            array (
                'lawyer_id' => 54,
                'award_id' => 51,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            47 => 
            array (
                'lawyer_id' => 55,
                'award_id' => 52,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            48 => 
            array (
                'lawyer_id' => 56,
                'award_id' => 53,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            49 => 
            array (
                'lawyer_id' => 57,
                'award_id' => 54,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            50 => 
            array (
                'lawyer_id' => 58,
                'award_id' => 55,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            51 => 
            array (
                'lawyer_id' => 59,
                'award_id' => 56,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            52 => 
            array (
                'lawyer_id' => 60,
                'award_id' => 40,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            53 => 
            array (
                'lawyer_id' => 61,
                'award_id' => 50,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            54 => 
            array (
                'lawyer_id' => 62,
                'award_id' => 57,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            55 => 
            array (
                'lawyer_id' => 63,
                'award_id' => 58,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            56 => 
            array (
                'lawyer_id' => 64,
                'award_id' => 59,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            57 => 
            array (
                'lawyer_id' => 65,
                'award_id' => 14,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            58 => 
            array (
                'lawyer_id' => 66,
                'award_id' => 24,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            59 => 
            array (
                'lawyer_id' => 67,
                'award_id' => 47,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            60 => 
            array (
                'lawyer_id' => 115,
                'award_id' => 60,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            61 => 
            array (
                'lawyer_id' => 68,
                'award_id' => 61,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            62 => 
            array (
                'lawyer_id' => 69,
                'award_id' => 62,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            63 => 
            array (
                'lawyer_id' => 70,
                'award_id' => 43,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            64 => 
            array (
                'lawyer_id' => 71,
                'award_id' => 63,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            65 => 
            array (
                'lawyer_id' => 72,
                'award_id' => 23,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:31',
                'updated_at' => '2021-08-16 19:28:31',
            ),
            66 => 
            array (
                'lawyer_id' => 117,
                'award_id' => 53,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            67 => 
            array (
                'lawyer_id' => 73,
                'award_id' => 42,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            68 => 
            array (
                'lawyer_id' => 74,
                'award_id' => 64,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            69 => 
            array (
                'lawyer_id' => 118,
                'award_id' => 65,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            70 => 
            array (
                'lawyer_id' => 120,
                'award_id' => 66,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            71 => 
            array (
                'lawyer_id' => 76,
                'award_id' => 67,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            72 => 
            array (
                'lawyer_id' => 77,
                'award_id' => 68,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            73 => 
            array (
                'lawyer_id' => 78,
                'award_id' => 69,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            74 => 
            array (
                'lawyer_id' => 79,
                'award_id' => 70,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            75 => 
            array (
                'lawyer_id' => 80,
                'award_id' => 23,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            76 => 
            array (
                'lawyer_id' => 83,
                'award_id' => 23,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            77 => 
            array (
                'lawyer_id' => 84,
                'award_id' => 20,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            78 => 
            array (
                'lawyer_id' => 85,
                'award_id' => 71,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            79 => 
            array (
                'lawyer_id' => 86,
                'award_id' => 72,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            80 => 
            array (
                'lawyer_id' => 87,
                'award_id' => 73,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            81 => 
            array (
                'lawyer_id' => 88,
                'award_id' => 40,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            82 => 
            array (
                'lawyer_id' => 89,
                'award_id' => 55,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            83 => 
            array (
                'lawyer_id' => 90,
                'award_id' => 61,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            84 => 
            array (
                'lawyer_id' => 91,
                'award_id' => 74,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            85 => 
            array (
                'lawyer_id' => 92,
                'award_id' => 41,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            86 => 
            array (
                'lawyer_id' => 93,
                'award_id' => 42,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            87 => 
            array (
                'lawyer_id' => 95,
                'award_id' => 75,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            88 => 
            array (
                'lawyer_id' => 96,
                'award_id' => 63,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            89 => 
            array (
                'lawyer_id' => 97,
                'award_id' => 29,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            90 => 
            array (
                'lawyer_id' => 98,
                'award_id' => 70,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            91 => 
            array (
                'lawyer_id' => 99,
                'award_id' => 45,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            92 => 
            array (
                'lawyer_id' => 100,
                'award_id' => 59,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:32',
                'updated_at' => '2021-08-16 19:28:32',
            ),
            93 => 
            array (
                'lawyer_id' => 101,
                'award_id' => 76,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            94 => 
            array (
                'lawyer_id' => 102,
                'award_id' => 17,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            95 => 
            array (
                'lawyer_id' => 103,
                'award_id' => 77,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            96 => 
            array (
                'lawyer_id' => 104,
                'award_id' => 29,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            97 => 
            array (
                'lawyer_id' => 105,
                'award_id' => 78,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            98 => 
            array (
                'lawyer_id' => 106,
                'award_id' => 64,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            99 => 
            array (
                'lawyer_id' => 107,
                'award_id' => 22,
                'year' => '2021',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            100 => 
            array (
                'lawyer_id' => 108,
                'award_id' => 79,
                'year' => '2020',
                'created_at' => '2021-08-16 19:28:33',
                'updated_at' => '2021-08-16 19:28:33',
            ),
            101 => 
            array (
                'lawyer_id' => 1,
                'award_id' => 80,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            102 => 
            array (
                'lawyer_id' => 2,
                'award_id' => 81,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            103 => 
            array (
                'lawyer_id' => 3,
                'award_id' => 19,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            104 => 
            array (
                'lawyer_id' => 4,
                'award_id' => 82,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            105 => 
            array (
                'lawyer_id' => 6,
                'award_id' => 83,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            106 => 
            array (
                'lawyer_id' => 7,
                'award_id' => 49,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            107 => 
            array (
                'lawyer_id' => 8,
                'award_id' => 84,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            108 => 
            array (
                'lawyer_id' => 9,
                'award_id' => 85,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            109 => 
            array (
                'lawyer_id' => 11,
                'award_id' => 86,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            110 => 
            array (
                'lawyer_id' => 12,
                'award_id' => 19,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            111 => 
            array (
                'lawyer_id' => 13,
                'award_id' => 64,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            112 => 
            array (
                'lawyer_id' => 14,
                'award_id' => 87,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            113 => 
            array (
                'lawyer_id' => 15,
                'award_id' => 88,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            114 => 
            array (
                'lawyer_id' => 16,
                'award_id' => 89,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            115 => 
            array (
                'lawyer_id' => 17,
                'award_id' => 90,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:24',
                'updated_at' => '2021-08-16 19:37:24',
            ),
            116 => 
            array (
                'lawyer_id' => 20,
                'award_id' => 91,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            117 => 
            array (
                'lawyer_id' => 19,
                'award_id' => 16,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            118 => 
            array (
                'lawyer_id' => 21,
                'award_id' => 92,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            119 => 
            array (
                'lawyer_id' => 22,
                'award_id' => 93,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            120 => 
            array (
                'lawyer_id' => 23,
                'award_id' => 16,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            121 => 
            array (
                'lawyer_id' => 24,
                'award_id' => 94,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            122 => 
            array (
                'lawyer_id' => 25,
                'award_id' => 95,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            123 => 
            array (
                'lawyer_id' => 27,
                'award_id' => 96,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            124 => 
            array (
                'lawyer_id' => 28,
                'award_id' => 97,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            125 => 
            array (
                'lawyer_id' => 29,
                'award_id' => 82,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            126 => 
            array (
                'lawyer_id' => 31,
                'award_id' => 98,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            127 => 
            array (
                'lawyer_id' => 32,
                'award_id' => 99,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            128 => 
            array (
                'lawyer_id' => 33,
                'award_id' => 100,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            129 => 
            array (
                'lawyer_id' => 36,
                'award_id' => 101,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            130 => 
            array (
                'lawyer_id' => 37,
                'award_id' => 102,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            131 => 
            array (
                'lawyer_id' => 38,
                'award_id' => 103,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            132 => 
            array (
                'lawyer_id' => 41,
                'award_id' => 37,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            133 => 
            array (
                'lawyer_id' => 42,
                'award_id' => 104,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            134 => 
            array (
                'lawyer_id' => 43,
                'award_id' => 105,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            135 => 
            array (
                'lawyer_id' => 44,
                'award_id' => 106,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            136 => 
            array (
                'lawyer_id' => 45,
                'award_id' => 107,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            137 => 
            array (
                'lawyer_id' => 46,
                'award_id' => 82,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            138 => 
            array (
                'lawyer_id' => 47,
                'award_id' => 108,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            139 => 
            array (
                'lawyer_id' => 48,
                'award_id' => 108,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            140 => 
            array (
                'lawyer_id' => 49,
                'award_id' => 109,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            141 => 
            array (
                'lawyer_id' => 51,
                'award_id' => 110,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            142 => 
            array (
                'lawyer_id' => 53,
                'award_id' => 111,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:25',
                'updated_at' => '2021-08-16 19:37:25',
            ),
            143 => 
            array (
                'lawyer_id' => 54,
                'award_id' => 112,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            144 => 
            array (
                'lawyer_id' => 55,
                'award_id' => 113,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            145 => 
            array (
                'lawyer_id' => 56,
                'award_id' => 114,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            146 => 
            array (
                'lawyer_id' => 57,
                'award_id' => 115,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            147 => 
            array (
                'lawyer_id' => 58,
                'award_id' => 116,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            148 => 
            array (
                'lawyer_id' => 59,
                'award_id' => 117,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            149 => 
            array (
                'lawyer_id' => 60,
                'award_id' => 118,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            150 => 
            array (
                'lawyer_id' => 61,
                'award_id' => 95,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            151 => 
            array (
                'lawyer_id' => 62,
                'award_id' => 45,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            152 => 
            array (
                'lawyer_id' => 63,
                'award_id' => 104,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            153 => 
            array (
                'lawyer_id' => 64,
                'award_id' => 68,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            154 => 
            array (
                'lawyer_id' => 65,
                'award_id' => 19,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            155 => 
            array (
                'lawyer_id' => 66,
                'award_id' => 119,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            156 => 
            array (
                'lawyer_id' => 67,
                'award_id' => 120,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            157 => 
            array (
                'lawyer_id' => 68,
                'award_id' => 45,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            158 => 
            array (
                'lawyer_id' => 69,
                'award_id' => 121,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            159 => 
            array (
                'lawyer_id' => 70,
                'award_id' => 122,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            160 => 
            array (
                'lawyer_id' => 71,
                'award_id' => 16,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            161 => 
            array (
                'lawyer_id' => 72,
                'award_id' => 123,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            162 => 
            array (
                'lawyer_id' => 117,
                'award_id' => 124,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            163 => 
            array (
                'lawyer_id' => 73,
                'award_id' => 125,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            164 => 
            array (
                'lawyer_id' => 76,
                'award_id' => 126,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            165 => 
            array (
                'lawyer_id' => 77,
                'award_id' => 127,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            166 => 
            array (
                'lawyer_id' => 78,
                'award_id' => 128,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            167 => 
            array (
                'lawyer_id' => 79,
                'award_id' => 63,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:26',
                'updated_at' => '2021-08-16 19:37:26',
            ),
            168 => 
            array (
                'lawyer_id' => 80,
                'award_id' => 109,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            169 => 
            array (
                'lawyer_id' => 83,
                'award_id' => 129,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            170 => 
            array (
                'lawyer_id' => 84,
                'award_id' => 130,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            171 => 
            array (
                'lawyer_id' => 86,
                'award_id' => 131,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            172 => 
            array (
                'lawyer_id' => 87,
                'award_id' => 132,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            173 => 
            array (
                'lawyer_id' => 88,
                'award_id' => 133,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            174 => 
            array (
                'lawyer_id' => 89,
                'award_id' => 134,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            175 => 
            array (
                'lawyer_id' => 90,
                'award_id' => 135,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            176 => 
            array (
                'lawyer_id' => 91,
                'award_id' => 136,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            177 => 
            array (
                'lawyer_id' => 92,
                'award_id' => 137,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            178 => 
            array (
                'lawyer_id' => 95,
                'award_id' => 138,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            179 => 
            array (
                'lawyer_id' => 96,
                'award_id' => 87,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            180 => 
            array (
                'lawyer_id' => 97,
                'award_id' => 139,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            181 => 
            array (
                'lawyer_id' => 98,
                'award_id' => 140,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            182 => 
            array (
                'lawyer_id' => 99,
                'award_id' => 29,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            183 => 
            array (
                'lawyer_id' => 100,
                'award_id' => 68,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            184 => 
            array (
                'lawyer_id' => 101,
                'award_id' => 141,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            185 => 
            array (
                'lawyer_id' => 102,
                'award_id' => 142,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            186 => 
            array (
                'lawyer_id' => 103,
                'award_id' => 40,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            187 => 
            array (
                'lawyer_id' => 105,
                'award_id' => 49,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            188 => 
            array (
                'lawyer_id' => 106,
                'award_id' => 143,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            189 => 
            array (
                'lawyer_id' => 107,
                'award_id' => 19,
                'year' => '2020',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
            190 => 
            array (
                'lawyer_id' => 108,
                'award_id' => 102,
                'year' => '2021',
                'created_at' => '2021-08-16 19:37:27',
                'updated_at' => '2021-08-16 19:37:27',
            ),
        ));
        
        
    }
}