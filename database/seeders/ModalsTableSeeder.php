<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modals')->delete();
        
        \DB::table('modals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'JP',
                'text' => '<p>御社のビジネスの成功に貢献致します。</p><p>ピネイロ・ネト法律事務所は約50年間にわたり、日本企業及びアジア地域の企業をサポートしております。2020年1月に、東京に事務所を開設致しました。</p><p>詳細は　Japan Desk | Asian Deskをご覧ください。</p><p>お問い合わせはジャパンデスク担当パートナー大野友香までご連絡下さい。</p><p>当事務所の紹介につきましては、英語版のウェブサイトをご参照ください。</p>',
                'text_btn' => '今すぐナビゲート',
                'publish' => 1,
                'created_at' => '2021-09-15 11:55:44',
                'updated_at' => '2021-09-17 10:08:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}