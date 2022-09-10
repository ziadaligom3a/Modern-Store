<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Desc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descs')->insert([
            'title' => 'Computer And Laptop',
            'type' => 'Accessories',
            'body' => 'Das beste Store in Ihren Händen 👌'

        ]);

           
      
    }
}
