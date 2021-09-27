<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('speakers')->delete();
        
        \DB::table('speakers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Nome',
                'city' => 'São Paulo',
                'email' => 'teste@teste.com',
                'phone' => '+55 11 99999-9999',
                'image' => '1632503417.png',
                'created_at' => '2021-09-24 12:23:27',
                'updated_at' => '2021-09-24 14:10:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'nome 2',
                'city' => 'Rio de Janeiro',
                'email' => 'teste@teste.com',
                'phone' => '+55 11 99999-9999',
                'image' => '1632503436.png',
                'created_at' => '2021-09-24 12:27:29',
                'updated_at' => '2021-09-24 14:10:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}