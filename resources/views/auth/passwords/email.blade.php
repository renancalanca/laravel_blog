@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h2 class="text-primary mb-5">Redefinir Senha</h2>
    <div class="card mb-5 shadow-sm p-5">
        <div class="row">
            <div class="col-12">
                <form class="form" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="row m-5 p-5">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-12">
                            <label for="email" class="control-label">E-Mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Enviar link para redefinir senha</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection