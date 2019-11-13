<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<<<<<<< HEAD
  <link rel="stylesheet" href="{{asset('css/pushbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <script type="text/javascript" src="{{asset('js/prueba.js')}}"></script>
</head>
<body>

 <nav class="navbar navbar" id="barra">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="temas">
            <img src="{{asset('img/logo.png')}}" alt="logo" id="navlogo"/>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><button class="btn-menu" data-pushbar-target="pushbar-menu"><i class="fas fa-bars"></i></button></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index"><span class="glyphicon glyphicon-log-out" id="cerrars"></span> Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
<div class="background">
=======
  <script type="text/javascript" src="prueba.js"></script>
  <script>
    function onDragStart(event) {
  event
    .dataTransfer
    .setData('text/plain', event.target.id);

  event
    .currentTarget
    .style
    .backgroundColor = 'yellow';
}
function onDragOver(event) {
  event.preventDefault();
}
function onDrop(event) {
  const id = event
    .dataTransfer
    .getData('text');

  const draggableElement = document.getElementById(id);
  const dropzone = event.target;
  
  dropzone.appendChild(draggableElement);

  event
    .dataTransfer
    .clearData();
}
  </script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    nav{
  height: 12vh;
  border-bottom: 3px solid rgb(189, 185, 190);
}
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    @font-face {
  font-family: "Report";
  src: url("../font/Report.otf");
}

.nav-links{
  display: flex;
  list-style: none;
  width: 30%;
  height: 100%;
  justify-content: space-around;
  align-items: center;
  margin-left: auto;
}

.eg{
   font-size:27px;
   text-align:center;
}

.nav-links li a{
  color: black;
  font-size: 25px;
  text-decoration: none;
}

.nav-links li a:hover{
  color: rgb(99, 183, 221);
}

.logout{
  height: 4vh;
}

.logout:hover{
  height: 4.3vh;
}

.logo{
  position: absolute;
  left: 20px;
  top: 0px;
  height:12.5vh;  
}

.title{
  text-align: center;
  font-size: 35px;
  height: 80px;
}

#draggableSpan{
  margin-left: 10vw;
  border-style: solid;
  border-radius: 5px;
  background-color: orange;
}
#respuestas{
  border-style: solid;
  border-radius: 5px;
  background-color: lightblue;
}
#respuestasc{
  border-style: solid;
  border-radius: 10px;
}
body{
  min-height: 100vh;
  align-items: center;
  font-family: "Report";
  background-image: url("../img/pencil.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
  </style>
</head>
<body>

<nav>
    <ul class="nav-links">
        <a href="temas"><img class="logo" src="{{asset('img/logo.png')}}" alt="Logo"></a>
        <li><a href="temas">Temas</a></li>
        <li><a href="juegos">Juegos</a></li>
        <li><a href="index"><img class="logout" src="{{asset('img/logout.png')}}" alt="Logo"></a></li>
    </ul>
</nav>

>>>>>>> origin/index
<div class="container">    
  <div class="row" align="center">
    <h1 style="text-align: center; font-size:65px;">Do you know get?</h1></br>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/sN2BZg7XLNo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<div class="container" style="background-color:rgb(212, 212, 213); margin-top:50px; margin-bottom:50px; width:80%;">
  <div class="row">
<<<<<<< HEAD
    <h2 style="text-align: center;">Preguntas</h2>
    <h4 style="text-align: left;"> Instrucciones: </h4>
    <p style="font-size: 20px">Desliza las respuestas a la pregunta correspondiente 
    <p style="text-align: right; margin-top: -5vh; margin-right: 8vw; font-size: 20px;">Respuestas:</p></p>
    <div class="col-sm-8">
        <p style="font-size: 20px">1.¿Qué significa get down?</p>
        <p style="font-size: 20px">2.¿En qué tiempo esta got??</p>
=======
  <div class="eg">
    <p>Drag and drop the answer to it's question</p>
  </div>
    <h1 style="text-align:left; margin-left: 10vw; font-size:25;">Questions</h1>
    <h1 style="text-align: right; margin-top: -7vh; margin-right: 13vw">Answers</h1>
    <div class="col-sm-8">
      <ol style="text-align:left; margin-left: 10vw; margin-bottom:5 0px; font-size:23px;">
        <li>What is get?</li>
        <li>Why do we use get?</li>
      </ol>
>>>>>>> origin/index
    </div>
    <div class="col-sm-4">
       <div class="col-sm-2" style="width: 50%;">
          <div class="parent">
            <span draggable='true' ondragstart='onDragStart(event);'
              ondragover='onDragOver(event);'
              ondrop='onDrop(event);' class="respuestas" id="respuesta1">
            </span>
            <br><br> 
        </div>
        <div class="parent">
            <span draggable='true' ondragstart='onDragStart(event);'
              ondragover='onDragOver(event);'
              ondrop='onDrop(event);' class="respuestas" id="respuesta2">
            </span>
            <br><br> 
        </div>
      </div>
        <div class="col-sm-2" style="width: 50%; font-size:23px;">  
          <div class="parent">
            <span draggable='true' ondragstart='onDragStart(event);'
              ondragover='onDragOver(event);'
              ondrop='onDrop(event);' class="respuestas" id="cajaresp1"> Bajar
            </span>
            <br><br> 
          </div>
          <div class="parent">
            <span draggable='true' ondragstart='onDragStart(event);' ondragover='onDragOver(event);' ondrop='onDrop(event);' class="respuestas" id="cajaresp2"> Pasado
            </span>
            <br><br> 
          </div>
        </div>
    </div>    
    </div>      
  </div>
</div>
<<<<<<< HEAD
</div>

<div data-pushbar-id="pushbar-menu" class="pushbar from_left pushbar-menu">
          <div class="btn-cerrar">
            <button data-pushbar-close><i class="fas fa-times"> </i></button>
          </div>
          <nav>
            <ul id="menudesplasable">
             <li><a href="temas">Temas</a></li> 
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ejecicios
              <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="lecturaPS">Lecturas</a></li>
                    <li><a href="videos">Videos</a></li>
                    <li><a href="pastS">Estructuras</a></li>
                  </ul>
              </li>
              <li><a href="#">Juegos</a></li>
              <li><a href="#">Secciones extras</a></li>
            </ul>
          </li>
          </ul>
        </nav>
      </div>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="{{asset('js/pushbar.js')}}"></script>
  <script>
    var pushbar = new Pushbar({
      blur: false,
      overlay: false
    });
  </script>
=======
>>>>>>> origin/index
</body>
</html>
