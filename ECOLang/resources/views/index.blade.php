<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      border-radius: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
  </style>
</head>
<body>

<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      	<img src="img/logo.jpeg" alt="logo" style="width:6vh; margin: -6px;"/>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Secciones
        <span class="caret"></span></a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
          <li><a href="index.blade.php">Temas</a></li>
          <li class="dropdown-submenu">
        <a tabindex="-1" href="#">Ejercicios</a>
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="main" style="height: 100vh; overflow-y: auto;">
	<div class="container">
	  <h2 style="text-align: center;">Ejercicios y temas</h2></br>    
	  <div class="row">
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 1</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li><a href="videos">Do you know get?</a></li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 2</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 3</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
		</div>
	</div> <br><br>

	<div class="container">
	  <div class="row">
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 1</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 2</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 3</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
		</div>
	</div><br><br>
	
	<div class="container">
	  <div class="row">
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 1</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 2</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="panel panel-primary">
	        <div class="panel-heading">Tema 3</div>
	        <div class="panel-body"> 
	        	<ul class="ejercicios">
	        		<li>Do you know get?</li>
	        		<li>Applications of get</li>
	        		<li>Vocabulary</li>
	        	</ul>
	        </div>
	      </div>
	    </div>
	</div>
	</div><br><br>
<footer class="container-fluid text-center">
  <p>Buscas algún otro tema?</p>  
  <form class="form-inline">
    <input class="form-control" size="50" placeholder="Busca el tema">
    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
  </form>
</footer>
</div>


</body>
</html>
