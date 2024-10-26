<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Str;

class ClassModel extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'classes';
    protected $fillable = ['level_id', 'title', 'description', 'video_url'];

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'uuid');
    }

    public function userExams()
    {
        return $this->hasMany(UserExam::class, 'level_id', 'level_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
