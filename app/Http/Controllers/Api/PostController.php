<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return Post::when($request->titulo, function($query) use ($request) {
            return $query->where('titulo', 'like', "%{$request->titulo}%");
        })
        ->when($request->search, function($query) use ($request) {
            return $query->where('titulo', 'like', "%{$request->search}%")
                         ->orWhere('texto', 'like', "%{$request->search}%");
        })
        ->when($request->order, function($query) use ($request) {
            if($request->order == 'oldest') {
                return $query->oldest();
            }
            return $query->latest();
        }, function($query) {
            return $query->latest();
        })
        ->paginate($request->get('limit', 10));
    }

    public function show(Post $post)
    {
        $post = $post->load(['comentarios.user', 'user']);

        return $post;
    }
}
