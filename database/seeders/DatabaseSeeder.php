<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

    }
}
