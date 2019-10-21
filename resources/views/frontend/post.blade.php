@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h2 class="text-primary d-inline">Posts #{{ $post->id }}</h2>
    @include('flash::message')    
    <a href="{{ url('/') }}" class="btn btn-primary float-right d-inline">Voltar</a>
    <div class="row">
        <div class="col-12 mt-5">
            <div class="mb-5 shadow media position-relative bg-white card">
                <img src="{{ asset('img/download.png') }}" class="card-img-top" alt=" Sdds imagem">
                <div class="card-body w-100">
                    <h1 class="card-titulo">{{ $post->titulo }}</h1>
                    <h6 class="card-subtitulo mb-2 text-muted">{{ $post->user->name }} - <small class="text-muted">{{ $post->created_at->toDayDateTimeString() }}</small></h6>
                    <p class="card-text">{{ $post->texto }}</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-5 shadow media bg-white card p-5 w-100">
                @includeWhen(Auth::user(), 'frontend._form')
                @include('frontend._comentarios')
            </div>
        </div>
    </div>
</div>
@endsection