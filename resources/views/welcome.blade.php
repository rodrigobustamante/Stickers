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
<div class="row scrollspy" id="news">
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
            <p><a href="{{ route('stickers.show', $sticker->id) }}">{{ $sticker->name }}</a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="center">
      {{ $stickers->links() }}
    </div>
    @endif
  </div>
</div>
<div class="row scrollspy" id="categories">
  <div class="container">
    <div class="row">
      <div class="col m12">
        <div class="card">
          <div class="card-content">
            <h3>Categorías</h3>
            <div class="divider"></div>
            @if( !$categories->count() )
            <div>No existen categorías que mostrar</div>
            @else
              @foreach( $categories as $category )
              <div class="collection">
                <a href="{{ route('category.show', $category->id) }}" class="collection-item">
                  <h5> 
                    <span class="blue-text text-darken-4">{{ $category->category }}</span> 
                    @if( $category->stickers->count() <= 1)
                    <span style="font-size: 25px" data-badge-caption="" class="new badge blue darken-4">
                      {{ $category->stickers->count() }}
                    </span>
                    @else
                    <span style="font-size: 25px" data-badge-caption="" class="new badge blue darken-4">
                      {{ $category->stickers->count() }}
                    </span>
                    @endif 
                  </h5>
                </a>
              </div>
              @endforeach
            @endif
          </div>
        </div>
        <div class="center">
          {{ $categories->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row scrollspy" id="prices">
  <div class="container">
    <div class="row">
      <div class="col m12">
        <div class="card horizontal">
          <div class="card-content">
            <h2>Precios</h2>
            <div class="divider"></div>
            <div class="section">
              <h5>Por unidad</h5>
              <p>Si realizas un pedido de 1, 2 o 3 stickers, la unidad tendrá un valor de $500 c/u.</p>
              <p>Al realizar la compra de 4 stickers, tendrá un valor de $1500.</p>
              <p>Precios también dependen de las medidas del sticker, para realizar la impresión de un sticker que no se encuentra en el catálogo, enviar un correo electrónico a <a href="sticksell@gmail.com?Subject=Solicitud%20sticker">sticksell@gmail.com</a>.</p>
            </div>
            <div class="divider"></div>
            <div class="section">
              <h5>Precios mayoristas</h5>
              <p>Próximamente...</p>
            </div>
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
      $('.scrollspy').scrollSpy();  
    }); 
  </script>
@endsection