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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body data-page="events">

    <header class="header">
    <!-- navbar -->
        <nav class="desktop-nav">
            <ul>
                <li class="desktop-logo-con m-l-nav-item">
                    <a class="desktop-logo" href="{{ route('home') }}">
                        <img src="{{ assets('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="image of logo">
                    </a>
                </li>

                <li class="m-l-nav-item" id="about-nav">
                    <a class="nav-anchor" href="{{ route('home') }}">Home</a>
                </li>

                <li class="m-l-nav-item" id="about-nav">
                    <a class="nav-anchor" href="{{ route('about') }}">About</a>
                </li>

                <li class="m-l-nav-item drop-down-wrap" id="history-nav">
                    
                    <a class="nav-anchor">History</a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('timeline') }}">Historic Timeline</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('BOB') }}">Battle of Britain</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('training_bases') }}" >Training Bases</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('comm') }}">Commemoration</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('wartime_experience') }}">War Time Experiences</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('canteen') }}">Airman's Canteen</a>
                        </li>
                    </ul>
                </li>

                <li class="m-l-nav-item drop-down-wrap" id="events-nav">
                    
                    <a class="nav-anchor" href="{{ route('events') }}">Events</a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('blog') }}">Blogs</a>
                        </li>
                    </ul>
                </li>
                <li class="m-l-nav-item">
                    <a class="nav-anchor" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- mobile hamburger menu -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="hamburger-nav">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="logo-con">
                        <img src="{{ asset('images/icons/logos/SVG_FILES_RED/FINAL_LOGONAME.svg') }}" alt="image of logo">
                    </a>
                </li>
                <li class="nav-separator">

                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('about') }}">About</a>
                </li>             
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('timeline') }}">London's Air Page</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('wartime_experience') }}">War Time Experiences</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('training_bases') }}">Training Bases</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('canteen') }}">Airman's Canteen</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('comm') }}">Commemoration</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('BOB') }}">The Battle of Britain</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('events') }}">Events</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    
<main>

        <section class="hero-section" id="event-hero-section">
            <div class="hero-triangle"></div>
            <div class="hero-title-con">
                <div class="hero-title"><p>News and Events</p></div>
                <div class="hero-subtitle"><p>Moments in time, happening now</p></div>
            </div>
        </section>

        <section class="event-updates">
            <div class="updates-text">
                <p>Follow museum updates, commemorations, and community events honouring our legacy.</p>
            </div>

            <div class="events-buttons-list">
                <div>
                    <a class="button" id="upcoming-events-button">View Upcoming Events</a>
                </div>

                <div>
                    <a class="button" id="latest-blogs-button">Read The Latest Blogs</a>
                </div>

                <div>
                    <a class="button" id="latest-news-button">Read the Latest News</a>
                </div>
            </div>

        </section>

        <section class="events-featured-work">
            <div class="underline-title">
                <h1>FEATURED WORK</h1>
            </div>

            <div class="events-work-box"></div>

            <div class="event-title">
                <p>TITLE</p>
            </div>

            <div class="event-date">
                <p>DATE</p>
            </div>

            <div class="event-description">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>

                <div class="read-more">
                    <a class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
                </div>

        </section>

        <!-- events carousel -->
        <section class="card-carousel" id="upcoming-events">
            
            <!-- carousel title -->
            <div class="underline-title">
                <h1>UPCOMING EVENTS</h1>
            </div>

            <!-- carousel container -->
            <div class="carousel">

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">
                    <!-- <img class="carousel-card-image"-->
                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">
                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">
                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">
                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

                <!-- carousel background -->
            <div class="carousel-background"></div>
        </section>
        
        <div class="read-more">
            <a class="read-more-button">Read More <span>&#8594</span></a>
        </div>

        <!-- events carousel -->
        <section class="card-carousel" id="featured-events">
            
            <!-- carousel title -->
            <div class="underline-title">
                <h1>FEATURED STORIES</h1>
            </div>

            <!-- carousel container -->
            <div class="carousel">

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">
                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

            <!-- Carousel Card -->
            <div class="event-card">

                <!-- top-left sub-card -->
                <div class="sub-card">
                    <span>MAY</span>
                    <span>30<span>
                    <span>2026</span>
                </div>

                <!-- card main image -->
                    <div class="card-image-con">
                         <img class="carousel-card-image" src="{{ asset('images/icons/LAM-logo-no-text-red.svg') }}">

                    
                    <!-- card title -->
                    </div>
                        <h3 class="card-title">
                            TITLE
                        </h3>

                    <!-- card text content     -->
                    <div class="card-text">
                        <P>
                            Lorem ipsum dolor sit amet, consectetur adipiscing.
                        </P>
                    </div>

                    <!-- card bottom button -->
                <a class="card-button">Read More<span>&#8594</span></a>
                </div>

                <!-- carousel background -->
            <div class="carousel-background"></div>
        </section>

        <div class="read-more">
            <a class="read-more-button">Read More <span>&#8594</span></a>
        </div>

        <div class="underline-title">
            <h1>PHOTO GALLERY</h1>
        </div>

        <section class="card-carousel" id="events-photo-gallery-1">

            <div class="carousel">
                <div class="event-card" id="photo-1"></div>
                <div class="event-card" id="photo-2"></div>
                <div class="event-card" id="photo-3"></div>
                <div class="event-card" id="photo-4"></div>
                <div class="event-card" id="photo-5"></div>
                <div class="event-card" id="photo-6"></div>
                <div class="event-card" id="photo-7"></div>
                <div class="event-card" id="photo-8"></div>
                <div class="event-card" id="photo-9"></div>
                <div class="event-card" id="photo-10"></div>
                <div class="event-card" id="photo-11"></div>
                <div class="event-card" id="photo-12"></div>
            <div class="carousel-background"></div>
            </div>
        </section>

        <section class="card-carousel" id="events-photo-gallery-2">

            <div class="carousel">
                <div class="event-card" id="photo-1"></div>
                <div class="event-card" id="photo-2"></div>
                <div class="event-card" id="photo-3"></div>
                <div class="event-card" id="photo-4"></div>
                <div class="event-card" id="photo-5"></div>
                <div class="event-card" id="photo-6"></div>
                <div class="event-card" id="photo-7"></div>
                <div class="event-card" id="photo-8"></div>
                <div class="event-card" id="photo-9"></div>
                <div class="event-card" id="photo-10"></div>
                <div class="event-card" id="photo-11"></div>
                <div class="event-card" id="photo-12"></div>
            <div class="carousel-background"></div>
            </div>
        </section>

        <div class="read-more">
            <a class="read-more-button">Read More &#8594</a>
        </div>

        <section class="sign-up-box">
            <div class="sign-up-title">
                <h1>Stay Connected to London Aviation's Legacy.</h1>
            </div>

            <div class="sign-up-subtitle">
                <p>Receive updates on events, exhibits, and commemoration.</p>
            </div>

        <article class="form-con-sign-up">
            <form class="sign-up-form" id="contactForm" method="post" action=" ">

                <input  class="form-box-sign-up" 
                        type="email" 
                        name="name" 
                        id="email" 
                        placeholder="Enter Email*">

                <div id="feedback"></div>

                <input  class="sign-up-button" 
                        id="events-sign-up-button" 
                        type="submit" 
                        value="Sign Up!">
            </form>

        </section>

