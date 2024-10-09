<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // LevelSeeder::class,
            // ClassSeeder::class,
            // QuestionSeeder::class,
            // ExamSeeder::class,
            UserSeeder::class,
        ]);
    }
}