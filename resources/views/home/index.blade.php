@extends('layouts.main')

@section('title', 'Igreja Adventista de Leiria')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset("css/index.css")}}"/>
@stop

@section("content")
    <div class="intro-wallpaper">
        <div class="intro-verse">
            <p class="intro-verse-text">Porque Deus amou o mundo de tal maneira que deu o seu Filho unigênito, para que todo aquele que nele crê não pereça, mas tenha a vida eterna.</p>
            <p class="intro-verse-location">João 3:16</p>
        </div>
    </div>

    <div class="content">
        <div id="localization" class="map-container">
            <h1>Onde estamos?</h1>
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.643725405396!2d-8.811346048571183!3d39.72741037935047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22749e733f3767%3A0xff3020a0268324d!2sIgreja+Adventista+do+S%C3%A9timo+Dia+de+Leiria+(Cruz+da+Areia)!5e1!3m2!1sen!2spt!4v1543004538838" width="902" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>

        <div id="whoarewe" class="something">
            <h1>Quem somos?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                id est laborum.</p>
        </div>
    </div>
@stop