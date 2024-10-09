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
            'surnames' => '3',
            'email' => 'usuari3@example.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Usuario',
            'surnames' => '5',
            'email' => 'usuario5@example.com',
            'password' => bcrypt('password')
        ]);
    }
}

