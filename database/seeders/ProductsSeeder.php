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
                'image' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6292/6292312_rd.jpg',
                'price' => 5000000,
                'stock' => 19,
                'product_categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Handphone',
                'description' => 'Handphone slim dan flip dengan kamera bokeh',
                'image' => 'https://m.media-amazon.com/images/I/61rIWBU+7qL._AC_SL1500_.jpg',
                'price' => 4000000,
                'stock' => 35,
                'product_categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'name' => 'Tablet',
                'description' => 'Tablet minimalis dan modern',
                'image' => 'https://th.bing.com/th/id/OIP.lUhOnQVpr_vRUbTk4n14ogHaHa?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3',
                'price' => 8600000,
                'stock' => 71,
                'product_categories_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Headset',
                'description' => 'Headset berkualitas bass dan clear sound',
                'image' => 'https://www.bhphotovideo.com/images/images2500x2500/logitech_981_000906_g_pro_x_wireless_1578916.jpg',
                'price' => 67000,
                'stock' => 40,
                'product_categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Speaker',
                'description' => 'Speaker full range berkualitas',
                'image' => 'https://th.bing.com/th/id/OIP.g-IXaRH2deMRDkasq9BDFQHaHa?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3',
                'price' => 3000000,
                'stock' => 5,
                'product_categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],            
            [
                'name' => 'True Wireless Stereo',
                'description' => 'TWS kualitas premium dengan fitur auto touh',
                'image' => 'https://tse1.mm.bing.net/th/id/OIP.6RoXBbPCv27HpPh1o4OUfQAAAA?rs=1&pid=ImgDetMain&o=7&rm=3',
                'price' => 210000,
                'stock' => 53,
                'product_categories_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            ]);
    }
}
