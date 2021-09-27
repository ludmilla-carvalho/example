<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Rio de Janeiro',
                'title_en' => 'Rio de Janeiro',
                'created_at' => '2021-07-29 14:38:04',
                'updated_at' => '2021-07-29 14:38:04',
                'deleted_at' => '2021-07-29 14:38:04',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'São Paulo',
                'title_en' => 'São Paulo',
                'created_at' => '2021-07-29 14:38:04',
                'updated_at' => '2021-07-29 14:38:04',
                'deleted_at' => '2021-07-29 14:38:04',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Brasília',
                'title_en' => 'Brasília',
                'created_at' => '2021-07-29 14:38:04',
                'updated_at' => '2021-07-29 14:38:04',
                'deleted_at' => '2021-07-29 14:38:04',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Japão',
                'title_en' => 'Japan',
                'created_at' => '2021-07-29 14:38:04',
                'updated_at' => '2021-07-29 14:38:04',
                'deleted_at' => '2021-07-29 14:38:04',
            ),
        ));
        
        
    }
}