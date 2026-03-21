<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events!</title>
    @vite(['resources/css/main.css', 'resources/js/main.js'])
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">
                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">
                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">
                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">
                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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
                         <img class="carousel-card-image" src="/images/icons/LAM-logo-no-text-red.svg">

                    
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

    <footer>

        <!-- Footer Selection Section -->

        <div class="footer-selection-con">
            
            <div class="footer-selection-box">
                <a href="{{ route('training_bases') }}" class="footer-selection-a">
                    <h3 class="header-text">BCATP Training Sites</h3>
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/homepage-images/desktop/d-homepage-map.png">

                        <img class="footer-selection-image" src="images/homepage-images/mobile/m-homepage-map.png" alt="zoomed in map of ontario">
                    </picture>
                </a>
            </div>

            <div class="footer-selection-box">
                <a href="{{ route('timeline') }}" class="footer-selection-a">
                    <h3 class="header-text">London Aviation Timeline</h3>
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/homepage-images/desktop/d-homepage-war.png">

                        <img class="footer-selection-image" src="images/homepage-images/mobile/m-homepage-war.png" alt="image of a wartime woman">
                    </picture>
                </a>
            </div>

            <div class="footer-selection-box">
                <a href="{{ route('BOB') }}" class="footer-selection-a">
                    <h3 class="header-text">Battle of Britain</h3>
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/homepage-images/desktop/d-homepage-bases.png">

                        <img class="footer-selection-image" src="images/homepage-images/mobile/m-homepage-bases.png" alt="zoomed in map of ontario">
                    </picture>
                </a>
            </div>
        </div>

        <div class="footer-desktop-flex-con">
            <div class="footer-desktop-flex-section" id="logo-and-info">
            <!-- Logo -->

            <div class="footer-logo-con">
                <a href="{{ route('home') }}">
                    <img class="footer-logo" src="/images/icons/LAM-logo-white.svg">
                </a>
            </div>

            <div class="footer-text-con">
                <p class="body-text">A Project of 427 Wing RCAF ASSOCIATION</p>

                <p class="body-text">www.427wing.com</p>

                <p class="body-text">Contact: 519-455-0430</p>

                <p class="body-text">Email: info@427wing.com</p>
            </div>
        </div>
        
        <div class="footer-desktop-flex-section" id="desk-center">
            <!-- Footer Nav Links -->

            <div class="footer-nav-links-con">
                
                <div class="footer-nav-links footer-nav-discover">
                    <h4 class="header-text">Discover</h4>

                    <div class="footer-cta-con">
                        <a href="{{ route('about') }}">
                            <img src="/images/icons/right-arrow.svg">
                            About Us
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('timeline') }}">
                            <img src="/images/icons/right-arrow.svg">
                            History
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('comm') }}">
                            <img src="/images/icons/right-arrow.svg">
                            Rememberance
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="#">
                            <img src="/images/icons/right-arrow.svg">
                            News & Events
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('contact') }}">
                            <img src="/images/icons/right-arrow.svg">
                            Contact Us
                        </a>
                    </div>

                </div>



                <div class="footer-nav-links footer-nav-legacy">
                    <h4 class="header-text">Our Legacy</h4>

                    <div class="footer-cta-con">
                        <a href="{{ route('timeline') }}">
                            <img src="/images/icons/right-arrow.svg">
                            London Aviation Timeline
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('training_bases') }}">
                            <img src="/images/icons/right-arrow.svg">
                            Flight Schools and Training Bases
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('comm') }}">
                            <img src="/images/icons/right-arrow.svg">
                            Legacy of the Fallen
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('canteen') }}">
                            <img src="/images/icons/right-arrow.svg">
                            Airman's Canteen
                        </a>
                    </div>

                    <div class="footer-cta-con">
                        <a href="{{ route('BOB') }}">
                            <img src="/images/icons/right-arrow.svg">
                            Battle of Britain
                        </a>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="footer-desktop-flex-section" id="flex-section-end">
            <!-- Footer Explore -->

            <div class="footer-search-con">
                
                <h3 class="header-text">
                    EXPLORE THE MUSEUM
                </h3>

                <p class="body-text">
                    Search aircraft, exhibits, and stories of courage.
                </p>

                <div class="footer-search-bar-con">
                    <form role="search">
                        <input type="search" id="footer-search-bar" name="searchbar" placeholder="Search through site content..." aria-label="Search through site content">
                    </form>
                </div>

            </div>

            <!-- Footer Socials -->

            <div class="footer-socials-con">
                <h3 class="header-text">JOIN OUR COMMUNITY</h3>

                <p class="body-text">Stand with us in preserving stories of courage</p>

                <div class="footer-socials-icons-con">
                    
                    <div class="icons-con">
                        <a href="https://www.facebook.com/">
                            <img src="/images/icons/footer-socials-icons/Facebook.svg">
                        </a>
                    </div>
                    
                    <div class="icons-con">
                        <a href="https://www.linkedin.com/">
                            <img src="/images/icons/footer-socials-icons/LinkedIn.svg">
                        </a>
                    </div>

                    <div class="icons-con">
                        <a href="https://www.instagram.com/">
                            <img src="/images/icons/footer-socials-icons/Instagram.svg">
                        </a>
                    </div>

                    <div class="icons-con">
                        <a href="https://x.com/">
                            <img src="/images/icons/footer-socials-icons/twitter.svg">
                        </a>
                    </div>

                    <div class="icons-con">
                        <a href="https://www.youtube.com/">
                            <img src="/images/icons/footer-socials-icons/Youtube.svg">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        </div>
        
        <div class="footer-closing-text">
            <p class="body-text">Copyright ©2026 LONDON AVIATION MUSEUM | Privacy Policy | Terms</p>
        </div>        
    </footer>
</body>
</html>