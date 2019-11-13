<!DOCTYPE html>
<html lang="es">
<head>
  <title>Past Simple</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/pushbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body  marginheight="15" class="eg">

<script>
    var res = new Array;
    var no = new Array;
    var tures = new Array;
    var explicares = new Array;
    var calif = 0;

    res[1]= "c";
    res[2]= "b";
    res[3]= "b";
    res[4]= "a";
    res[5]= "a";
    

    explicares[1]= "The correct answer is c";
    explicares[2]= "The correct answer is b";
    explicares[3]= "The correct answer is b";
    explicares[4]= "The correct answer is a";
    explicares[5]= "The correct answer is a";
    


    function Engine(question, answer){
        tures[question] = answer;
    }

    function Score(){
        var answertext="Resultado\n";
        calif = 0;
        for(i=1; i<=5; i++){
	   var cadena ='';	   
	   var pregunta = document.getElementById(cadena+i);
	   //answertext = answertext + "\nQuestion "+ i + ": ";
	   if(res[i] != tures[i]){
             //      answertext = answertext + explicares[i]+ "\n";
	   	   pregunta.style.color = "#F8436E";
	   }else{
		   //answertext = answertext + "Correct !!\n";
		   pregunta.style.color = "#228B22";
		   calif++;
	   }
	 }
	 //answertext = answertext + "\nCalificación: " + calif;
	// alert(answertext);
} 
  </script>
</head>

<body marginheight="15" style="font-size: 14px">
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
<div class="container">    
     <div class="row" align="center">
     	  <h1 style="text-align: center;">Past Simple</h1></br>
	  <div class="numeracion">
		<ul>
			<li type="disc" class="eg2"> We use past simple for actions, events or situations that are finished</li>
		</ul>
	  </div>
     </div>
</div><br>

<div class="container" align="right">    
  <div class="row">
    <div class="balloon">
    
    <div class="eg" align="center">
      <h2>Examples</h2>
      <ul class="conversacion">
	<li>They <b> worked</b> hard</li>
	<li>She <b>didn't ran</b> 5 kilometers yesterday</li>
	<li> <b>Did</b> you <b>played</b> soccer?</li>
	<li>They <b>ate</b> a lot of cake in the party</li>
      </ul>
      </div>
    </div>
  </div>
</div><br>

<div class="container" id="fondo">    
  <div class="row" >
    <div class="balloon2">
      
      <div class="eg" align="center">
	<h2  style="color:#056196">Remember:</h2>
	<p>For regular verbs we add: 'ed' at the final of the verb.</p>
    	<ul class="conversacion">
	  <li>want - wanted</li>
	  <li>jump - jumped</li>
	  <li>watch - watched</li>
	</ul>
	<p>For irregular verbs, is a special case:</p>
	<ul class="conversacion">
	  <li>run - ran</li>
	  <li>drive - drove</li>
	  <li>take - took</li>
	</ul>
      </div>
    </div>
  </div>
</div><br>

<div class="container" align="right">    
  <div class="row">
    <div class="balloon">
      <div class="eg" align="center">
	<h2  style="color:#F8436E">Be careful!!</h2>
	<p >When we use the negative, we don’t change the main verb. We use ‘didn’t’ instead.</p>
    	<ul class="conversacion">
	  <li>I <b>didn't do</b> my homework</li>
	  <li>She <b>didn't ran</b> 5 kilometers yesterday</li>
	  <li>We <b>didn't eat</b> pozole</li>
	  <li>They <b>didn't wait</b> their order</li>
	</ul>
      </div>
    </div>

  </div>
</div>
<div>
  <div class="container" style="padding-bottom:100px">    

    <div class="row">
      <div id="excercise-container">
	<column id="column-one">
	  <h2 >Ejercicios</h2>
	  <div class="eg">
	    <p>Select the correct option</p>

	    <ol>
	      <li value="1" id="1">She ___ the piano yesterday.</li>
	      <p><input type="radio" name="R1" value="a" onclick="Engine(1,this.value)"/>plays </p>
	      <p><input type="radio" name="R1" value="b" onclick="Engine(1,this.value)"/>play </p>
	      <p><input type="radio" name="R1" value="c" onclick="Engine(1,this.value)"/>played </p>

	      <li value="2" id="2">I ___ pizza last week.</li>
	      <p><input type="radio" name="R2" value="a" onclick="Engine(2,this.value)"/>eaten </p>
	      <p><input type="radio" name="R2" value="b" onclick="Engine(2,this.value)"/>ate </p>
	      <p><input type="radio" name="R2" value="c" onclick="Engine(2,this.value)"/>eat </p>

	      <li value="3" id="3">You ___ milk the last saturday.</li>
	      <p><input type="radio" name="R3" value="a" onclick="Engine(3,this.value)"/>drinks </p>
	      <p><input type="radio" name="R3" value="b" onclick="Engine(3,this.value)"/>drank </p>
	      <p><input type="radio" name="R3" value="c" onclick="Engine(3,this.value)"/>clean </p>

	      <li value="4" id="4">He ___ in the last party.</li>
	      <p><input type="radio" name="R4" value="a" onclick="Engine(4,this.value)"/>didn't sing </p>
	      <p><input type="radio" name="R4" value="b" onclick="Engine(4,this.value)"/>sung </p>
	      <p><input type="radio" name="R4" value="c" onclick="Engine(4,this.value)"/>jump</p>

	      <li value="5" id="5">We ___ in the pool the last vacation.</li>
	      <p><input type="radio" name="R5" value="a" onclick="Engine(5,this.value)"/>swam </p>
	      <p><input type="radio" name="R5" value="b" onclick="Engine(5,this.value)"/>swimming </p>
	      <p><input type="radio" name="R5" value="c" onclick="Engine(5,this.value)"/>swim</p>
	    </ol>
	  </column>
	  
	  <column id="column-two">
	    <button onclick="Score()" class="button2">CHECK</button>

	  </column>
      </div>
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
