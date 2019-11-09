<!DOCTYPE html>
<html lang="es">
<head>
  <title>Past Simple</title>
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
.numeracion{
   font-size:20px;
   background: #DCDCDC;
	
}

.eg{
   font-size:15px;	
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

.button2 {
  background-color: white;
  color: black;
  border-radius: 5px;
  border: 2px solid #337ab7;
  transition: all 0.3s ease 0s;
}

button:hover{
    letter-spacing: 3px;
    }

    
body{
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cg fill='%23b2eca9' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M11 0l5 20H6l5-20zm42 31a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM0 72h40v4H0v-4zm0-8h31v4H0v-4zm20-16h20v4H20v-4zM0 56h40v4H0v-4zm63-25a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM53 41a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-30 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-28-8a5 5 0 0 0-10 0h10zm10 0a5 5 0 0 1-10 0h10zM56 5a5 5 0 0 0-10 0h10zm10 0a5 5 0 0 1-10 0h10zm-3 46a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM21 0l5 20H16l5-20zm43 64v-4h-4v4h-4v4h4v4h4v-4h4v-4h-4zM36 13h4v4h-4v-4zm4 4h4v4h-4v-4zm-4 4h4v4h-4v-4zm8-8h4v4h-4v-4z'/%3E%3C/g%3E%3C/svg%3E");
}
    
.balloon{
    border-radius: 80%;
    background-color:#7FFFD4;
    color: black;
    padding: 10px;
    width: 620px;
    border:10px;
    position:relative;
    box-shadow: 1px 12px 33px rgba(0, 0, 0, 0.5);
    }

    .balloon:before {
     border: 25px solid #7FFFD4;
    content: '';
    border-left-color: transparent;
    border-bottom-color: transparent;
    border-right-color: transparent;
    position: absolute;
    bottom: -44px;
    right: 80px;
    transform: rotate(-10deg);
    }

.balloon2{
    border-radius: 80%;
    background-color:#7FFFD4;
    color: black;
    padding: 10px;
    width: 620px;
    border:10px;
    position:relative;
    box-shadow: 1px 12px 33px rgba(0, 0, 0, 0.5);
    }

    .balloon2:before {
     border: 25px solid #7FFFD4;
    content: '';
    border-left-color: transparent;
    border-bottom-color: transparent;
    border-right-color: transparent;
    position: absolute;
    bottom: -44px;
    left: 80px;
    transform: rotate(15deg);
    height:30px;
    }
  </style>

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
	    answertext = answertext + "\nQuestion "+ i + ": ";
	    if(res[i] != tures[i]){
                  answertext = answertext + explicares[i]+ "\n";
	    }else{
		      answertext = answertext + "Correct !!\n";
		      calif++;
	    }
	}
		       answertext = answertext + "\nScore: " + calif;
		       alert(answertext);
        
	
   
    } 
  </script>
<nav class="navbar navbar" style="border-bottom-color: black;
    border-bottom-width: thin;
    border-bottom-style: solid;">
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
     	  <h1 style="text-align: center;">Past Simple</h1></br>
	  <div class="numeracion">
		<ul>
			<li type="disc" > Hay!!!,We use past simple for actions, events or situations that are finished</li>
		</ul>
	  </div>
     </div>
</div><br>

<div class="container" align="right">    
  <div class="row">
    <div class="balloon">
    
    <div class="eg" align="center">
      <h2>Examples</h2>
      <ul>
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
  </div>
</div><br>

<div class="container" align="right">    
  <div class="row">
    <div class="balloon">
      <div class="eg" align="center">
	<h2  style="color:#F8436E">Be careful!!</h2>
	<p>When we use the negative, we don’t change the main verb. We use ‘didn’t’ instead.</p>
    	<ul>
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
    <h2 >Ejercicios</h2>
    <div class="eg">
      <p>Select the correct option</p>

      <ol>
	<li value="1">She ___ the piano yesterday.</li>
	<p><input type="radio" name="R1" value="a" onclick="Engine(1,this.value)"/>plays </p>
	<p><input type="radio" name="R1" value="b" onclick="Engine(1,this.value)"/>play </p>
	<p><input type="radio" name="R1" value="c" onclick="Engine(1,this.value)"/>played </p>

	<li value="2">I ___ pizza last week.</li>
	<p><input type="radio" name="R2" value="a" onclick="Engine(2,this.value)"/>eaten </p>
	<p><input type="radio" name="R2" value="b" onclick="Engine(2,this.value)"/>ate </p>
	<p><input type="radio" name="R2" value="c" onclick="Engine(2,this.value)"/>eat </p>

	<li value="3">You ___ milk the last saturday.</li>
	<p><input type="radio" name="R3" value="c" onclick="Engine(3,this.value)"/>drinks </p>
	<p><input type="radio" name="R3" value="c" onclick="Engine(3,this.value)"/>drank </p>
	<p><input type="radio" name="R3" value="c" onclick="Engine(3,this.value)"/>clean </p>

	<li value="4">He ___ in the last party.</li>
	<p><input type="radio" name="R4" value="a" onclick="Engine(4,this.value)"/>didn't sing </p>
	<p><input type="radio" name="R4" value="b" onclick="Engine(4,this.value)"/>sung </p>
	<p><input type="radio" name="R4" value="c" onclick="Engine(4,this.value)"/>jump</p>

	<li value="5">We ___ in the pool the last vacation.</li>
	<p><input type="radio" name="R5" value="a" onclick="Engine(5,this.value)"/>swam </p>
	<p><input type="radio" name="R5" value="b" onclick="Engine(5,this.value)"/>swimming </p>
	<p><input type="radio" name="R5" value="c" onclick="Engine(5,this.value)"/>swim</p>
      </ol>
      <div align="center">
	<button onclick="Score()" class="button2">CHECK</button>
      </div>
  </div>
</div>
  

</body>
</html>
