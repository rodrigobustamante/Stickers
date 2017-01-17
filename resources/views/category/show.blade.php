@extends('layouts.app')
@section('content')
<div class="row">
  <div class="container">
	  <h3>Categoría: {{ $category->category }}</h3>
		<hr style="opacity: 0.3">
	@if(!$stickers->count())
	  <div>En este momento, no existen stickers en esta categoría.</div>
	@else
		<div class="row">
		@foreach($stickers as $sticker)
			<div class="col m4">
		    <div class="card-panel">
		      <img class="sticker-image" width="250px" src="{{ asset('images/stickers/'.$sticker->picture) }}" alt="$sticker->image">
		      <p><a href="{{ route('stickers.show', $sticker->id) }}">{{ $sticker->name }}</a></p>
		    </div>
		  </div>
	  @endforeach
	</div>
	<div class="center">{{ $stickers->render() }}</div>
	@endif
  </div>
</div>
@endsection