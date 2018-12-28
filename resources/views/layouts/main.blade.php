<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('images/icons/adventist_logo_icon.ico')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset("css/main.css")}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset("css/bootstrap/bootstrap.css")}}"/>
    @yield('css')
</head>
<body>
    <div id='header'>
        <div class="header-logo">
            <a href="/"><img class="header-logo-image" src="{{asset('images/adventist_logo.png')}}" alt="Logotipo Adventista"></a>
        </div>
        <ul>
            <li><a class="header-a-active" href="<?php if(Request::is('/')): echo '#'; else: echo '/'; endif; ?>">Início</a></li>
            <li><a href="/anuncios">Anúncios</a></li>
            <?php
            if(Request::is('/')):
                echo '<li><a href="#localization">Onde estamos?</a></li>
                        <li><a href="#whoarewe">Quem somos?</a></li>';
            else:
                echo '<li><a href="/#localization">Onde estamos?</a></li>
                        <li><a href="/#whoarewe">Quem somos?</a></li>';
            endif;
            ?>
        </ul>
    </div>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer>
        <a href="https://www.adventistas.org.pt/">2018 © Igreja Adventista do Sétimo Dia</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset("js/bootstrap/bootstrap.js")}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>