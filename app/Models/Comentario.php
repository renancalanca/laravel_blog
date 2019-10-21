<?php

namespace App\Models;

use App\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'texto',
        'user_id',
        'post_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comentario) {
            if(is_null($comentario->user_id)) {
                $comentario->user_id = auth()->user()->id;
            }
        });
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
