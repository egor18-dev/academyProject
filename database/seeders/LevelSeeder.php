<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            [
                'uuid' => (string) Str::uuid(),
                'name' => 'Fundamentos del Trading',
                'description' => 'Este nivel está diseñado para aquellos que son completamente nuevos en el mundo del trading. Los estudiantes aprenderán los conceptos básicos, como la terminología del mercado',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'name' => 'Estrategias de Trading',
                'description' => 'Este nivel está dirigido a aquellos que ya tienen una comprensión básica del trading y quieren profundizar en el desarrollo de estrategias más sólidas',
            ],
            [
                'uuid' => (string) Str::uuid(),
                'name' => 'Trading Profesional',
                'description' => 'Este nivel está diseñado para traders que ya tienen experiencia y buscan llevar su operativa al nivel profesional. En esta etapa, se cubren estrategias complejas, como el trading algorítmico',
            ],
        ];

        DB::table('levels')->insert($levels);
    }
}