<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Português',
                'title_en' => 'Portuguese',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Alemão',
                'title_en' => 'Germam',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Inglês',
                'title_en' => 'English',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Francês',
                'title_en' => 'French',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Espanhol',
                'title_en' => 'Spanish',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Italiano',
                'title_en' => 'Italian',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Japonês',
                'title_en' => 'Japanese',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Holandês',
                'title_en' => 'Dutch',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Coreano',
                'title_en' => 'Korean',
                'created_at' => '2021-07-28 15:27:39',
                'updated_at' => '2021-07-28 15:27:39',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Hebraico',
                'title_en' => 'Hebraic',
                'created_at' => '2021-08-25 16:16:53',
                'updated_at' => '2021-08-25 16:17:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}