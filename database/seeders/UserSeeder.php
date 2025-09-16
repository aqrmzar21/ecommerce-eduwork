<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; // jangan lupa import Hash
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // menambahakn user admin
        User::create([
            'name' => 'Admin',
            'email' => 'operator@gg.mu',
            'password' => Hash::make('password'), // gunakan bcrypt untuk meng-hash password
            'role' => 'admin', // set role sebagai 'admin'
        ]);
        User::create([
            'name' => 'Seller',
            'email' => 'sell@gg.mu',
            'password' => Hash::make('password'), // gunakan bcrypt untuk meng-hash password
            'role' => 'user', 
        ]);
    }
}
