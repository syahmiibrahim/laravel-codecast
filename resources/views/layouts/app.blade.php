<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

    
</head>
<body id="app-layout">
    <nav>
        <div class="nav-wrapper">
            <a href="{{ url('/')}}" class="brand-logo">CodeCasts</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/')}}"><i class="mdi-action-view-list"></i></a></li>
                <li><a href="{{ url('about') }}"><i class="mdi-action-perm-identity"></i></a></li>
                <li><a href="{{ url('contact')}}"><i class="mdi-maps-place"></i></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ url('/')}}"><i class="mdi-action-view-list"></i></a></li>
                <li><a href="{{ url('about') }}"><i class="mdi-action-perm-identity"></i></a></li>
                <li><a href="{{ url('contact')}}"><i class="mdi-maps-place"></i></a></li>
            </ul>
        </div>
    </nav>
    
    <div class="row">
        <div class="col m10 offset-m1">
            @yield('content')      
        </div>
    </div>

   
   <script src="http://materializecss.com/templates/starter-template/js/init.js"></script>
</body>
</html>
