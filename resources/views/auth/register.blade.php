@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col s6 offset-l3">
    <div class="card-panel" style="max-width: 650px; min-width: 300px;" >
    <h3 class="center">Registro</h3>
    <hr style="opacity: 0.1">
      <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
          <div class="input-field">                    
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            <label for="name" class="col-md-4 control-label">Nombre</label>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
          <div class="input-field">                    
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
            <label for="last_name" class="col-md-4 control-label">Apellido</label>
            @if ($errors->has('last_name'))
              <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
              </span>
            @endif
          </div>
          <div class="input-field">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
          <div class="input-field">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>
          </div>
          <div class="center">
            <button type="submit" class="btn blue darken-4">
              Registrarse
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
