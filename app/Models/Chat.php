<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'uuid',
        'from_user_id',
        'to_user_id',
        'message',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'uuid');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'uuid');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
