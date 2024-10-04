<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exam;

class ExamSeeder extends Seeder
{
    public function run(): void
    {
        Exam::create([
            'class_id' => 1,
            'title' => 'Examen de Clase 1.1',
            'questions' => json_encode([
                ['question_text' => '¿Cuál es la capital de Francia?', 'correct_answer' => 'París'],
            ]),
        ]);

        Exam::create([
            'class_id' => 2,
            'title' => 'Examen de Clase 1.2',
            'questions' => json_encode([
                ['question_text' => '¿Qué es Laravel?', 'correct_answer' => 'Un framework de PHP'],
            ]),
        ]);
    }

}

