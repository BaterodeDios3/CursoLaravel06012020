<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Estilos Internos -->
	<link rel="stylesheet" href="/css/app.css">
	<title>Mi sitio</title>
</head>
<body>
<header>
	<?php function activeMenu($url){
		return request()->is($url) ? 'active':'';
	} ?>
	
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Title</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        
        <li class="{{activeMenu('/')}}">
          <a class="nav-link " href="{{route('home')}}">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="{{activeMenu('saludos2*')}}">
          <a class="nav-link " href="{{route('saludos2', 'Alex')}}">Saludos</a>
        </li>
        <li class="{{activeMenu('mensajes/create')}}">
          <a class="nav-link " href="{{route('mensajes.create')}}">Contactar</a>
        </li>
        @if(auth()->check())
        <li class="{{activeMenu('mensajes')}}">
    <a class="nav-link " href="{{route('mensajes.index')}}">Mensajes</a>
      </li>
      <li>
    
    </li>
    @endif
      </ul>


      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if (auth()->guest())
        <li class="{{activeMenu('login')}}">
<a class="nav-link " href="/login">Entrar</a></li>
@else

<li><a class="nav-link " href="/logout">Cerrar sesión de {{auth()->user()->email}}</a></li>
@endif       
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>



</header>
<h1>{{request()->is('/')?'Estas en el home':'No estas en el home'}}</h1>

 <div class="container">

@yield('contenido')
<footer>Copyright {{date('Y')}}</footer>
</div>	

</body>
</html>

