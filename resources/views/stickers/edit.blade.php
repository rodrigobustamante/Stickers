@extends('layouts.app')
@section('content')
<div class="container">
		<div class="card-panel" style="max-width: 650px; min-width: 300px;" >
		<h3>Editar sticker</h3>
		<hr style="opacity: 0.1">
		{!! Form::model($sticker, [
      'method' => 'PUT', 
      'route' => ['stickers.update', $sticker->id], 
      'class' => 'form-horizontal',
      'files' => true
    ]) !!}
			<div class="input-field">                  
        {!! Form::text('name', null, ['class' => 'form-control']) !!}  
        <label for="name" class="control-label">Nombre del sticker</label>
        @if ($errors->has('name'))
         	<span class="help-block">
          	<strong> {{ $errors->first('name') }}</strong>
          </span>
				@endif
			</div>
      <div class="input-field">
        {!! Form::number('price', null, ['class' => 'form-control']) !!} 
        <label for="price" class="control-label">Precio</label>
        @if ($errors->has('price'))
         	<span class="help-block">
          	<strong> {{ $errors->first('price') }}</strong>
        	</span>
        @endif
      </div>
    	<div class="file-field input-field">                    
    		<div class="btn blue darken-4">
	        <span>Imagen</span>
        {!! Form::file('picture') !!}
	      </div>
	      <div class="file-path-wrapper">
	        {!! Form::text('image-name', null, ['class' => 'file-path validate']) !!}  
	      </div>
    		@if ($errors->has('price'))
         	<span class="help-block">
          	<strong> {{ $errors->first('price') }}</strong>
        	</span>
        @endif
      </div>
      <div class="input-field">                    
        <input type="number" step="any" name="height">
        <label for="height" class="control-label">Alto</label>
        @if ($errors->has('height'))
          <span class="help-block">
            <strong> {{ $errors->first('height') }}</strong>
          </span>
        @endif
      </div>
      <div class="input-field">                    
        <input type="number" step="any" name="width">
        <label for="width" class="control-label">Ancho</label>
        @if ($errors->has('width'))
          <span class="help-block">
            <strong> {{ $errors->first('width') }}</strong>
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
    		<input class="btn blue darken-4" type="submit" value="Editar sticker">
    	</div>
    {!! Form::close() !!}
	</div>
</div>
@endsection