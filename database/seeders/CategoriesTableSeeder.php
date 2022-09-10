<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('categories')->delete();
        
        DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"en":"Computers","ar":"كمبيوتر"}',
                'img' => 'https://iili.io/4seOcF.jpg',
                'slug' => 'Computers',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:39:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{"en":"Laptops","ar":"لابتوب"}',
                'img' => 'https://iili.io/4sescX.png',
                'slug' => 'Laptops',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:40:27',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => '{"en":"Cameras","ar":"كاميرا"}',
                'img' => 'https://iili.io/4seZ9s.png',
                'slug' => 'Cameras',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:40:56',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => '{"en":"Speakers","ar":"مكبرات صوت"}',
                'img' => 'https://iili.io/4sebt4.png',
                'slug' => 'Speakers',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:41:37',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => '{"en":"Internet","ar":"انترنت"}',
                'img' => 'https://iili.io/4seyV2.png',
                'slug' => 'internet',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:42:12',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => '{"en":"Hard Disks","ar":"قرص صلب"}',
                'img' => 'https://iili.io/4sk9PS.png',
                'slug' => 'Hardisk',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 22:42:20',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => '{"en":"Rams","ar":"رام"}',
                'img' => 'https://iili.io/4skKAb.png',
                'slug' => 'Rams',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:43:30',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => '{"en":"Battery","ar":"بطاريه"}',
                'img' => 'https://iili.io/4skCoQ.png',
                'slug' => 'Bettery',
                'created_at' => '2022-08-30 23:39:56',
                'updated_at' => '2022-08-31 18:43:59',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => '{"en":"Drives","ar":"اقراص"}',
                'img' => 'https://iili.io/4skzKP.png',
                'slug' => 'Drive',
                'created_at' => '2022-08-30 23:54:28',
                'updated_at' => '2022-08-31 18:44:28',
            ),
        ));
        
        
    }
}