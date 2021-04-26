<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Baju'
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana'
        ]);

        DB::table('categories')->insert([
            'name' => 'Daster'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jeans'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hoodie'
        ]);
    }
}
