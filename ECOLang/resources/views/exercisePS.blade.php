<!DOCTYPE html>
<html lang="es">
<head>
  <title>Past Simple Excercises</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/pushbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
    var res = new Array;
    var no = new Array;
    var tures = new Array;
    var explicares = new Array;
    var calif = 0;

    res[1]= "a";
    res[2]= "b";
    res[3]= "b";
    res[4]= "a";
    res[5]= "a";
    res[6]= "b"; 
    res[7]= "a"; 
    res[8]= "b"; 
    res[9]= "c"; 
    res[10]= "b"; 


    explicares[1]= "The correct answer is a";
    explicares[2]= "The correct answer is b";
    explicares[3]= "The correct answer is b";
    explicares[4]= "The correct answer is a";
    explicares[5]= "The correct answer is a";
    explicares[6] = "The correct answer is b";
    explicares[7] = "The correct answer is a";
    explicares[8] = "The correct answer is b";
    explicares[9] = "The correct answer is c";
    explicares[10] = "The correct answer is b";

    function Engine(question, answer){
        tures[question] = answer;
    }

    function Score(){
        var answertext="Resultado\n";
        calif = 0;
        for(i=1; i<=10; i++){
	    var cadena ='';	   
	    var pregunta = document.getElementById(cadena+i);
		    
            //answertext = answertext + "\nPregunta "+ i + ": ";
            if(res[i] != tures[i]){
		answertext = answertext + explicares[i]+ "\n";
		pregunta.style.color = "#F8436E";	
		}else{
		pregunta.style.color = "#228B22";	
                 //answertext = answertext + "bien\n";
                 calif++;
            }
  }
           //answertext = answertext + "\nCalificación: " + calif;
           //alert(answertext);
           //window.location.reload();
    }

    function salir() {
   if (confirm("Exit?")) {
      location.replace("/")
  } else {
    false
  }   
}
  </script>

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
<div class="title">
    <h1>Ejercicios</h1>
</div>

  <div class="container">    
  <div class="row">
    <h2 >Exercises</h2>
    <div class="numeracion">
    <ul>
      <h3>Exercise 1</h3>
      <div class="container">
        <div class="eg" align="left">
          <p>Select the right answer (Simple Past).</p>

<ul>
      <h4>Example</h4>
      <div class="container">
        <div class="eg" align="left">
         <h4>  She <b>took</b> my toy!    </h4>
        </div>     
      </div>
    </ul>


        </div>     
      </div>
    </ul>
    </div>



    <div class="eg">
      <ol>
  <li id="1">She ___ to the Olympics.</li>
 <p><input style="cursor: pointer;" type="radio" name="R1" value="a" onclick="Engine(1,this.value)"/> went</p>
  <p><input style="cursor: pointer;" type="radio" name="R1" value="b" onclick="Engine(1,this.value)"/> want </p>
  <p><input style="cursor: pointer;" type="radio" name="R1" value="c" onclick="Engine(1,this.value)"/> go </p>

  <li id="2">I ___ a fast car.</li>
  <p><input style="cursor: pointer;" type="radio" name="R2" value="a" onclick="Engine(2,this.value)"/> buy </p>
  <p><input style="cursor: pointer;" type="radio" name="R2" value="b" onclick="Engine(2,this.value)"/> drove </p>
  <p><input style="cursor: pointer;" type="radio" name="R2" value="c" onclick="Engine(2,this.value)"/> clean </p>

  <li id="3">They ___ milk the last saturday.</li>
  <p><input style="cursor: pointer;" type="radio" name="R3" value="a" onclick="Engine(3,this.value)"/> drink </p>
  <p><input style="cursor: pointer;" type="radio" name="R3" value="b" onclick="Engine(3,this.value)"/> drank </p>
  <p><input style="cursor: pointer;" type="radio" name="R3" value="c" onclick="Engine(3,this.value)"/> clean </p>

  <li id="4">They ___ in the last party.</li>
  <p><input style="cursor: pointer;" type="radio" name="R4" value="a" onclick="Engine(4,this.value)"/> danced </p>
  <p><input style="cursor: pointer;" type="radio" name="R4" value="b" onclick="Engine(4,this.value)"/> eat</p>
  <p><input style="cursor: pointer;" type="radio" name="R4" value="c" onclick="Engine(4,this.value)"/> jump</p>

  <li id="5">We ___ for an hour.</li>
  <p><input style="cursor: pointer;" type="radio" name="R5" value="a" onclick="Engine(5,this.value)"/> waited </p>
  <p><input style="cursor: pointer;" type="radio" name="R5" value="b" onclick="Engine(5,this.value)"/> run </p>
  <p><input style="cursor: pointer;" type="radio" name="R5" value="c" onclick="Engine(5,this.value)"/> go</p>
      </ol>
      <br>

