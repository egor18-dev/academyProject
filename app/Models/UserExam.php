<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserExam extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'level_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'uuid');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'uuid');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'level_id', 'level_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
