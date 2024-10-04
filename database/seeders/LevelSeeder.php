<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        Level::create(['name' => 'Nivel 1']);
        Level::create(['name' => 'Nivel 2']);
        Level::create(['name' => 'Nivel 3']);
    }
}

