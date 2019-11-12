<!DOCTYPE html>
<html lang="es">
<head>
  <title>Vocabulary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="{{asset('css/verbs.css')}}">
  <link rel="stylesheet" href="{{asset('css/vocabulary.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      @font-face {
  font-family: "Report";
  src: url("../font/Report.otf");
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
           <h1 style="text-align: center; font-size:65px;">Vocabulary</h1>
           <p style="font-size:28px">Click on the card to see the meaning of the word.</p>
        </div>
    </div>

    <div class="container2">
      <div class="row" id="midrow">
        
        <div class="flip-container" id="flashcard">
          <div class="flipper">
            <div class="front">
                <div class="word">
                <span id="flashcard--content_en">almonds</span>
                </div>
            </div>
            <div class="back">
                <div class="word">
                <span id="flashcard--content_es">almendras</span>
                </div>
            </div>
          </div>
        </div>
        
        <div class="button-container">
          <button class="refresh"><i class="fa fa-angle-right"></i></button>
        </div>

      </div>    
    </div>      
  </div> 

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://isotope.metafizzy.co/jquery.isotope.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="{{asset('js/vocabulary.js')}}"></script>
</body>
</html>
