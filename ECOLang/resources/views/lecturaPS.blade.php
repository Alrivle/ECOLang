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

#exercise-container{
    display: flex;
    margin-left:10%;
    margin-right:10%;
    margin-top: 40px;
    margin-bottom: 40px;
    background-color: #E2ECFF;
    
}

.column{
    display: flex;
    flex-direction: column;
}

#column-one{
    margin-left: 10%;
    margin-right: 10%;
}

#column-two{
    margin-left: 10%;
    margin-right: 10%;
}

.column-element{
    margin-top: 4vh;
    margin-bottom: 4vh;
    text-align: center;
    font-size: 25px;
    cursor: pointer;
    border-radius: 8px;
}
.eg{
   font-size:20px;	
}

@font-face{
   font-family:'Report';
   src: url('/font/Report.otf'); 
}
.lectura{
   font-size:20px;
   font:Report;
}

button:hover{
    letter-spacing: 3px;
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
    background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cg fill='%23b2eca9' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M11 0l5 20H6l5-20zm42 31a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM0 72h40v4H0v-4zm0-8h31v4H0v-4zm20-16h20v4H20v-4zM0 56h40v4H0v-4zm63-25a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM53 41a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-30 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-28-8a5 5 0 0 0-10 0h10zm10 0a5 5 0 0 1-10 0h10zM56 5a5 5 0 0 0-10 0h10zm10 0a5 5 0 0 1-10 0h10zm-3 46a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm10 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM21 0l5 20H16l5-20zm43 64v-4h-4v4h-4v4h4v4h4v-4h4v-4h-4zM36 13h4v4h-4v-4zm4 4h4v4h-4v-4zm-4 4h4v4h-4v-4zm8-8h4v4h-4v-4z'/%3E%3C/g%3E%3C/svg%3E");
    }
  </style>


</head>
<body>

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
    	 <div class="lectura">
	   <p   >
    	     "	Daddy, let's order a pizza," Billy said. "That sounds like a good idea," said his dad.
    	     They looked at a menu they had at home. "What kind do you want?" his dad asked. Billy wanted a large pizza. He wanted a pizza with four toppings. He wanted cheese, pepperoni, ham, and pineapple. His dad said that sounded good.
    	     He called the pizza place. "They don't have any pineapple," dad told Billy. "What do you want instead?" Billy wanted sausage instead. His dad ordered sausage instead of pineapple. About 	    	30 minutes later, there was a knock on the door. It was the pizza man. "Here's your pizza," he told Billy's dad. "That'll be $16." Dad paid the pizza man. He also gave him a tip. Dad took the pizza to the living room. 
    	     A baseball game was on TV. Billy and his dad started to eat the pizza in the living room. "I hope the Yankees lose," Billy told his dad. "I hope the Yankees lose, too," his dad said. 
	   </p>
	 </div>
	 <div class="imagen">
	   <img src="pizza2.jpg"/>
	 </div>
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
    <div align="center">
      <button onclick="Score()" class="button2" >Check</button>
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
    {key:11,content:'to the living room.'},{key:12,content:'a baseball game on TV.'}],
        clicked: 0,
    },
    methods:{
        clickedEvent: clickedEvent
    }
})

var match = [[1,8],[2,10],[3,7],[4,11],[5,12],[6,9]]
var first = 0;
var user_answer = []
/**
 * Colorea el elemento seleccionado por el usuario
 * Verifica que los colores en las columnas
 *  de las preguntas y respuestas solo haya un color
 * @param {Object} e - elemento seleccionado
 */
function clickedEvent(e){
    key = parseInt(e[1],10);
    switch(this.clicked){
        case 0:
            if(key < 7){ //se verifica que no se haya seleccionado un elemento de la columna incorrecta
                e[0].style = "background-color: #B0CEF5"
                this.clicked += 1; //pasamos al siguiente elemento
                first = key;
            }
        break;
        case 1:
            if(key > 6){
                e[0].style = "background-color: #B0CEF5"
                this.clicked += 1;
                user_answer.push([first,key]);
            }
        break;
        case 2:
            if(key < 7){
                e[0].style = "background-color: #9BFABD"
                this.clicked += 1;
                first = key;
            }
        break;
        case 3:
            if(key > 6){
                e[0].style = "background-color: #9BFABD"
                this.clicked += 1;
                user_answer.push([first,key]);
            }
        break;
        case 4:
            if(key < 7){
                e[0].style = "background-color: #F9FBA2"
                this.clicked += 1;
                first = key;
            }
        break;
        case 5:
            if(key > 6){
                e[0].style = "background-color: #F9FBA2"
                this.clicked += 1;
                user_answer.push([first,key]);
            }
        break;
        case 6:
            if(key < 7){
                e[0].style = "background-color:#fa5d57"
                this.clicked += 1;
                first = key;
            }
        break;
        case 7:
            if(key > 6){
                e[0].style = "background-color: #fa5d57"
                this.clicked += 1;
                user_answer.push([first,key]);
            }
        break;
        case 8:
            if(key < 7){
                e[0].style = "background-color: #fbdaa2"
                this.clicked += 1;
                first = key;
            }
        break;
        case 9:
            if(key > 6){
                e[0].style = "background-color: #fbdaa2"
                this.clicked += 1;
                user_answer.push([first,key]);
            }
        break;
        case 10:
            if(key < 7){
                e[0].style = "background-color: #fba2bb"
                this.clicked += 1;
                first = key;
            }
        break;
        case 11:
            if(key > 6 ){
                e[0].style = "background-color: #fba2bb"
                user_answer.push([first,key]);
            }
        break;
    }
}

function Score(){
    user_answer.sort();
    var i;
    mistakes = 0;
    for(i=0;i<user_answer.length;i++){
        if(JSON.stringify(user_answer[i])!=JSON.stringify(match[i])){
            mistakes += 1;
        }
    }
    if(mistakes>0){
        answertext = "\nTienes " + mistakes + " errores";
        alert(answertext);
    }else{
        alert("Todas tus respuestas son correctas!");
    }
    window.location.reload();
}
</script>

</body>
</html>
