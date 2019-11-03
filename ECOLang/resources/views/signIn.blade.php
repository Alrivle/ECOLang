<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Página para iniciar sesión">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="row">
            <div class="column">
                <div class="c1">
                        <a href="index"><img class="logo" src="{{asset('img/logo.jpeg')}}" alt="EcoLang Logo"></a>
                        <p class="slogan">The best way to predict the future is to create it</p>
                </div>  
            </div>
            <div class="vl"></div>
            <div class="column">
                <div class="cr2">
                        <h1>Regístrate</h1>
                        <div class="login">
                            <form action="">
                                <input type="text" placeholder="Nombre" name="name" maxlength="20">
                                <input type="text" placeholder="Correo" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" maxlength="20">
                                <input type="password" placeholder="Contraseña" name="password" maxlength="20">
                                <button type="submit">Confirmar</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>