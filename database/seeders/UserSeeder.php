<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Usuario',
            'surnames' => '1',
            'email' => 'usuario1@example.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Usuario',
            'surnames' => '2',
            'email' => 'usuario2@example.com',
            'password' => bcrypt('password')
        ]);
    }
}

