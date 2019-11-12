<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temas</title>
    <link rel="stylesheet" href="{{asset('css/ejercicios.css')}}">
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
    <h1>Temas</h1>
</div>
<div class="cards-container">
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content content1">
                    <img src="{{asset('img/get.png')}}">
                    <h1>Get</h1>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                  <li><a href="videos">Do you know get?</a></li>
	                <li><a href=#>Applications of get</a></li>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content content2">
                    <img src="{{asset('img/past.png')}}">
                    <h1>Simple Past</h1>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                  <li> <a href="pastS">Simple Past</a> </li>
	        		    <li><a href="exercisePS">Exercises</a></li>
	        		    <li><a href="lecturaPS">Reading</a></li>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content content3">
                    <img src="{{asset('img/jogging.png')}}">
                    <h1>Verbs</h1>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                  <li><a href="regularV">Regular Verbs</a></li>
	                <li><a href=#>Irregular Verbs</a></li>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>


</html>
