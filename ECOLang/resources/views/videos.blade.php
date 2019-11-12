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

<div class="container">    
  <div class="row" align="center">
    <h1 style="text-align: center; font-size:65px;">Do you know get?</h1></br>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/sN2BZg7XLNo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<div class="container" style="background-color:rgb(212, 212, 213); margin-top:50px; margin-bottom:50px; width:80%;">
  <div class="row">
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
              ondrop='onDrop(event);' class="respuestas" id="cajaresp1"> Respuesta1
            </span>
            <br><br> 
          </div>
          <div class="parent">
            <span draggable='true' ondragstart='onDragStart(event);' ondragover='onDragOver(event);' ondrop='onDrop(event);' class="respuestas" id="cajaresp2"> Respuesta2
            </span>
            <br><br> 
          </div>
        </div>
    </div>    
    </div>      
  </div>
</div>
</body>
</html>
