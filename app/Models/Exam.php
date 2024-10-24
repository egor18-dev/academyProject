<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['level_id', 'title', 'description'];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'exam_id', 'uuid');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
