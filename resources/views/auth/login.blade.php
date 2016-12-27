@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col s6 offset-l3">
    <div class="card-panel" style="max-width: 650px; min-width: 300px;" >
    <h3 class="center">Inicio de sesión</h3>
    <hr style="opacity: 0.1">
      <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
          <div class="input-field">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            <label for="email" class="col-md-4 control-label">Correo electrónico</label>
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="input-field">
            <input id="password" type="password" class="form-control" name="password" required>
            <label for="password" class="col-md-4 control-label">Contraseña</label>
            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="col s12 offset-3">
            <div class="row">
              <input type="checkbox" name="remember" id="remember" />
              <label for="remember">Recuérdame</label>
            </div>
          </div>
          <div class="center">
            <div class="col s12">
              <div class="row">
                <button type="submit" class="btn blue darken-4">
                  Iniciar sesión
                </button>
              </div>
              <div class="row">
                <a class="btn blue darken-4" href="{{ url('/register') }}">
                  Registrarse
                </a>
              </div>
            </div>
            <div class="row">
              <a href="{{ url('/password/reset') }}">
                Olvidé mi contraseña
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
