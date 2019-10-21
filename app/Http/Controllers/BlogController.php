<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('user')->orderBy('created_at', 'DESC')->simplePaginate(10);

        return view('frontend.index', compact('posts'));
    }

    public function post(Post $post)
    {
        $post = $post->load(['comentarios.user', 'user']);

        return view('frontend.post', compact('post'));
    }

    public function comentario(Request $request, Post $post)
    {
        $this->validate($request, ['texto' => 'required']);

        $post->comentarios()->create([
            'texto' => $request->texto
        ]);
        flash()->overlay('Comentário realizado com sucesso!');

        return redirect("/posts/{$post->id}");
    }
}
