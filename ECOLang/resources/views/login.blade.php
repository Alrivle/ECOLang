<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página para iniciar sesión">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="row">
            <div class="column">
                <div class="c1">
                <p class="slogan">The best way to predict the future is to create it</p>
                        <a href="index"><img class="logo" src="{{asset('img/logo.png')}}" alt="EcoLang Logo"></a>
                </div>  
            </div>
            <div class="vl"></div>
            <div class="column">
                <div class="c2">
                        <h1>Iniciar Sesión</h1>
                        <div class="login">
                            <form method="POST" action="{{route ('logInDB')}}">
                                {{csrf_field()}}
                                <input type="text" placeholder="Correo" name="email" value="{{old('email')}}" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" maxlength="20">
                                <input type="password" placeholder="Contraseña" name="password" maxlength="20" required="true">
                                {!! $errors->first('password','<span class="error">:message</span>')!!}
                                <button type="submit">Iniciar Sesión</button>
                                <div class="message">
                                    <p>¿No tienes una cuenta? <a href="signIn">Regístrate</a></p>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>