<div class="numeracion">
    <ul>
      <h2>Exercise 2</h2>
      <div class="container">
        <div class="eg" align="left">
          Select the right conjugation (Simple Past). 

          <ul>
      <h4>Example</h4>
      <div class="container">
        <div class="eg" align="left">

<div id="outer">
    <div class="inner"> <input style="cursor: pointer;" type="radio" name="R5" value="a" onClick="return false;"/> drink </button></div>
    <div class="inner"> <input style="cursor: pointer;" type="radio" name="R5" value="a" onClick="return false;"/> drunk </button></div>
    <div class="inner"> <input style="cursor: pointer;" type="radio" name="R5" value="a" onClick="border-color:Green;"/> drank </button></div>
</div>

        </div>     
      </div>
    </ul>

        </div>     
      </div>
    </ul>
</div>

<ol>
  <li id="6">
    <p><input style="cursor: pointer;" type="radio" name="R1" value="a" onclick="Engine(6,this.value)"/> begin</p>
    <p><input style="cursor: pointer;" type="radio" name="R1" value="b" onclick="Engine(6,this.value)"/> began </p>
    <p><input style="cursor: pointer;" type="radio" name="R1" value="c" onclick="Engine(6,this.value)"/> begun </p>
  </li>
  <li id="7">
    <p><input style="cursor: pointer;" type="radio" name="R2" value="a" onclick="Engine(7,this.value)"/> broke </p>
    <p><input style="cursor: pointer;" type="radio" name="R2" value="b" onclick="Engine(7,this.value)"/> break </p>
    <p><input style="cursor: pointer;" type="radio" name="R2" value="c" onclick="Engine(7,this.value)"/> broken </p>
  </li>
  <li id="8">
    <p><input style="cursor: pointer;" type="radio" name="R3" value="a" onclick="Engine(8,this.value)"/> choose </p>
    <p><input style="cursor: pointer;" type="radio" name="R3" value="b" onclick="Engine(8,this.value)"/> chose </p>
    <p><input style="cursor: pointer;" type="radio" name="R3" value="c" onclick="Engine(8,this.value)"/> chosen </p>
  </li>
  <li id="9">
    <p><input style="cursor: pointer;" type="radio" name="R4" value="a" onclick="Engine(9,this.value)"/> eaten </p>
    <p><input style="cursor: pointer;" type="radio" name="R4" value="b" onclick="Engine(9,this.value)"/> eat</p>
    <p><input style="cursor: pointer;" type="radio" name="R4" value="c" onclick="Engine(9,this.value)"/> ate</p>
  </li>
  <li id="10">
    <p><input style="cursor: pointer;" type="radio" name="R5" value="a" onclick="Engine(10,this.value)"/> fly </p>
    <p><input style="cursor: pointer;" type="radio" name="R5" value="b" onclick="Engine(10,this.value)"/> flew </p>
    <p><input style="cursor: pointer;" type="radio" name="R5" value="c" onclick="Engine(10,this.value)"/> flown</p>
  </li>
</ol>
      <br>


      
      <br>
      <div align="center">
      <button onclick="Score()" class="button2" >Check</button>
      </div>
      <br>
    </div>
  </div>
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
</body>
</html>
