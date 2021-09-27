<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schedules')->delete();
        
        \DB::table('schedules')->insert(array (
            0 => 
            array (
                'id' => 6,
                'event_id' => 9,
                'title' => 'Abertura',
                'hour' => '10:00',
                'created_at' => '2021-09-24 15:41:45',
                'updated_at' => '2021-09-24 15:41:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'event_id' => 9,
                'title' => 'Fechamento',
                'hour' => '12:00',
                'created_at' => '2021-09-24 15:41:45',
                'updated_at' => '2021-09-24 15:41:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}