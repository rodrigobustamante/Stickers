@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-content">
      <h4 class="card-title center">Listado de stickers</h4>
      <table class="striped responsive-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Link de la imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($stickers as $sticker)
            <tr>
              <td> {{ $sticker->id }}</td>
              <td> {{ $sticker->name }}</td>
              <td> $ {{ $sticker->price }}</td>
              <td> <a href="{{ asset('images/stickers/'.$sticker->picture) }}">{{ $sticker->picture }}</a></td>
              <td> <a href="{{ route('stickers.show', $sticker->id) }}">Ver</a> | 
                   <a href="{{ route('stickers.edit', $sticker->id) }}">Editar</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="center">
    {{ $stickers->links() }}
  </div>
</div>
@endsection