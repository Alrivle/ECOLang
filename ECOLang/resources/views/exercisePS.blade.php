<!DOCTYPE html>
<html lang="es">
<head>
  <title>Past Simple Excercises</title>
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

.numeracion{
   font-size:20px;
   background: #DCDCDC;
	
}

.eg{
   font-size:20px;	
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
          <li><a href="Ejercicios.html">Temas</a></li>
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
     	  <h1 style="text-align: center;">Past Simple Excercises</h1></br>

     </div>
</div><br>

    <div class="numeracion">
    <ul>
      <h2>Example</h2>
      <div class="container">
        <div class="eg" align="left">
          Did you <b>take</b> my toy?   
        </div>     
      </div>
    </ul>
    </div>

<div class="container">    
  <div class="row">
    <h2  style="color:#056196">Remember:</h2>
    <div class="eg">
    	 <p>For regular verbs we add: 'ed' at the final of the verb.</p>
    	 <ul>
		<li>want - wanted</li>
		<li>jump - jumped</li>
		<li>watch - watched</li>
	 </ul>
	 <p>For irregular verbs, is a special case:</p>
	 <ul>
		<li>run - ran</li>
		<li>drive - drove</li>
		<li>take - took</li>
	 </ul>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <h2  style="color:#F8436E">Be careful!!</h2>
    <div class="eg">
    <p>When we use the negative, we don’t change the main verb. We use ‘didn’t’ instead.</p>
    	 <ul>
		<li>I <b>didn't do</b> my homework</li>
		<li>She <b>didn't ran</b> 5 kilometers yesterday</li>
		<li>We <b>didn't eat</b> pozole</li>
		<li>They <b>didn't wait</b> their order</li>
	 </ul>
    </div>
  </div>
</div><br>


</body>
</html>
