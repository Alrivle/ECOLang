<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/pushbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="indexover">
  <div class="conetenedor">

    <nav class="navbar navbar" id="barra">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index">
          	<img src="{{asset('img/logo.jpeg')}}" alt="logo" id="navlogo"/>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><button class="btn-menu" data-pushbar-target="pushbar-menu"><i class="fas fa-bars"></i></button></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="login"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    	<div class="container" id="indexcontenedor"> 
    		<div class="row">
    			<div class="col-sm-12">  
    			    <div class="col-sm-6" id="get" >
    			        	<ul class="ejercicios" >
    			        		<li><a href="videos" class="letras">Do you know get?</a></li>
    			        		<li><a href="#" class="letras">Applications of get</a></li>
    			        		<li><a href="#" class="letras">Vocabulary</a></li>
    			        	</ul>
    			    </div>
    			    <div class="col-sm-6" id="past">
    			        	<ul class="ejercicios">
    			        		<li> <a href="pastS" class="letras"> Past simple </a> </li>
    			        		<li><a href="exercisePS" class="letras">Exercises</a></li>
    			        		<li><a href="lecturaPS" class="letras">Reading</a></li>
    			        	</ul>
    			    </div>
    		    </div>
    	    </div> 
    	  </div>	


        <div data-pushbar-id="pushbar-menu" class="pushbar from_left pushbar-menu">
          <div class="btn-cerrar">
            <button data-pushbar-close><i class="fas fa-times"> </i></button>
          </div>
          <nav>
            <ul id="menudesplasable">
             <li><a href="/">Temas</a></li> 
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ejecicios
              <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Lecturas</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Estructuras</a></li>
                  </ul>
              </li>
              <li><a href="#">Juegos</a></li>
              <li><a href="#">Secciones extras</a></li>
            </ul>
          </li>
          </ul>
        </nav>
      </div>
</div>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="{{asset('js/pushbar.js')}}"></script>
  <script>
    var pushbar = new Pushbar({
      blur: false,
      overlay: false
    });
  </script>
</body>
</html>
