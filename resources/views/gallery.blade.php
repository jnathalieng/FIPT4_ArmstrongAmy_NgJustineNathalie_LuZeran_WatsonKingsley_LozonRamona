<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events!</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
</head>
<body data-page="events">

    <header class="header">
    <!-- navbar -->
        <nav>
                <div id="logo"><a href="{{ route('home') }}" class="hover-item"></a></div>
                
                <div class="m-l-nav-item" id="about-nav">
                <div></div>
                    <a class="button-text" href="{{ route('about') }}">About</a>
                </div>

                <div class="drop-down-wrap">
                <div class="button-text m-l-nav-item" id="history-nav">
                    <div></div>
                    <a class="button-text history-menu">History</a>
                </div>
                    <ul class="dropdown-menu">
                        <li>
                            <div></div>
                            <a class="button-text" href="{{ route('timeline') }}">London's Air Page</a>
                        </li>
                        <li>
                            <div></div>
                            <a class="button-text" href="{{ route('wartime_experience') }}">War Time Experiences</a>
                        </li>
                        <li>
                            <div></div>
                            <a class="button-text" href="{{ route('training_bases') }}">Training Bases</a>
                        </li>
                        <li>
                            <div></div>
                            <a class="button-text" href="{{ route('canteen') }}">Airman's Canteen</a>
                        </li>

                        <li>
                            <div></div>
                            <a class="button-text" href="{{ route('comm') }}">Commemoration</a>
                        </li>
                    </div>
                <div class="m-l-nav-item">
                    <div></div>
                    <a class="button-text" href="{{ route('BOB') }}">Battle of Britain</a>
                </div>
                <div class="m-l-nav-item">
                    <div></div>
                    <a class="button-text" href="{{ route('events') }}">Events</a>
                </div>
                <div class="m-l-nav-item">
                    <div></div>
                    <a class="button-text" href="{{ route('contact') }}">Contact</a>
                </div>

            <!-- mobile hamburger menu -->
                    <div class="hamburger hover-item">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

<ul class="hamburger-dropdown">
    <li><a class="button-text hover-item" href="{{ route('home') }}">Home</a></li>
    <li><a class="button-text hover-item" href="{{ route('about') }}">About</a></li>             
    <li><a class="button-text hover-item" href="{{ route('timeline') }}">London's Air Page</a></li>
    <li><a class="button-text hover-item" href="{{ route('wartime_experience') }}">War Time Experiences</a></li>
    <li><a class="button-text hover-item" href="{{ route('training_bases') }}">Training Bases</a></li>
    <li><a class="button-text hover-item" href="{{ route('canteen') }}">Airman's Canteen</a></li>
    <li><a class="button-text hover-item" href="{{ route('comm') }}">Commemoration</a></li>                       
    <li><a class="button-text hover-item" href="{{ route('BOB') }}">Battle of Britain</a></li>
    <li><a class="button-text hover-item" href="{{ route('contact') }}">Contact</a></li>
</ul>

        </nav>
    </header>