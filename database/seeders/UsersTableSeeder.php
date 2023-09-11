<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Test Account',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'img' => 'https://iili.io/4sjQhN.png',
                'password' => '$2y$10$xg4tPTub3onX5i32gMtSEefsJKiGWZ/0gVw3TkRrHGROzdtaG.Nvm',
                'remember_token' => NULL,
                'created_at' => '2022-08-30 21:04:53',
                'updated_at' => '2022-08-31 19:17:07',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Test Account 1',
                'email' => 'test1@gmail.com',
                'email_verified_at' => NULL,
                'img' => 'https://iili.io/4secF9.png',
                'password' => '$2y$10$j0TsZR.Uqep3BXCMsZIV9u9oAX9pM.y766ySp9yNii5Rp3QZVtSki',
                'remember_token' => NULL,
                'created_at' => '2022-08-31 15:20:56',
                'updated_at' => '2022-08-31 18:36:40',
            ),
        ));


    }
}
