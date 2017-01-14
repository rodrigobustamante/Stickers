@extends('layouts.app')
@section('content')
<div class="container">
		<div class="card-panel" style="max-width: 650px; min-width: 300px;" >
		<h3>Agregar sticker</h3>
		<hr style="opacity: 0.1">
		{!! Form::open([
	    'route' => 'stickers.store', 
	    'class' => 'form-horizontal',
	    'files' => true
		]) !!}
			<div class="input-field">                    
      	<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        <label for="name" class="control-label">Nombre del sticker</label>
        @if ($errors->has('name'))
         	<span class="help-block">
          	<strong>{{ $errors->first('name') }}</strong>
          </span>
				@endif
			</div>
      <div class="input-field">                    
      	<input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required>
        <label for="price" class="control-label">Precio</label>
        @if ($errors->has('price'))
         	<span class="help-block">
          	<strong>{{ $errors->first('price') }}</strong>
        	</span>
        @endif
      </div>
    	<div class="file-field input-field">                    
    		<div class="btn blue darken-4">
	        <span>Imagen</span>
	        <input id="picture" type="file" class="form-control" name="picture" value="{{ old('picture') }}" required>
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text" name="image-name">
	      </div>
    		@if ($errors->has('price'))
         	<span class="help-block">
          	<strong>{{ $errors->first('price') }}</strong>
        	</span>
        @endif
      </div>
      <div class="input-field">                    
        <input id="height" type="number" step="any" class="form-control" name="height" value="{{ old('height') }}" required>
        <label for="height" class="control-label">Alto</label>
        @if ($errors->has('height'))
          <span class="help-block">
            <strong>{{ $errors->first('height') }}</strong>
          </span>
        @endif
      </div>
      <div class="input-field">                    
        <input id="width" type="number" step="any" class="form-control" name="width" value="{{ old('width') }}" required>
        <label for="width" class="control-label">Ancho</label>
        @if ($errors->has('width'))
          <span class="help-block">
            <strong>{{ $errors->first('width') }}</strong>
          </span>
        @endif
      </div>
      <div class="input-field">                    
      	{!! Form::select('category', $category, null, [
           'placeholder' => 'Seleccionar'
        ]) !!}
        @if($errors->has('category'))
        	<span class="help-block">
          	<strong class="error-message">
            	{{ $errors->first('category') }}
            </strong>
          </span>
        @endif
      </div>
    	<div class="input-field">
    		<input class="btn blue darken-4" type="submit" value="Agregar sticker">
    	</div>
    {!! Form::close() !!}
	</div>
</div>
@endsection