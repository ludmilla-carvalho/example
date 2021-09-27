<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AwardTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('award_types')->delete();
        
        \DB::table('award_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Chambers Latin America',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Chambers Latin America Guide',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'The Legal 500 Latin America',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Who’s Who Legal',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'LatinFinance Deals of the Year',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Latin Lawyer Elite ',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'IFLR Americas Awards',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Latin Lawyer 250',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'IFLR 1000',
                'image' => NULL,
                'created_at' => '2021-08-06 17:37:25',
                'updated_at' => '2021-08-06 17:37:25',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Who\'s Who Legal Brazil',
                'image' => NULL,
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Chambers Brazil',
                'image' => NULL,
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Benchmark Litigation',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:16',
                'updated_at' => '2021-08-16 18:28:16',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Chambers FinTech',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:17',
                'updated_at' => '2021-08-16 18:28:17',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Chambers Global',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:17',
                'updated_at' => '2021-08-16 18:28:17',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Global Data Review - GDR 100',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:17',
                'updated_at' => '2021-08-16 18:28:17',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'LACCA Thought Leaders',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:17',
                'updated_at' => '2021-08-16 18:28:17',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'LACCA Approved',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:17',
                'updated_at' => '2021-08-16 18:28:17',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Chambers High Net Worth',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:17',
                'updated_at' => '2021-08-16 18:28:17',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Euromoney Rising Stars Awards',
                'image' => NULL,
                'created_at' => '2021-08-16 18:28:18',
                'updated_at' => '2021-08-16 18:28:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}