@extends('layouts.app')
@section('content')
<div class="row">
  <div class="parallax-container">
    <div class="container title-card">
      <div class="card-panel">
        <h1 class="center title-text">NO NAME STICKERS</h1>
      </div>
    </div>
    <div class="parallax"><img src=""></div>
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