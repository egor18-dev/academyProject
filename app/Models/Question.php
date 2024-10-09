<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['class_id', 'question_text', 'correct_answer', 'options'];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'exam_question');
    }
}
