@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h2 class="text-primary mb-5">Cadastrar</h2>
    <div class="card mb-5 shadow-sm p-5">
        <div class="row">
            <div class="col-12">
            <form class="form" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="row m-5 p-5">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-12">
                            <label for="name" class="control-label">Nome</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-12">
                            <label for="email" class="control-label">E-Mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-12">
                            <label for="password" class="control-label">Senha</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-12">
                            <label for="password-confirm" class="control-label">Confirmar Senha</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Cadastre-se</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection