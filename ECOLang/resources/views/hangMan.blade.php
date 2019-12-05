<!DOCTYPE html>
<html lang="es">
<head>
  <title>Hang Man</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{asset('css/verbs.css')}}">
  <link rel="stylesheet" href="{{asset('css/hangMan.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
           <h1 style="text-align: center; font-size:65px;">Hang Man</h1>
           <h3 style="text-align: center;font-size:35px;">Guess the word by writing it's letters</h3>
        </div>
    </div>

    <div class="hangman">
        <div class="game-container">
        <div class="banner">Oops! Please enter a letter.</div>
        <div class="lives"></div>
        <br>
        <div class="wins">Won: <span>0</span></div>
        <div class="losses">Lost: <span>0</span></div>
        <div class="new-game">New Game?
  </div>
  <div class="display">
    <div class="word"></div>
  </div>
  <div class="controls">
    <div class="input">
      <label>Write a letter:
        <input autofocus type="text" class="guess" maxlength="1" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.keyCode == 13) || (event.charCode == 32));">
      </label>
      <div class="submit"></div>
    </div>
    <div class="guesses"></div>
  </div>
</div>
        </div>
<script src='https://s3.amazonaws.com/rapidapi-prod-fe_static/rapidapi.min.js'></script><script  src="{{asset('js/hangMan.js')}}"></script>
</body>
</html>
