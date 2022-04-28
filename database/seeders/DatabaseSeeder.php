<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $this->call([
            CompanyContactSeeder::class,
            CompanySeeder::class,
            ProductCatSeeder::class,
            ProductTypeSeeder::class,
            ServiceTypeSeeder::class,
        ]);
    }
}
