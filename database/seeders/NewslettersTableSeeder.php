<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewslettersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('newsletters')->delete();
        
        \DB::table('newsletters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ludmilla',
                'email' => 'ludmilla.carvalho@pravy.com.br',
                'lang' => 'en',
                'created_at' => '2021-07-08 12:07:05',
                'updated_at' => '2021-07-08 12:07:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ludmilla Carvalho',
                'email' => 'amystis@gmail.com',
                'lang' => 'en',
                'created_at' => '2021-07-27 14:03:48',
                'updated_at' => '2021-07-27 14:03:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}