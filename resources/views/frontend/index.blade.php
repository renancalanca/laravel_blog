@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h2 class="text-primary d-inline">Posts</h2>
    @include('flash::message')
    @if(Auth::user())
        @if (Auth::user()->is_admin)
            <a href="{{ url('admin/posts/create') }}" class="btn btn-primary float-right d-inline">Novo Post</a>
        @endif
    @endif
    <div class="row">
        <div class="col-12 mt-5">
            @forelse ($posts as $post)
            <div class="mb-5 shadow media position-relative bg-white">
                <img src="{{ asset('img/download.png') }}" class="card-img-top" alt=" Sdds imagem">
                <div class="card-body w-100">
                    <h5 class="card-titulo">{{ $post->titulo }}</h5>
                    <h6 class="card-subtitulo mb-2 text-muted">{{ $post->user->name }} - <small class="text-muted">{{ $post->created_at->toDayDateTimeString() }}</small></h6>
                    <p class="card-text">{{ str_limit($post->texto, 200) }}</p>
                    @if(Auth::user())
                        <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn btn-info mr-2">Editar</a>
                        <a href="{{ url("/admin/posts/{$post->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Você tem certeza?" class="btn btn-danger">Deletar</a>                        
                    @endif
                    <a href="{{ url("/posts/{$post->id}") }}" class="btn btn-link float-right">Veja mais &rArr;</a>                    
                </div>
            </div>
            @empty
            <div class="card mb-5 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-titulo text-danger">Não encontrado!!</h5>
                    <p class="card-text">Nenhum post encontrado.</p>
                </div>
            </div>
            @endforelse
            <div class="text-center">
                {!! $posts->appends(['search' => request()->get('search')])->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection