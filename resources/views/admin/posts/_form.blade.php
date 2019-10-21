<div class="form-group {{ $errors->has('titulo') ? ' has-error' : '' }} col-12">
    {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
    <span class="help-block text-danger">
        <strong>{{ $errors->first('titulo') }}</strong>
    </span>
</div>

<div class="form-group {{ $errors->has('texto') ? ' has-error' : '' }} col-12">
    {!! Form::label('texto', 'Texto', ['class' => 'control-label']) !!}
    {!! Form::textarea('texto', null, ['class' => 'form-control', 'required']) !!}
    <span class="help-block text-danger">
        <strong>{{ $errors->first('texto') }}</strong>
    </span>
</div>