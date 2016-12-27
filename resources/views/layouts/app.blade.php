<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <style>
    .db{
      width: 175px;
    }
  </style>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <nav class="blue darken-4">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo center">No Name</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a class="test" href="#">Inicio</a></li>
        <li><a class="test" href="#">Catálogo</a></li>
        <li><a class="test" href="#">Precios</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        @if (Auth::guest())
        <li><a class="test" href="#">Iniciar Sesión</a></li>
        <li class="test">|</li>
        <li><a class="test" href="#">Registro</a></li>
        @else
        <li><a class='dropdown-button db' href='#' data-activates='dropdown1'>{{ Auth::user()->name }}</a></li>        
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#">Mi cuenta</a></li>
          <li>
            <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
        @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="test" href="#">Inicio</a></li>
        <li><a class="test" href="#">Catálogo</a></li>
        <li><a class="test" href="#">Precios</a></li>
        <li role="separator" class="divider"></li>
        @if (Auth::guest())
        <li><a class="test" href="#">Iniciar Sesión</a></li>
        <li><a class="test" href="#">Registro</a></li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar Sesión
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </nav>
        @yield('content')
  <footer class="page-footer blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">NO NAME STICKERS</h5>
          <p class="grey-text text-lighten-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem ratione architecto nemo enim accusantium sit, ab, ipsam voluptate incidunt quo error ea! Obcaecati similique, magnam, perspiciatis eaque consectetur cumque est.
          </p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Mapa del sitio</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Inicio</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Catálogo</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 NO NAME STICKERS
        <a class="grey-text text-lighten-4 right" href="#!">Redes sociales</a>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
      $(".dropdown-button").dropdown();  
    });
  </script>
</body>
</html>
