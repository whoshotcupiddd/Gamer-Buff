<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //super admin
        \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'joe@admin.com',
            'password' => bcrypt('123'),
            'role' => 1,
        ]);

        Product::create([
            'name' => 'Black Myth: Wukong',
            'price' => 59.99,
            'image' => 'wukong.jpeg',
            'description' => 'A mythological action-adventure game based on Journey to the West.'
        ]);

        Product::create([
            'name' => 'Minecraft',
            'price' => 19.99,
            'image' => 'minecraft.jpg',
            'description' => 'A sandbox game that lets players build and explore infinite worlds.'
        ]);

        Product::create([
            'name' => 'Valorant',
            'price' => 0.00,
            'image' => 'valorant.jpg',
            'description' => 'A tactical shooter from Riot Games that is free to play.'
        ]);

    }
}
