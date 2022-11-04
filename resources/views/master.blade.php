<!DOCTYPE html>
<html lang="en">
<head>
    <style>
  
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yutu</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery-3.6.1.js')}}"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">El Yutu Amarillo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Videos
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/videos')}}">Consultar</a>
            <a class="dropdown-item" href="#">Registrar</a>
            <div class="dropdown-divider"></div>
            
            </div>
        </li>
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('contenido')

            </div>
        </div>
    </div>
    

  <footer id="sticky-footer" class="flex-shrink-1 py-4 bg-secondary text-white-50">
    <div class="container text-center">
      <small>Juan Pablo Castañeda Luzania y Paulo Cesar Irizar Casares</small>
    </div>
  </footer>
</body>



<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>