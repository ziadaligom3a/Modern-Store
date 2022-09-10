<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
            'category_id' => 1,
            'img' => '/images/41sNdO1MNWL._AC_.png',
            'name' => 'Tempered Glass Gaming Case with 4 ARGB Fans (341G, Black)',
            'price' => '1,599',
            'slug' => 'Tempered-Glass-Gaming-Case-Black',
            
            ],
            [
                
                'category_id' => 1,
                'img' => '/images/71WcGA8SWIS._AC_SL1500.png',
                'name' => 'LIAN LI Mesh Airflow ATX PC Case Gaming Computer Case Mid-Tower',
                'price' => '1,774',
                'slug' => 'Pre-Installed-Water-Cooling-LANCOOL-205-MESH'
                
            ]
        ]);
    }
}
