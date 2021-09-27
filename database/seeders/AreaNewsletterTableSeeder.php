<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreaNewsletterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('area_newsletter')->delete();
        
        \DB::table('area_newsletter')->insert(array (
            0 => 
            array (
                'newsletter_id' => 1,
                'area_id' => 1,
                'created_at' => '2021-07-08 12:07:05',
                'updated_at' => '2021-07-08 12:07:05',
            ),
            1 => 
            array (
                'newsletter_id' => 1,
                'area_id' => 4,
                'created_at' => '2021-07-08 12:07:05',
                'updated_at' => '2021-07-08 12:07:05',
            ),
            2 => 
            array (
                'newsletter_id' => 1,
                'area_id' => 7,
                'created_at' => '2021-07-08 12:07:05',
                'updated_at' => '2021-07-08 12:07:05',
            ),
            3 => 
            array (
                'newsletter_id' => 2,
                'area_id' => 3,
                'created_at' => '2021-07-27 14:03:55',
                'updated_at' => '2021-07-27 14:03:55',
            ),
            4 => 
            array (
                'newsletter_id' => 2,
                'area_id' => 4,
                'created_at' => '2021-07-27 14:03:55',
                'updated_at' => '2021-07-27 14:03:55',
            ),
            5 => 
            array (
                'newsletter_id' => 2,
                'area_id' => 7,
                'created_at' => '2021-07-27 14:03:55',
                'updated_at' => '2021-07-27 14:03:55',
            ),
            6 => 
            array (
                'newsletter_id' => 2,
                'area_id' => 12,
                'created_at' => '2021-07-27 14:03:56',
                'updated_at' => '2021-07-27 14:03:56',
            ),
            7 => 
            array (
                'newsletter_id' => 2,
                'area_id' => 15,
                'created_at' => '2021-07-27 14:03:56',
                'updated_at' => '2021-07-27 14:03:56',
            ),
        ));
        
        
    }
}