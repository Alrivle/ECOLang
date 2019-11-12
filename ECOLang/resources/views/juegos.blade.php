<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juegos</title>
    <link rel="stylesheet" href="{{asset('css/ejercicios.css')}}">
    <link rel="stylesheet" href="{{asset('css/juegos.css')}}">
    <style>
        .logo{
            top:-15px;
            height:12.5vh;  
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
<div class="title">
    <h1>Juegos</h1>
</div>
<div class="card1">
  <img src="{{asset('img/languages.png')}}" alt="Dictionary">
  <div class="subtitle">
  <h2><a href="vocabulary">Vocabulary</a></h2>
  </div>
</div>

<div class="card3">
  <img src="{{asset('img/hangman-game.png')}}" alt="HangMan Game">
  <div class="subtitle">
  <h2><a href="">Hang Man</a></h2>
  </div>
</div>
</div>
</body>


</html>
