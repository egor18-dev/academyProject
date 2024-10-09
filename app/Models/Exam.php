<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['class_id', 'title'];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'exam_question');
    }
}
