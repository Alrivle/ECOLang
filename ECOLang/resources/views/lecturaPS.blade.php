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
        <li><a href="">Juegos</a></li>
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
    	 <h1 style="margin-top:-30px; font-size:43px;" align="center">The Pizza</h3>
    	 <div class="lectura">
	   <p   >
    	     "	Daddy, let's order a pizza," Billy said. "That sounds like a good idea," said his dad.
    	     They looked at a menu they had at home. "What kind do you want?" his dad asked. Billy wanted a large pizza. He wanted a pizza with four toppings. He wanted cheese, pepperoni, ham, and pineapple. His dad said that sounded good.
    	     He called the pizza place. "They don't have any pineapple," dad told Billy. "What do you want instead?" Billy wanted sausage instead. His dad ordered sausage instead of pineapple. About 	    	30 minutes later, there was a knock on the door. It was the pizza man. "Here's your pizza," he told Billy's dad. "That'll be $16." Dad paid the pizza man. He also gave him a tip. Dad took the pizza to the living room. 
    	     A baseball game was on TV. Billy and his dad started to eat the pizza in the living room. "I hope the Yankees lose," Billy told his dad. "I hope the Yankees lose, too," his dad said. 
	   </p>
	 </div>
	 <div align="center">
	   <img class="imagen-lectura" src="{{asset('img/pizza.jpeg')}}">
	 </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <h1 style="font-size:40px;">Exercise</h1>
    <div class="eg">
    	 <p>Match the sentences with the correct answer.</p>
         <p>Select the sentences by clicking on them.</p>
	 <div id="exercise-container" style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" 
 unselectable="on"
 onselectstart="return false;" 
 onmousedown="return false;">
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
     <div align="center">
      <button onclick="Score()" class="button2" >Check</button>
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
                user_answer = []
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
        window.location.reload();
    }else{
        if(user_answer.length<5){
            alert("Relaciona todos los elementos!");
        }else{
            console.log(user_answer);
            alert("Todas tus respuestas son correctas!");
            window.location.reload();
        }
    }
    
}
</script>
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
