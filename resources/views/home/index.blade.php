@extends('layouts.main')

@section("content")
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
@stop