@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col s6 offset-l3 cen">
    <div class="card-panel" style="max-width: 650px; min-width: 300px;" >
    <h3 class="center">Restaurar contraseña</h3>
    <hr style="opacity: 0.1">
      <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}
          <div class="input-field">  
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">
              Enviar link para restaurar contraseña
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
