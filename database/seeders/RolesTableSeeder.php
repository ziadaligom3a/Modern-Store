<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->delete();

        DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:52:00',
                'updated_at' => '2022-09-09 18:52:00',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'User',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 19:00:09',
                'updated_at' => '2022-09-09 19:00:09',
            ),
        ));


    }
}
