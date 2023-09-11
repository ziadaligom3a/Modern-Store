<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('permissions')->delete();

        DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Edit Page',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:53:45',
                'updated_at' => '2022-09-09 18:53:45',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Delete Page',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:54:35',
                'updated_at' => '2022-09-09 18:54:35',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Add Page',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:55:16',
                'updated_at' => '2022-09-09 18:55:16',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Delete Product',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:55:35',
                'updated_at' => '2022-09-09 18:55:35',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Edit Product',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:16',
                'updated_at' => '2022-09-09 18:58:16',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Add Product',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:16',
                'updated_at' => '2022-09-09 18:58:16',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Delete Category',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:16',
                'updated_at' => '2022-09-09 18:58:16',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Add Category',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:16',
                'updated_at' => '2022-09-09 18:58:16',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Edit Category',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:16',
                'updated_at' => '2022-09-09 18:58:16',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Delete User',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:16',
                'updated_at' => '2022-09-09 18:58:16',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Add User',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:58',
                'updated_at' => '2022-09-09 18:58:58',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Edit User',
                'guard_name' => 'web',
                'created_at' => '2022-09-09 18:58:58',
                'updated_at' => '2022-09-09 18:58:58',
            ),
        ));


    }
}
