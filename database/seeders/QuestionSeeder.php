<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        Question::create([
            'class_id' => 1,
            'question_text' => '¿Cuál es la capital de Francia?',
            'correct_answer' => 'París',
            'options' => json_encode(['París', 'Londres', 'Berlín', 'Madrid'])
        ]);

        Question::create([
            'class_id' => 1,
            'question_text' => '¿Qué es Laravel?',
            'correct_answer' => 'Un framework de PHP',
            'options' => json_encode(['Un framework de PHP', 'Un lenguaje de programación', 'Una base de datos', 'Un sistema operativo'])
        ]);

    }
}

