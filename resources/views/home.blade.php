<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Aviation Museum</title>   
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body data-page="home">

    <header class="header">
        <!-- navbar -->
        <nav class="desktop-nav">
            <ul>
                <li class="desktop-logo-con m-l-nav-item">
                    <a class="desktop-logo" href="{{ route('home') }}">
                        <img src="/images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg" alt="image of logo">
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

                <li class="m-l-nav-item">
                    <a class="nav-anchor" href="{{ route('events') }}">Events</a>
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
                        <img src="/images/icons/logos/SVG_FILES_RED/FINAL_LOGONAME.svg" alt="image of logo">
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
        <h1 class="hidden">Aviation Museum Homepage</h1>

<!-- HERO SECTION -->

        <div id="hero-selection">

            <h2 class="hidden">Hero selection section</h2>

            <div class="hero-card-con">

                <div class="hero-card" id="com-hero-card">
                    <a href="{{ route('comm') }}" class="hero-card-a">
                        <h3 class="body-text">Legacy of the Fallen</h3>

                        <video class="hero-card-video" muted loop playsinline poster="/images/hero-video-poster-images/Desktop/marching-poster.png" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source data-desktop="/videos/hero-videos/hero-march-480x1080.mp4" type="video/mp4">
                            
                            <source data-mobile="/videos/hero-videos/hero-march-768x768.mp4" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con">
                        <a href="{{ route('comm') }}">
                            <h4>Read their stories</h4>
                            <img src="/images/icons/right-arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="hero-card" id="BOB-hero-card">
                    <a href="{{ route('BOB') }}" class="hero-card-a">
                        <h3 class="body-text">The Battle of Britain</h3>
                        <video class="hero-card-video" muted loop playsinline poster="/images/hero-video-poster-images/Desktop/canteen-poster.png" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source data-desktop="/videos/hero-videos/hero-canteen-480x1080.mp4" type="video/mp4">
                            
                            <source data-mobile="/videos/hero-videos/hero-canteen-768x768.mp4" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con">
                        <a href="{{ route('wartime_experience') }}">
                            <h4>Read their stories</h4>
                            <img src="/images/icons/right-arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="hero-card" id="TIME-hero-card">
                    <a href="{{ route('timeline') }}" class="hero-card-a">
                        <h3 class="body-text">London Aviation timeline</h3>
                        <video class="hero-card-video" muted loop playsinline poster="/images/hero-video-poster-images/Desktop/gas-poster.png" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source data-desktop="/videos/hero-videos/hero-gas-480x1080.mp4" type="video/mp4">
                            
                            <source data-mobile="/videos/hero-videos/hero-gas-768x768.mp4" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con">
                        <a href="{{ route('timeline') }}">
                            <h4>See the Timeline</h4>
                            <img src="/images/icons/right-arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="hero-card" id="bases-hero-card">
                    <a href="{{ route('training_bases') }}" class="hero-card-a">
                        <h3 class="body-text">Ontario Training Bases</h3>
                        <video class="hero-card-video" muted loop playsinline poster="/images/hero-video-poster-images/Desktop/plane-poster.png" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source data-desktop="/videos/hero-videos/hero-plane-480x1080.mp4" type="video/mp4">
                            
                            <source data-mobile="/videos/hero-videos/hero-plane-768x768.mp4" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con">
                        <a href="{{ route('timeline') }}">
                            <h4>View all bases</h4>
                            <img src="/images/icons/right-arrow.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            
        </div>


<!-- museum intro mobile-->
        <div class="text-con" id="home-intro">
                
            <h3 class="header-text">About the Museum</h3>

                <p class="col-span-full body-text">
                A project of 427 Wing (London), Royal Canadian Air Force Association.
                <br>
                <br>
                427 Wing's museum is housed in a 1943 airmen's canteen at the London International Airport.
                The canteen is the last surviving building from the British Commonwealth Air Training Plan (BCATP) 
                base that existed at London's airport during World War Two. It is a London landmark and is listed 
                in the city's Register of Cultural Heritage Resources. The museum commemorates the thousands of 
                Canadian and Commonwealth airmen who trained at this site, as well as the military and civilian 
                personnel who supported and instructed them. It will also commemorate the nearly 250 London men who 
                lost their lives while serving with the RCAF during World War Two.
                <br>
                <br>
                The museum is currently installing a permanent exhibition illustrating the history of military 
                and civilian aviation in the London region in the main hall of the canteen building. It will focus 
                primarily on the two BCAPT training schools - a navigator's school and an elementary flying school.
                The exhibit will incorporate uniforms, a variety of artifacts, historic images and a number of model 
                aircraft from the museum's collection, including a Spitfire and a Lancaster. The exhibition is slated 
                to open in the fall of 2026.
                </p>
        </div>

        <div class="read-more">
            <a class="read-more-button" href="{{ route('timeline') }}">Read More <span class="cta-arrow">&#8594</span></a>
        </div>

<!-- DATE AND BLOGS SECTION -->

        <div id="date-and-blog-section">

            <div id="dynamic-date">
                <h3 class="header-text">Upcoming Event: </h3>
                <p class="body-text">February 13, 2026 - Valentine's Lunch</p>
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
    </main>

<!-- FOOTER SECTION -->

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
                    <h3 class="header-text">The Battle of Britain</h3>
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