<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="prueba.js"></script>
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
      <a class="navbar-brand" href="index">
        <img src="{{asset('img/logo.jpeg')}}" alt="logo" style="width:6vh; margin: -6px;"/>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Secciones
        <span class="caret"></span></a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
          <li><a href="/">Temas</a></li>
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
        <li><a href="login"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row" align="center">
    <h2 style="text-align: center;">Video de:</h2></br>
    <iframe width="560" height="315" align="middle" src="https://www.youtube.com/embed/ICQHcTMk1Lo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <h2>Respuestas</h2>
    <div class='parent'>
      <span id='draggableSpan'
        draggable='true'
        ondragstart='onDragStart(event);'>
        draggable
      </span>


    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <h2 style="text-align: center;">Preguntas</h2>
    <div class="col-sm-8"> 
      1.Que es get? <br><br>
      2.Porque se usa get? <br><br>
      3.Donde se usa get? <br><br>
      4.I ____ to get around by bicycle, now I get around mostly on foot. <br><br>
    </div>
    <div class="col-sm-4">
      <div class="parent">
          <span
          ondragover='onDragOver(event);'
          ondrop='onDrop(event);'> dropzone </span>
      </div>
    </div>
  </div>
</div>

</body>
</html>
