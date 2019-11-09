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
  height: 4vh;
}

.logo{
  position: absolute;
  left: 20px;
  top: 0px;
  height:12.5vh;  
}
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .dropdown-submenu {
    position: relative;
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
        <li><a href="">Juegos</a></li>
        <li><a href="index"><img class="logout" src="{{asset('img/logout.png')}}" alt="Logo"></a></li>
    </ul>
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
        respuesta 1
      </span>

      <span id='draggableSpan'
        draggable='true'
        ondragstart='onDragStart(event);'>
        respuesta 2
      </span>

      <span id='draggableSpan'
        draggable='true'
        ondragstart='onDragStart(event);'>
        respuesta 3
      </span>

      <span id='draggableSpan'
        draggable='true'
        ondragstart='onDragStart(event);'>
        respuesta 4
      </span>

    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <h2 style="text-align: center;">Preguntas</h2>
    <h4 style="text-align: left;"> Instrucciones: </h4>
    <p>Desliza las respuestas de la caja de respuestas a la pregunta correspondiente</p><br>
    <div class="col-sm-8"> 
      1.Que es get? <br><br>
      2.Porque se usa get? <br><br>
      3.Donde se usa get? <br><br>
      4.I ____ to get around by bicycle, now I get around mostly on foot. <br><br>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="parent">
            <span
              ondragover='onDragOver(event);'
              ondrop='onDrop(event);' id="respuestas"> Respuesta 1:
            </span>
            <br><br> 
        </div>
      </div>
      <div class="row">
          <div class="parent">
              <span
                ondragover='onDragOver(event);'
                ondrop='onDrop(event);' id="respuestas"> Respuesta 2:
              </span>
            <br><br> 
          </div>
        </div>
        <div class="row">
          <div class="parent">
              <span
                ondragover='onDragOver(event);'
                ondrop='onDrop(event);' id="respuestas"> Respuesta 3:
              </span>
              <br><br> 
          </div>
        </div>
        <div class="row">
          <div class="parent">
              <span
                ondragover='onDragOver(event);'
                ondrop='onDrop(event);' id="respuestas"> Respuesta 4: 
              </span>
              <br><br>
          </div>
        </div>
    </div>
  </div>
</div>

</body>
</html>
