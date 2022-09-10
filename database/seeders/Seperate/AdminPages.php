<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admin_pages')->insert([

            [
                'name' => 'Pages',
                'path' => '/admin/home/pages',
                'class' => 'fas fa-brands'
            ],

            [

                'name' => 'Pages',
                'path' => '/admin/home',
                'class' => 'fas fa-tachometer-alt'
            ]

        ]);
    }
}
