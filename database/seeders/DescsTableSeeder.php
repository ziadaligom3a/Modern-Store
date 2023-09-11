<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\ModelHasRolesTableSeeder;

class DescsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class); // Seed roles first
        $this->call(ModelHasRolesTableSeeder::class); // Seed model_has_roles afterward

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
