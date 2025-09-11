<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product_categories')->insert([
            'name' => 'aksesoris',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_categories')->insert([
            'name' => 'smartphone',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_categories')->insert([
            'name' => 'electronics',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
