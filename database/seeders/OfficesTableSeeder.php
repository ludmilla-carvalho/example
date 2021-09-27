<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offices')->delete();
        
        \DB::table('offices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1631565127.png',
                'title' => 'São Paulo',
                'title_en' => 'São Paulo',
                'address' => '<p>Rua Hungria, 1100<br>01455-906, São Paulo - SP<br>+55 11 3247.8400</p>',
                'order' => 1,
                'publish' => 1,
                'created_at' => '2021-09-13 17:32:07',
                'updated_at' => '2021-09-13 17:32:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1631565182.png',
                'title' => 'Rio de Janeiro',
                'title_en' => 'Rio de Janeiro',
                'address' => '<p>Rua Humaitá, 275, 160 andar<br>22261-005, Rio de Janeiro - RJ<br>+55 21 2506.1600</p>',
                'order' => 2,
                'publish' => 1,
                'created_at' => '2021-09-13 17:33:02',
                'updated_at' => '2021-09-13 17:33:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1631565237.png',
                'title' => 'Brasília',
                'title_en' => 'Brasília',
                'address' => '<p>SAFS, Qd. 2 - Bloco B<br>70070-600, Brasília - DF<br>+55 61 3212.9400</p>',
                'order' => 3,
                'publish' => 1,
                'created_at' => '2021-09-13 17:33:57',
                'updated_at' => '2021-09-13 17:33:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '1631565291.png',
                'title' => 'Palo Alto',
                'title_en' => 'Palo Alto',
                'address' => '<p>228 Hamilton Avenue, 3rd floor<br>CA 94301 / USA</p>',
                'order' => 4,
                'publish' => 1,
                'created_at' => '2021-09-13 17:34:51',
                'updated_at' => '2021-09-13 17:34:51',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '1631565361.png',
                'title' => 'Tóquio',
                'title_en' => 'Tokyo',
            'address' => '<p>1-6-2 Marunouchi Chiyoda-ku, 21st floor<br>Tokyo / Japan<br>+81 (3) 3216.7191</p>',
                'order' => 5,
                'publish' => 1,
                'created_at' => '2021-09-13 17:36:01',
                'updated_at' => '2021-09-13 17:36:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}