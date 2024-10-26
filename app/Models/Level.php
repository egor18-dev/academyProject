<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Level extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'level_id', 'uuid');
    }

    public function userExams()
    {
        return $this->hasMany(UserExam::class, 'level_id', 'uuid');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