</main>

<footer id="main-footer">

    <div id="footer-inner">

        <div class="footer-col" id="footer-logo">
            <img src="{{ assets('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="London Aviation Museum Logo" id="footer-logo-img">
            <p id="footer-logo-name">LONDON AVIATION<br>MUSEUM</p>
            <p id="footer-logo-tagline">A PROJECT OF 427 WING RCAF ASSOCIATION</p>
            <a href="https://www.427wing.com" id="footer-logo-url">www.427wing.com</a>
            <p class="footer-contact-line">Contact: 519-455-0430</p>
            <p class="footer-contact-line">Email: info@427wing.com</p>
        </div>

        <div class="footer-col" id="footer-discover">
            <h3 class="footer-col-title">Discover</h3>
            <ul class="footer-nav-list">
                <li><a href="{{ route('about') }}">&rarr; About Us</a></li>
                <li><a href="{{ route('comm') }}">&rarr; Remembrance</a></li>
                <li><a href="{{ route('events') }}">&rarr; News &amp; Events</a></li>
                <li><a href="{{ route('blog') }}">&rarr; Blog</a></li>
                <li><a href="{{ route('gallery') }}">&rarr; Gallery</a></li>
                <li><a href="{{ route('contact') }}">&rarr; Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-col" id="footer-legacy">
            <h3 class="footer-col-title">Our Legacy</h3>
            <ul class="footer-nav-list">
                <li><a href="{{ route('timeline') }}">&rarr; London Aviation Timeline</a></li>
                <li><a href="{{ route('training_bases') }}">&rarr; Flight Schools and Training Bases</a></li>
                <li><a href="{{ route('comm') }}">&rarr; Legacy of the Fallen</a></li>
                <li><a href="{{ route('canteen') }}">&rarr; Airman's Canteen</a></li>
                <li><a href="{{ route('BOB') }}">&rarr; Battle of Britain</a></li>
            </ul>
        </div>

        <!-- COL 4: EXPLORE & JOIN -->
        <div class="footer-col" id="footer-explore">

            <div id="footer-explore-top">
                <h3 class="footer-col-title">Explore the Museum</h3>
                <p class="footer-col-subtitle">Search aircraft, exhibits, and stories of courage.</p>
                <div id="footer-search">
                    <input type="text" id="footer-search-input" placeholder="Search here">
                    <button type="button" id="footer-search-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>

            <div id="footer-community">
                <h3 class="footer-col-title">Join Our Community</h3>
                <p class="footer-col-subtitle">Stand with us in preserving stories of courage.</p>
                <div id="footer-socials">
                    <a href="https://www.facebook.com/" class="social-icon" alt="Facebook">
                        <img src="{{ asset('images\icons\footer-socials-icons\Facebook.svg') }}">
                    </a>
                    <a href="https://www.linkedin.com/" class="social-icon" alt="LinkedIn">
                        <img src="{{ asset('images\icons\footer-socials-icons\LinkedIn.svg') }}">
                    </a>
                    <a href="https://www.instagram.com/" class="social-icon" alt="Instagram">
                        <img src="{{ asset('images\icons\footer-socials-icons\Instagram.svg') }}">
                    </a>
                    <a href="https://x.com/" class="social-icon" alt="X / Twitter">
                        <img src="{{ asset('images\icons\footer-socials-icons\twitter.svg') }}">
                    </a>
                    <a href="https://www.youtube.com/" class="social-icon" alt="YouTube">
                        <img src="{{ asset('images\icons\footer-socials-icons\Youtube.svg') }}">
                    </a>
                </div>
            </div>

        </div>

    </div>

    <!-- FOOTER BOTTOM BAR -->
    <div id="footer-bottom">
        <p>Copyright &copy;2026 LONDON AVIATION MUSEUM | <a href="#">Privacy Policy</a> | <a href="#">Terms</a></p>
    </div>

</footer>
</body>
</html>