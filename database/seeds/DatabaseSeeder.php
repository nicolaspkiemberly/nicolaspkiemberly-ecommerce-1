<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Product;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CategorySeeder::class]);
        Product::factory()->count(50)->create();
    }
}

