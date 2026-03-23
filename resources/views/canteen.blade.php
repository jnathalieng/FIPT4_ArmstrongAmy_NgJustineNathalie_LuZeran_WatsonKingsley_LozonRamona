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
</head>
<body data-page="canteen" id="canteen-page">

    <header class="header">
    <!-- navbar -->
        <nav>
                <div id="logo"><a href="{{ route('home') }}" class="hover-item"></a></div>
                
                <div class="m-l-nav-item" id="about-nav">
                <div></div>
                    <a class="button-text" href="about.html">About</a>
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
                            <a class="button-text" href="{{ route('training_bases') }}" >Training Bases</a>
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
                        <li><a class="button-text hover-item" href="{{ route('wartime_experience') }}">Wartime Experiences</a></li>
                        <li><a class="button-text hover-item" href="{{ route('training_bases') }}">Training Bases</a></li>
                        <li><a class="button-text hover-item" href="{{ route('comm') }}">Commemoration</a></li>                      
                        <li><a class="button-text hover-item" href="{{ route('BOB') }}">Battle of Britain</a></li>
                        <li><a class="button-text hover-item" href="{{ route('events') }}">Events</a></li>
                        <li><a class="button-text hover-item" href="{{ route('contact') }}">Contact</a></li>
                    </ul>

        </nav>
    </header>    

    <main>
<!-- Canteen Hero Section -->
        <section class="hero" id="canteen-hero">
        <h1 class="hidden">Airman's Canteen Page</h1>

        <video autoplay muted loop playsinline preload="metadata" disablepictureinpicture disableremoteplayback controlslist="nodownload nofullscreen noremoteplayback">
            <source src="videos/hero-videos/canteen-vid.mp4" type="video/mp4">
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
                        <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-paper-1.png">
                        <!-- NEED MOBILE IMAGES -->
                        <img class="canteen-gallery-image" src="images/canteen-images/desktop/d-airmans-paper-1.png" alt="image of newsletters">
                    </picture>
                </div>

                <div class="img-con foreg">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-paper-2.png">
                        <!-- NEED MOBILE IMAGES -->
                        <img class="canteen-gallery-image" src="images/canteen-images/desktop/d-airmans-paper-2.png" alt="image of newsletters">
                    </picture>
                </div>

                <div class="img-con backg">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-paper-3.png">
                        <!-- NEED MOBILE IMAGES -->
                        <img class="canteen-gallery-image" src="images/canteen-images/desktop/d-airmans-paper-3.png" alt="image of newsletters">
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
                        <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-420-squad.png">

                        <img class="canteen-gallery-image" src="images/canteen-images/mobile/m-airmans-420-squad.png" alt="image of 420 squad">
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
                        <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-building.png">

                        <img class="canteen-gallery-image" src="images/canteen-images/mobile/m-airmans-building.png" alt="image of canteen building">
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
                            <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-gallery-1.png">

                            <img class="gallery-image" src="images/canteen-images/mobile/m-airmans-gallery-1.png" alt="image of canteen dining room">
                        </picture>
                    </div>

                    <div class="gallery-box">
                        <picture>
                            <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-gallery-3.png">

                            <img class="gallery-image" src="images/canteen-images/mobile/m-airmans-gallery-3.png" alt="image of civilian military efforts">
                        </picture>
                    </div>

                    <div class="gallery-box">
                        <picture>
                            <source media="(min-width: 768px)" srcset="images/canteen-images/desktop/d-airmans-gallery-4.png">

                            <img class="gallery-image" src="images/canteen-images/mobile/m-airmans-gallery-4.png" alt="image of vintage plane">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="read-more">
            <a class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
        </div>
    </section>

<!-- Footer Section -->

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
    </main>
</body>
</html>