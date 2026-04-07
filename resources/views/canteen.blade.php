<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airman's Canteen</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
</head>
<body data-page="canteen" id="canteen-page">

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
<!-- Canteen Hero Section -->
        <section class="hero" id="canteen-hero">
        <h1 class="hidden">Airman's Canteen Page</h1>

        <video autoplay muted loop playsinline preload="metadata" disablepictureinpicture disableremoteplayback controlslist="nodownload nofullscreen noremoteplayback">
            <source src="{{ asset('videos/hero-videos/hero-canteen-vid.mp4') }}" type="video/mp4">
        </video>

    </section>

<!-- Canteen About Section -->

        <div class="text-con" id="canteen-about-section">
            <div class="col-span-full">

                <h3>The Airman's Canteen</h3>

                <p>
                    This canteen was built during WWII to serve London's RCAF base located here at what was then known as the Crumlin Airport which had just opened in June of 1940. The canteen had a wet and dry side - (alcohol and non-alcohol). It also had a three-chair barbershop and a tuck shop for such things as soft drinks, ice cream, chocolate bars and cigarettes.
                </p>
            </div>

            <div class="canteen-gallery-container">
                <div class="img-con backg">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-paper-1.png') }}">
                        <!-- NEED MOBILE IMAGES -->
                        <img class="canteen-gallery-image" src="{{ asset('images/canteen-images/desktop/d-airmans-paper-1.png') }}" alt="image of newsletters">
                    </picture>
                </div>

                <div class="img-con foreg">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-paper-2.png') }}">
                        <!-- NEED MOBILE IMAGES -->
                        <img class="canteen-gallery-image" src="{{ asset('images/canteen-images/desktop/d-airmans-paper-2.png') }}" alt="image of newsletters">
                    </picture>
                </div>

                <div class="img-con backg">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-paper-3.png') }}">
                        <!-- NEED MOBILE IMAGES -->
                        <img class="canteen-gallery-image" src="{{ asset('images/canteen-images/desktop/d-airmans-paper-3.png') }}" alt="image of newsletters">
                    </picture>
                </div>
            </div>

            <div>
                <p>
                    During WWII, two aircrew instruction schools operated on the base: #3 Elementary Flying School (1940-42) and #4 Air Observer School (1940-44) which trained navigators and bomb aimers. The air observers (navigators) went on to receive more training in Fingal, east of St. Thomas, at #4 Bombing and Gunnery School.
                </p>

                <p>
                    These schools were part of the British Commonwealth Air Training Plan (BCATP) which trained pilots, air observers, navigators, bomb aimers, gunners, flight engineers, ground crew and wireless operators at over hundred bases across Canada. Most of the trainees were Canadian, though there were others from the Royal Air Force and from the air forces of Australia and New Zealand. Most would serve overseas.
                </p>
            </div>

            <div class="canteen-image-con">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-420-squad.png') }}">

                        <img class="canteen-gallery-image" src="{{ asset('images/canteen-images/mobile/m-airmans-420-squad.png') }}" alt="image of 420 squad">
                    </picture>

                    <p class="caption">
                        After the war an RCAF Auxiliary unit - 420 Squadron, the Snowy Owls - trained here (1948-56).
                    </p>
            </div>
        </div>

        <div class="text-con-b" id="canteen-today-section">
            
            <div>

                <h3>This Building Today</h3>

                <div class="canteen-image-con">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-building.png') }}">

                        <img class="canteen-gallery-image" src="{{ asset('images/canteen-images/mobile/m-airmans-building.png') }}" alt="image of canteen building">
                    </picture>

                    <p class="caption">
                        This is what the canteen building looks like in 2026.
                    </p>
                </div>

                <p>
                    A Wing (427) of the RCAF Association bought the building in 1959 and have maintained it since as a club house.
                </p>

                <p>
                    The RCAF Association's main objectives are: to support the present-day RCAF, to memorialize the veterans of the force, and to support the area's several air cadet units. The Wing maintains a museum as a memorial to our veterans, to the airmen and airwomen who trained and served on the base, and to the over 250 Londoners who gave their lives during WWII while serving in the RCAF.
                </p>

                <p>
                    A permanent exhibition on the base can be found in the adjoining ball room.
                </p>

            </div>

        </div>

<!-- Canteen Gallery Section -->

        <section>
        <div class="dynamic-gallery-con">

            <div class="dynamic-gallery-box">

                <div class="dynamic-gallery-text-content">
                    <h2>Canteen Archives</h2>
                    <p>Photographs documenting life and community during wartime.</p>
                </div>

                <div class="gallery-box-con">
                    <div class="gallery-box">
                        <picture>
                            <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-gallery-1.png') }}">

                            <img class="gallery-image" src="{{ asset('images/canteen-images/mobile/m-airmans-gallery-1.png') }}" alt="image of canteen dining room">
                        </picture>
                    </div>

                    <div class="gallery-box">
                        <picture>
                            <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-gallery-3.png') }}">

                            <img class="gallery-image" src="{{ asset('images/canteen-images/mobile/m-airmans-gallery-3.png') }}" alt="image of civilian military efforts">
                        </picture>
                    </div>

                    <div class="gallery-box">
                        <picture>
                            <source media="(min-width: 768px)" srcset="{{ asset('images/canteen-images/desktop/d-airmans-gallery-4.png') }}">

                            <img class="gallery-image" src="{{ asset('images/canteen-images/mobile/m-airmans-gallery-4.png') }}" alt="image of vintage plane">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="read-more">
            <a class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
        </div>
    </section>
</main>
<!-- Footer Section -->

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