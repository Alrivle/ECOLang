<!DOCTYPE html>
<html lang="es">
<head>
  <title>Reading</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/pushbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
  <style>
nav{
  height: 12vh;
  border-bottom: 3px solid rgb(189, 185, 190);
}
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    @font-face {
  font-family: "Report";
  src: url("../font/Report.otf");
}

.logout:hover{
  height: 4.3vh;
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


.logo{
  position: absolute;
  left: 20px;
  top: 0px;
  height:12.5vh;  
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
.numeracion{
   font-size:20px;
   background: #DCDCDC;
	
}

.column{
    display: flex;
    flex-direction: column;
}

#column-one{
    margin:auto;
}

#column-two{
    margin:auto;
}

.column-element{
    margin-top: 4vh;
    margin-bottom: 4vh;
    text-align: center;
    font-size: 27px;
    cursor: pointer;
    border-radius: 8px;
}
.eg{
   font-size:23px;	
}

@font-face{
   font-family:'Report';
   src: url('/font/Report.otf'); 
}
.lectura{
   font-size:25px;
}

button:hover{
    letter-spacing: 3px;
}

  </style>


</head>
<body>

<nav>
    <ul class="nav-links">
        <a href="temas"><img class="logo" src="{{asset('img/logo.png')}}" alt="Logo"></a>
        <li><a href=temas>Temas</a></li>
        <li><a href="juegos">Juegos</a></li>
        <li><a href="index"><img class="logout" src="{{asset('img/logout.png')}}" alt="Logo"></a></li>
    </ul>
</nav>

<div class="container">    
     <div class="row" align="center">
     	  <h1 style="text-align: center; font-size:65px;">Reading</h1></br>
	  <div class="numeracion">
	  </div>
     </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="lectura">
    	 <h1 style="margin-top:-30px; font-size:43px;" align="center">Bob and Alice</h3>
    	 <div class="lectura">
	   <p>
       <b>Bob:</b>     So, Alice, what did you do last night?</p>
       <p><b>Alice:</b> Well, I was at home, <b><i>getting</i></b> ready to go to the movies. I was <b><i>getting</i></b>  my shoes on when I got a feeling that something strange was going to happen.
        </p>
        <p><b>Bob:</b> I've <b><i>gotten</i></b>  those feelings, too.</p>
        <p><b>Alice:</b>  Then, I left the house, and <b><i>got</i></b>  a cab, and <b><i>got</i></b>  to the movies as fast as I could.</p>

<p><b>Bob:</b>Did you <b><i>get</i></b>  there on time?</p>

<p><b>Alice:</b>  Yes! But as soon as I <b><i>got</i></b>  into the theater, I <b><i>got</i></b>  a phone call from someone whose voice I didn’t recognize. That’s when things started to <b><i>get</i></b>  weird…</p>
	 </div>
	 <div align="center">
	   <img class="imagen-lectura" src="{{asset('img/call.jpg')}}">
	 </div>
    </div>
  </div>
  <br>
  <br>
  <br>
</div>
</body>
</html>
