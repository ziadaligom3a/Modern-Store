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
                'id' => 5,
                'name' => 'Charmaine W McMartin',
                'email' => 'ajzead660@gmail.com',
                'email_verified_at' => NULL,
                'img' => 'https://iili.io/4sjQhN.png',
                'password' => '$2y$10$oSfwoJ52uyDT350nYI91ouyzzX.ZMi7qLfQ5VMll/ecLWlsWaMQz6',
                'remember_token' => NULL,
                'created_at' => '2022-08-30 21:04:53',
                'updated_at' => '2022-08-31 19:17:07',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Charma1ine W McMartin11',
                'email' => 'mahmoudganas@gmail.com',
                'email_verified_at' => NULL,
                'img' => 'https://iili.io/4secF9.png',
                'password' => '$2y$10$/h4nlHNrw5CSC5XDVd0gfOSRWVwR0bjHXlvUQagapbXnfyODCS6WS',
                'remember_token' => NULL,
                'created_at' => '2022-08-31 15:20:56',
                'updated_at' => '2022-08-31 18:36:40',
            ),
        ));
        
        
    }
}