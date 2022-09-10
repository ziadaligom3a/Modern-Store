<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('admin_pages')->delete();
        
        DB::table('admin_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pages',
                'path' => '/admin/home/pages',
                'class' => 'fa fa-file-text',
                'created_at' => '2022-08-30 03:21:59',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dashboard',
                'path' => '/admin/home',
                'class' => 'fas fa-tachometer-alt',
                'created_at' => '2022-08-30 03:21:59',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Categories',
                'path' => '/admin/home/Categories',
                'class' => 'fa fa-align-justify',
                'created_at' => '2022-08-30 21:32:45',
                'updated_at' => '2022-08-30 21:32:45',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users',
                'path' => '/admin/home/Users',
                'class' => 'fa fa-user',
                'created_at' => '2022-08-31 00:23:42',
                'updated_at' => '2022-08-31 00:23:42',
            ),
        ));
        
        
    }
}