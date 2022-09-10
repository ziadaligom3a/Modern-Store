<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            
            [
            
            [
            'name' => '{"en":"Computer","ar":"كمبيوتر"}',
            'img' => '/images/case.jpg',
            'slug' => 'Computers'
            ],[

                'name' => '{"en":"Laptop","ar":"لابتوب"}',
                'img' => '/images/laptop.png',
                'slug' => 'Laptops'
            ],
            [

                'name' => 'Mouses',
                'img' => '/images/product2.png',
                'slug' => 'Mouses'
            ],[

                'name' => 'Cameras',
                'img' => '/images/product3.png',
                'slug' => 'Cameras'
    
            ],[

                'name' => 'Speakers',
                'img' => '/images/product4.png',
                'slug' => 'Speakers'
    
            ],[

                'name' => 'internet',
                'img' => '/images/product5.png',
                'slug' => 'internet'
    
            ],[

                'name' => 'Hardisk',
                'img' => '/images/product6.png',
                'slug' => 'Hardisk'
    
            ],[

                'name' => 'Rams',
                'img' => '/images/product7.png',
                'slug' => 'Rams'
    
            ],[

                'name' => 'Bettery',
                'img' => '/images/product8.png',
                'slug' => 'Bettery'
    
            ],[

                'name' => 'Drive',
                'img' => '/images/product9.png',
                'slug' => 'Drive'
    
            ]

          
        ]);
    }
}
