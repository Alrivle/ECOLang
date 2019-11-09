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
    nav{
  height: 12vh;
  border-bottom: 3px solid rgb(189, 185, 190);
}
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
  font-size: 30px;
    color: white;
    margin-left: 30px;
    border: 2px solid rgb(51, 122, 183);
    background-color: rgb(51, 122, 183);
    padding: 9px 25px;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
    margin-top: 20px;
}

button:hover{
    letter-spacing: 3px;
    }

li{
  list-style-type:none;
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
		       answertext = answertext + "\nCalificación: " + calif;
		       alert(answertext);
        
	
   
    } 
  </script>
</head>

<body marginheight="15">

<nav>
    <ul class="nav-links">
        <a href="index"><img class="logo" src="{{asset('img/logo.png')}}" alt="Logo"></a>
        <li><a href=index>Temas</a></li>
        <li><a href="">Ejercicios</a></li>
        <li><a href="">Juegos</a></li>
        <li><a href="login"><img class="logout" src="{{asset('img/logout.png')}}" alt="Logo"></a></li>
    </ul>
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
