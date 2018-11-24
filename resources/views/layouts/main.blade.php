<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
            <li><a class="header-a-active" href="/">Início</a></li
            ><li><a href="/anuncios">Anúncios</a></li
            ><li><a href="#localization">Onde estamos?</a></li
            ><li><a href="#whoarewe">Quem somos?</a></li>
        </ul>
    </div>

    <div class="wrapper">
        @yield('content')
    </div>

    <div class="footer">
        <a href="https://www.adventistas.org.pt/">2018 © Igreja Adventista do Sétimo Dia</a>

    </div>

    {{--Login Modal--}}
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset("js/bootstrap/bootstrap.js")}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>