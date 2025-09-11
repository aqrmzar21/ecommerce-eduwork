<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
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
                'image' => 'https://www.bhphotovideo.com/images/images2500x2500/logitech_981_000906_g_pro_x_wireless_1578916.jpg',
                'price' => 5000000,
                'stock' => 10,
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Handphone',
                'description' => 'Handphone slim dan flip dengan kamera bokeh',
                'image' => 'https://th.bing.com/th/id/OIP.g-IXaRH2deMRDkasq9BDFQHaHa?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3',
                'price' => 3000000,
                'stock' => 5,
                'product_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'name' => 'Tablet',
                'description' => 'Tablet minimalis dan modern',
                'image' => 'https://tse1.mm.bing.net/th/id/OIP.6RoXBbPCv27HpPh1o4OUfQAAAA?rs=1&pid=ImgDetMain&o=7&rm=3',
                'price' => 2000000,
                'stock' => 5,
                'product_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            ]);
    }
}
