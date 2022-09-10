<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('boxes')->delete();
        
        DB::table('boxes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"en":"Computer","ar":"كمبيوتر"}',
                'body' => '{"en":"We have the latest computers.","ar":"لدينا أحدث أجهزة الكمبيوتر."}',
                'img' => 'https://iili.io/4sk5OJ.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{"en":"Laptop","ar":"لابتوب"}',
                'body' => '{"en":"A laptop is a small version of a computer, and you can find the best laptops here.","ar":"الكمبيوتر المحمول هو نسخة صغيرة من الكمبيوتر ، ويمكنك العثور على أفضل أجهزة الكمبيوتر المحمولة هنا."}',
                'img' => 'https://iili.io/4sk7Dv.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '{"en":"Tablet","ar":"تابلت"}',
                'body' => '{"en":"A tablet is a modern mobile device","ar":"الكمبيوتر اللوحي هو جهاز محمول حديث"}',
                'img' => 'https://iili.io/4skaxR.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}