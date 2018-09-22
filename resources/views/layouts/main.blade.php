<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>POR OS ACENTOS</title>
    <link type="text/css" rel="stylesheet" href="{{asset("css/main.css")}}"/>
</head>
<body>
    <div id='header'>
        <a href="/"><img class="header-logo" src="{{asset('images/adventist_logo.png')}}" alt="Logotipo Adventista"></a>
        <ul>
            <li class="active"><a href="#">Inicio</a></li
            ><li><a href="#">Anuncios</a></li
            ><li><a href="/login">Login</a></li>
        </ul>
    </div>

    <div class="container-wallpaper">
        <span class="container-wallpaper-title">IGREJA ADVENTISTA DE LEIRIA</span>
        <img src="{{asset('images/sunset.jpg')}}" alt="Por do Sol">
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">

    </div>

</body>
</html>