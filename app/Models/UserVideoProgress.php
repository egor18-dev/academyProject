<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserVideoProgress extends Model
{
    use HasFactory;
    protected $table = 'user_video_progress';

    protected $fillable = ['user_id','class_id','watched'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'uuid');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id', 'uuid');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
