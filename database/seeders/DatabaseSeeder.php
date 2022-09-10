<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(AdminPagesTableSeeder::class);
        $this->call(BoxesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(DescsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UserpsTableSeeder::class);
        $this->call(pages::class);
    }
}
