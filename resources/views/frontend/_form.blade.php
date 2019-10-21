<h5 class="mb-3">Escreva seu comentario:</h5>
{!! Form::open(['url' => "posts/{$post->id}/comentario", 'class' => 'row w-100']) !!}
    <div class="form-group col-12">
        {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => 3, 'required']) !!}
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block">Comentar</button>
    </div>
{!! Form::close() !!}
<h5 class="mt-3"></h5>