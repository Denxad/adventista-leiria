@extends('layouts.main')

@section('title', 'Igreja Adventista de Leiria')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset("css/index.css")}}"/>
@stop

@section("content")
    <div class="intro-wallpaper">
        <div class="intro-verse">
            <p class="intro-verse-text">For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.</p>
            <p class="intro-verse-location">John 3:16</p>
        </div>
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
@stop