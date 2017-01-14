@extends('layouts.app')
@section('content')
<div class="row">
  <div class="parallax-container">
    <div class="container title-card">
      <div class="card-panel">
        <h1 class="center title-text">Stick Sell</h1>
      </div>
    </div>
    <div class="parallax">
      <img src="{{ asset('images/texture.jpg') }}">
    </div>
  </div>  
</div>
<div class="row">
  <div class="container">  
    <h3>Novedades</h3>
      @if ( !$stickers->count() )
        En este momento no hay stickers para mostrar
      @else
        <div class="row">
          @foreach( $stickers as $sticker)  
            <div>
              <div class="col m4">
                <div class="card-panel">
                  <img class="sticker-image" width="250px" src="{{ asset('images/stickers/'.$sticker->picture) }}" alt="$sticker->image">
                  <a href="{{ route('stickers.show', $sticker->id) }}">{{ $sticker->name }}</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="center">
          {{ $stickers->links() }}
        </div>
      @endif
    <h3>Por categoría</h3>
    <div class="row">
      <div class="col m12">
        <div class="col m4">
          <div class="card-panel">
            <img width="250px" src="{{ asset('images/stickers/trooper.jpg') }}" alt="">
          </div>
        </div>
        <div class="col m4">
          <div class="card-panel">
            <img width="250px" src="{{ asset('images/stickers/trooper.jpg') }}" alt="">
          </div>
        </div>
        <div class="col m4">
          <div class="card-panel">
            <img width="250px" src="{{ asset('images/stickers/trooper.jpg') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script>
     $(document).ready(function(){
      $('.parallax').parallax();  
    }); 
  </script>
@endsection