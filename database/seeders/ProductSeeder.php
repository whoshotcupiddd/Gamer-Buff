<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
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
