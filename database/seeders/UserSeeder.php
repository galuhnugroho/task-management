<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user123',
            'role' => 'user'
        ]);

        User::create([
            'name' => 'Galuh',
            'email' => 'galuh@gmail.com',
            'password' => 'user123',
            'role' => 'user'
        ]);
    }
}
