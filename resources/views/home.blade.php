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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
</head>
<body data-page="home">

    <header class="header">
        <!-- navbar -->
        <nav class="desktop-nav">
            <ul>
                <li class="desktop-logo-con m-l-nav-item">
                    <a class="desktop-logo" href="{{ route('home') }}">
                        <img src="{{ asset('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="image of logo">
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
                    
                    <a class="nav-anchor" href="{{ route('gallery') }}">Events</a>

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
        <div class="hamburger-bar">
            <a href="{{ route('home') }}" class="ham-logo-con">
                <img src="{{ asset('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="image of logo">
            </a>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
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
                    <a class="mobile-nav-item" href="{{ route('blog') }}">Blogs</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('gallery') }}">Gallery</a>
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
                        <h3>Legacy of the Fallen</h3>
                        <video class="hero-card-video" muted loop playsinline poster="{{ asset('images/hero-video-poster-images/Desktop/marching-poster.png') }}" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source class="responsive-source" data-desktop="{{ asset('videos/hero-videos/hero-march-480x1080.mp4') }}" data-mobile="{{ asset('videos/hero-videos/hero-march-768x768.mp4') }}" type="video/mp4">
                            
                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con home-hero-cta-link">
                        <a href="{{ route('comm') }}">
                            <h4>Read their stories</h4>
                            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="hero-card" id="BOB-hero-card">
                    <a href="{{ route('BOB') }}" class="hero-card-a">
                        <h3>The Battle of Britain</h3>
                        <video class="hero-card-video" muted loop playsinline poster="{{ asset('images/hero-video-poster-images/Desktop/canteen-poster.png') }}" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source  class="responsive-source" data-desktop="{{ asset('videos/hero-videos/hero-canteen-480x1080.mp4') }}" data-mobile="{{ asset('videos/hero-videos/hero-canteen-768x768.mp4') }}" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con home-hero-cta-link">
                        <a href="{{ route('wartime_experience') }}">
                            <h4>Read their stories</h4>
                            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="hero-card" id="TIME-hero-card">
                    <a href="{{ route('timeline') }}" class="hero-card-a">
                        <h3>London Aviation timeline</h3>
                        <video class="hero-card-video" muted loop playsinline poster="{{ asset('images/hero-video-poster-images/Desktop/gas-poster.png') }}" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source class="responsive-source" data-desktop="{{ asset('videos/hero-videos/hero-gas-480x1080.mp4') }}" data-mobile="{{ asset('videos/hero-videos/hero-gas-768x768.mp4') }}" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                       <div class="hero-CTA-con home-hero-cta-link">
                        <a href="{{ route('timeline') }}">
                            <h4>See the Timeline</h4>
                            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="hero-card" id="bases-hero-card">
                    <a href="{{ route('training_bases') }}" class="hero-card-a">
                        <h3>Ontario Training Bases</h3>
                        <video class="hero-card-video" muted loop playsinline poster="{{ asset('images/hero-video-poster-images/Desktop/plane-poster.png') }}" preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                            <source class="responsive-source" data-desktop="{{ asset('videos/hero-videos/hero-plane-480x1080.mp4') }}" type="video/mp4" data-mobile="/videos/hero-videos/hero-plane-768x768.mp4" type="video/mp4">

                            <p>Your browser does not support</p>
                        </video>
                    </a>
                    
                    <div class="hero-CTA-con home-hero-cta-link">
                        <a href="{{ route('timeline') }}">
                            <h4>View all bases</h4>
                            <img src="{{ asset('images/icons/right-arrow.svg') }}" alt="">
                        </a>
                    </div>
                </div>

            </div>
            
        </div>


<!-- museum intro mobile-->
        <div class="text-con" id="home-intro">
            
            <div class="text-box">
                <h3 class="header-text">About the Museum</h3>

                <p class="body-text">
                <br>
                <br>
                    427 Wing's museum is housed in a 1943 airmen's canteen at the London International Airport.
                    The canteen is the last surviving building from the British Commonwealth Air Training Plan (BCATP) 
                    base that existed at London's airport during World War Two. It is a London landmark and is listed 
                    in the city's Register of Cultural Heritage Resources. The museum commemorates the thousands of 
                    Canadian and Commonwealth airmen who trained at this site, as well as the military and civilian 
                    personnel who supported and instructed them. It will also commemorate the nearly 250 London men who 
                    lost their lives while serving with the RCAF during World War Two.
                </p>

                <p class="body-text">
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
        </div>

        <div class="read-more">
            <a class="read-more-button" href="{{ route('timeline') }}">Read More <span class="cta-arrow">&#8594</span></a>
        </div>

        <section class="color-content-box white-background" id="wte-gallery">
        <h3 class="content-box-title">Upcoming Events</h3>
        <p class="content-box-text">Check out some upcoming events happening around London!</p>
   
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
        </section>

        <div class="read-more">
            <a class="read-more-button" href="{{ route('gallery') }}">View More<span class="cta-arrow">&#8594</span></a>
        </div>
</section>
    </main>

<!-- FOOTER SECTION -->

<footer id="main-footer">

    <div id="footer-inner">

        <div class="footer-col" id="footer-logo">
            <img src="{{ asset('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="London Aviation Museum Logo" id="footer-logo-img">
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