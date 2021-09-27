<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreaAreaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('area_area')->delete();
        
        \DB::table('area_area')->insert(array (
            0 => 
            array (
                'parent_id' => 2,
                'area_id' => 6,
                'created_at' => '2021-07-07 17:39:52',
                'updated_at' => '2021-07-07 17:39:52',
            ),
            1 => 
            array (
                'parent_id' => 2,
                'area_id' => 33,
                'created_at' => '2021-07-07 17:39:52',
                'updated_at' => '2021-07-07 17:39:52',
            ),
            2 => 
            array (
                'parent_id' => 2,
                'area_id' => 1,
                'created_at' => '2021-07-07 17:39:52',
                'updated_at' => '2021-07-07 17:39:52',
            ),
            3 => 
            array (
                'parent_id' => 2,
                'area_id' => 34,
                'created_at' => '2021-07-07 17:39:53',
                'updated_at' => '2021-07-07 17:39:53',
            ),
        ));
        
        
    }
}