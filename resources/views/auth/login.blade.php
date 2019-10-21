@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h2 class="text-primary mb-5">Entrar</h2>
    <div class="card mb-5 shadow-sm p-5">
        <div class="row">
            <div class="col-12">
                <form class="form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row m-5 p-5">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-12">
                            <label for="email" class="control-label">E-Mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} col-12">
                            <label for="password" class="control-label">Senha</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-link float-right" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection