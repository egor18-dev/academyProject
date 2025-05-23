<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'exam_id',
        'question',
        'type',
        'options',
        'answer',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id', 'uuid');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
