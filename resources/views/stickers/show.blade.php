@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card-panel">
			<div class="card-content">
				<div class="row">
					<div class="col m6 push-s1 push-l1 cter-mobile">
						<img class="sticker-image" src="{{ asset('images/stickers/'.$sticker->picture) }}" alt="{{ $sticker->picture }}">
					</div>
					<div class="col m5">
						<h3>
							{{ $sticker->name }}
						</h3>
						<p class="category">
							Categoría: {{ $sticker->stickerCategory->category }} 
						</p>
						<p class="medidas">
							Tamaño: <br>
							Alto:  {{ $sticker->height }} cms. <br>
							Ancho: {{ $sticker->width }} cms.
						</p>
						<h4>
							Precio: $ {{ $sticker->price }}
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection