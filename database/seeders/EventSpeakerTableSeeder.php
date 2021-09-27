<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSpeakerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_speaker')->delete();
        
        \DB::table('event_speaker')->insert(array (
            0 => 
            array (
                'event_id' => 2,
                'speaker_id' => 1,
                'created_at' => '2021-09-24 13:20:40',
                'updated_at' => '2021-09-24 13:20:40',
            ),
            1 => 
            array (
                'event_id' => 3,
                'speaker_id' => 1,
                'created_at' => '2021-09-24 13:44:58',
                'updated_at' => '2021-09-24 13:44:58',
            ),
            2 => 
            array (
                'event_id' => 3,
                'speaker_id' => 2,
                'created_at' => '2021-09-24 13:44:58',
                'updated_at' => '2021-09-24 13:44:58',
            ),
            3 => 
            array (
                'event_id' => 4,
                'speaker_id' => 2,
                'created_at' => '2021-09-24 13:45:58',
                'updated_at' => '2021-09-24 13:45:58',
            ),
            4 => 
            array (
                'event_id' => 5,
                'speaker_id' => 1,
                'created_at' => '2021-09-24 13:47:20',
                'updated_at' => '2021-09-24 13:47:20',
            ),
            5 => 
            array (
                'event_id' => 5,
                'speaker_id' => 2,
                'created_at' => '2021-09-24 13:47:20',
                'updated_at' => '2021-09-24 13:47:20',
            ),
            6 => 
            array (
                'event_id' => 8,
                'speaker_id' => 2,
                'created_at' => '2021-09-24 15:28:50',
                'updated_at' => '2021-09-24 15:28:50',
            ),
            7 => 
            array (
                'event_id' => 9,
                'speaker_id' => 2,
                'created_at' => '2021-09-24 15:30:28',
                'updated_at' => '2021-09-24 15:30:28',
            ),
        ));
        
        
    }
}