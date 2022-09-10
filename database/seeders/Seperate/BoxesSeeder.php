<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BoxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('boxes')->insert(
            
            [

                [
                'name' => '{"en":"Computer","ar":"كمبيوتر"}',
                'body' => '{"en":"We have the latest computers.","ar":"لدينا أحدث أجهزة الكمبيوتر."}',
                'img' => '/images/thr.png'
                ],

            [
                'name' => '{"en":"Laptop","ar":"لابتوب"}',
                'body' => '{"en":"A laptop is a small version of a computer, and you can find the best laptops here.","ar":"الكمبيوتر المحمول هو نسخة صغيرة من الكمبيوتر ، ويمكنك العثور على أفضل أجهزة الكمبيوتر المحمولة هنا."}',
                'img' => '/images/thr1.png'
            ],

            [
                'name' => '{"en":"Tablet","ar":"تابلت"}',
                'body' => '{"en":"A tablet is a modern mobile device","ar":"الكمبيوتر اللوحي هو جهاز محمول حديث"}',
                'img' => '/images/thr2.png'
            ]

            ]
            );
    }
}
