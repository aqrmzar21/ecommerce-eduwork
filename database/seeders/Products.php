<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'description' => 'Laptop berkualitas',
                'image' => '1.jpg',
                'price' => 5000000,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Handphone',
                'description' => 'Handphone slim dan flip dengan kamera bokeh',
                'image' => '2.jpg',
                'price' => 3000000,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'name' => 'Tablet',
                'description' => 'Tablet minimalis dan modern',
                'image' => '3.jpg',
                'price' => 2000000,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            ]);
    }
}
