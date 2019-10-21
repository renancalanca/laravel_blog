@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h2 class="text-primary d-inline">Editar Post</h2>
    <a href="{{ url('/') }}" class="btn btn-primary float-right d-inline">Voltar</a>
    <div class="row mt-5 -">
        <div class="col-12">
            <div class="mb-5 shadow media position-relative bg-white p-5">
                {!! Form::model($post, ['method' => 'PUT', 'url' => "/admin/posts/{$post->id}", 'class' => 'row w-100', 'role' => 'form']) !!}
                @include('admin.posts._form')

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection