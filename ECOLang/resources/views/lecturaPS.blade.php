<!DOCTYPE html>
<html lang="es">
<head>
  <title>Reading</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
#exercise-container{
    display: flex;
    margin-left:10%;
    margin-right:10%;
    margin-top: 40px;
    background-color: #E2ECFF;
    box-shadow: 10px 15px 10px #888888;
}

.column{
    display: flex;
    flex-direction: column;
}

#column-one{
    margin-left: 10%;
    margin-right: 15%;
}

#column-two{
    margin-left: 15%;
    margin-right: 15%;
}

.column-element{
    margin-top: 4vh;
    margin-bottom: 4vh;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
}
.eg{
   font-size:20px;	
}

.lectura{
   font-size:20px;
   font-family:'Report';
   src: url(/font/);
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
      <a class="navbar-brand" href="#">
        <img src="logo.jpeg" alt="logo" style="width:6vh; margin: -6px;"/>
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
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
     <div class="row" align="center">
     	  <h1 style="text-align: center;">Past Simple Excercises</h1></br>
	  <div class="numeracion">
	  </div>
     </div>
</div><br>

<div class="container">    
  <div class="row">
    <h2>Reading</h2>
    <div class="lectura">
    	 <h3 align="center">The Pizza</h3>
    	 <p class="lectura"  >
    	 "	Daddy, let's order a pizza," Billy said. "That sounds like a good idea," said his dad.
    	 	 They looked at a menu they had at home. "What kind do you want?" his dad asked. Billy wanted a large pizza. He wanted a pizza with four toppings. He wanted cheese, pepperoni, ham, and pineapple. His dad said that sounded good.
    		 He called the pizza place. "They don't have any pineapple," dad told Billy. "What do you want instead?" Billy wanted sausage instead. His dad ordered sausage instead of pineapple. About 	    	30 minutes later, there was a knock on the door. It was the pizza man. "Here's your pizza," he told Billy's dad. "That'll be $16." Dad paid the pizza man. He also gave him a tip. Dad took the pizza to the living room. 
    		 A baseball game was on TV. Billy and his dad started to eat the pizza in the living room. "I hope the Yankees lose," Billy told his dad. "I hope the Yankees lose, too," his dad said. 
	 </p>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <h2 >Exercise</h2>
    <div class="eg">
    	 <p>Match the two parts of these sentences.</p>

	 <div id="exercise-container">
	   <column
                v-bind:things='questions'
                @clicked='clickedEvent'
                id='column-one'
            ></column>
            <column 
                v-bind:things='answers'
                @clicked='clickedEvent'
                id='column-two'
            ></column>
	 </div>
    </div>
  </div>
</div><br>

<script>
  
Vue.component('column-element',{
    props: ['element'],
    template: `
    <div
        class='column-element'
        v-html='element.content'
        v-bind:id="\`el-\${element.key}\`"
        @click='$emit("clicked", [$event.target,element.key])'
    ></div>` // Ni moverle al v-bidn:id sin entender por que se esta escapando cada parte
})

Vue.component('column', {
    props: ['things'],
    template: `
    <div class='column'>
        <column-element
            v-for='thing in things'
            v-bind:key='thing.key'
            v-bind:element='thing'
            @clicked='$emit("clicked", arguments[0])'
        ></column-element>
    </div>
    `
})

let app = new Vue({
    el: '#exercise-container',
    data:{
    questions: [{key:1,content:'Billy was hungry and...'},{key:2,content:'His dad ordered...'},{key:3,content:'The pizza cost...'},{key:4,content:'They took the pizza...'},
    {key:5,content:'They watched...'},{key:6,content:'They wanted the Yankees...'}],
    answers: [{key:7,content:'$16 and dad also gave the man a tip.'},{key:8,content:'wanted to eat pizza.'},{key:9,content:'to lose the game.'},{key:10,content:'pizza with four toppings.'},
    {key:11,content:'to the living room.'},{key:10,content:'a baseball game on TV.'}],
        clicked: 0,
    },
    methods:{
        clickedEvent: clickedEvent
    }
})

var match = [1,7,2,6,3,5,4,8]
var user_answer = []
/**
 * Colorea el elemento seleccionado por el usuario
 * Verifica que los colores en las columnas
 *  de las preguntas y respuestas solo haya un color
 * @param {Object} e - elemento seleccionado
 */
function clickedEvent(e){
    key = parseInt(e[1],10);
    user_answer.push(key);
    switch(this.clicked){
        case 0:
            if(key < 5){ //se verifica que no se haya seleccionado un elemento de la columna incorrecta
                e[0].style = "background-color: #B0CEF5"
                this.clicked += 1; //pasamos al siguiente elemento
            }
        break;
        case 1:
            if(key > 4){
                e[0].style = "background-color: #B0CEF5"
                this.clicked += 1;
            }
        break;
        case 2:
            if(key < 5){
                e[0].style = "background-color: #9BFABD"
                this.clicked += 1;
            }
        break;
        case 3:
            if(key > 4){
                e[0].style = "background-color: #9BFABD"
                this.clicked += 1;
            }
        break;
        case 4:
            if(key < 5){
                e[0].style = "background-color: #F9FBA2"
                this.clicked += 1;
            }
        break;
        case 5:
            if(key > 4){
                e[0].style = "background-color: #F9FBA2"
                this.clicked += 1;
            }
        break;
        case 6:
            if(key < 5){
                e[0].style = "background-color: #CE472A"
                this.clicked += 1;
            }
        break;
        case 7:
            if(key > 4){
                e[0].style = "background-color: #CE472A"
            }
        break;
    }
    
}
</script>

</body>
</html>
