<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Igreja Adventista de Leiria</title>
    <link type="text/css" rel="stylesheet" href="{{asset("css/main.css")}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset("css/bootstrap/bootstrap.css")}}"/>
</head>
<body>
    <div id='header'>
        <div class="header-logo">
            <a href="/"><img id="header-logo-white" class="header-logo-image" src="{{asset('images/adventist_logo_white.png')}}" alt="Logotipo Adventista"></a>
        </div>
        <ul>
            <li><a class="header-a-active" href="#">Início</a></li
            ><li><a href="#">Anúncios</a></li
            ><li><a href="/login">Login</a></li>
        </ul>
    </div>

    <div class="intro-wallpaper">
        <span class="intro-title">Igreja Adventista de Leiria</span>
        <div class="intro-verse">
            <p class="intro-verse-text">"For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life."</p>
            <p class="intro-verse-location">- John 3:16</p>
        </div>
        <svg class="intro-image-divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,100 100,0 100,100"/>
        </svg>
    </div>

    <div class="content">
        <div class="map-container">
            <h1>Onde estamos?</h1>
            <div id="map"></div>
        </div>

        <div class="something">
            <h1>Random title for test purposes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                id est laborum.</p>
        </div>
    </div>

    <div class="footer">
        <h1>This is the footer</h1>

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

    <script>
        function initMap() {
            var location = {lat: 39.727442, lng: -8.809047};
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 17, center: location});
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?callback=initMap"> //Add key after billing
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset("js/bootstrap/bootstrap.js")}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>