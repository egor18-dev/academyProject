<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'message',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'uuid');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'uuid');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
