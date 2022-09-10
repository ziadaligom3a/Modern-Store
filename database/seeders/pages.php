<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
       
        DB::table('pages')->insert([

            [

                'name' => '{"en":"Home","ar":"الرئيسيه"}',
                'path' => '/'
            ],

            [
                'name' => '{"en":"About","ar":"عنا"}',
                'path' => '/about'
            ],
            
            [

                'name' => '{"en":"Categories","ar":"التصنيفات"}',
                'path' => '/#categories'
            ],

            [

                'name' => '{"en":"Contact Us","ar":"اتصل بنا"}',
                'path' => '/contact'
            ]

            

        ]);
    }
}
