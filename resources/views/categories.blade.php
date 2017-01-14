@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div>
				<div class="card">
					<div class="card-content">
						<h3>Stickers por categoría</h3>
						<div class="row">
				      <div class="col m12">
				        <div class="col m4">
				          <div class="card-panel">
				            <img width="250px" src="{{ asset('images/stickers/trooper.jpg') }}" alt="">
	                  <h5><a href="">Programación</a></h5>
				          </div>
				        </div>
				        <div class="col m4">
				          <div class="card-panel">
				            <img width="250px" src="{{ asset('images/stickers/trooper.jpg') }}" alt="">
	                  <h5><a href="">Programación</a></h5>
				          </div>
				        </div>
				        <div class="col m4">
				          <div class="card-panel">
				            <img width="250px" src="{{ asset('images/stickers/trooper.jpg') }}" alt="">
	                  <h5><a href="">Programación</a></h5>
				          </div>
				        </div>
				      </div>
				    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection