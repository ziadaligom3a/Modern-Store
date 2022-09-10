<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('descs')->delete();
        
        DB::table('descs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '{"en":"Computer And Laptop","ar":"كمبيوتر ولابتوب"}',
                'type' => '{"en":"Accessories","ar":"إكسسوارات"}',
                'body' => '{"en":"The best store in your hands👌","ar":"أفضل متجر بين يديك"}',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}