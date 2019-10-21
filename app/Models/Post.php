<?php

namespace App\Models;

use App\User;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo',
        'texto',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if(is_null($post->user_id)) {
                $post->user_id = auth()->user()->id;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
