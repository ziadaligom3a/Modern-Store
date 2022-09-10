<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class descs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descs')->insert([

            'name' => 'Computer And Laptop',
            'type' => 'Accessories',
            'body' => 'besten Store in Ihren Händen👌.'
        ]);

          

        
    }
}
