<!-- FOOTER SECTION -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Aviation Museum</title>
    <link rel="stylesheet" href="{{ asset('build/assets/main-aAoD0HnP.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/grid-DqR4TeWH.css') }}"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
</head>

<body data-page="wartime-experience">

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
                        <li><a class="button-text hover-item" href="{{ route('training_bases') }}">Training Bases</a></li>
                        <li><a class="button-text hover-item" href="{{ route('canteen') }}">Airman's Canteen</a></li>
                        <li><a class="button-text hover-item" href="{{ route('comm') }}">Commemoration</a></li>                      
                        <li><a class="button-text hover-item" href="{{ route('BOB') }}">Battle of Britain</a></li>
                        <li><a class="button-text hover-item" href="{{ route('events') }}">Events</a></li>
                        <li><a class="button-text hover-item" href="{{ route('contact') }}">Contact</a></li>
                    </ul>

        </nav>
    </header>

    <main>
        <section class="hero-section" id="wartime-hero">
            <div class="hero-triangle"></div>
            <div class="hero-title-con">
                <div class="hero-title"><p>War Time<br>Experience</p></div>
                <div class="hero-subtitle"><p>The Aerodrome of Democracy</p></div>
            </div>
        </section>
    
    <section class="color-content-box gray-background">

        <h3 class="content-box-title">Overview</h1>

        <h3 class="content-box-subtitle">British Commonwealth Air Training Plan (BCATP)</h3>

        <p class="content-box-text">The BCATP has been called Canada’s most significant contribution to WWII. President Roosevelt called it the “aerodrome of democracy.”</p>

        <p class="content-box-text">Essentially it was a plan to train thousands of airmen from the Commonwealth – mainly England, New Zealand and Australia as well as Canada at roughly 200 bases located across the country and manned by air force and civilian personnel.</p>

        <p class="content-box-text">Sixteen sites were eventually located in Southwestern Ontario thanks to its miles of flat farmland and its proximity to three lakes. There was always the potential for crashes during training, and the sparsely populated rural areas made ground casualties less likely, and the lakes were always handy if the pilot needed to ditch for some reason. As well, the farms in the rural areas would provide the bases with food.</p>

        <p class="content-box-text">The schools at these locations focussed on providing the airman with the skills needed to graduate as bomb aimers, navigators, pilots, wireless operators, or air gunners.
        Several of the bases are now municipal airports such as Goderich and Brantford. Even the relief fields - airfields with full runways and a hanger which provided a place for pilots to land in emergencies - are now municipal airports, including St. Thomas and Tillsonburg.</p>

        <p class="content-box-text">The only ground crew school in the country was also in this group, housed in the psychiatric hospital south of St. Thomas which had been turned over to the government for the duration of the war. Over 40,000 ground crew were trained here. The plan also graduated a total of 130,000 airmen.</p>
    </section>

        <section class="color-content-box gray-background">

        <h3 class="content-box-title">School Types & Training Path</h3>

        <h3 class="content-box-subtitle">#3 Elementary Flying Training School</h3>

        <p class="content-box-text">An Elementary Flying Training School (EFTS) gave a trainee 50 hours of basic flying instruction on a simple trainer like the De Havilland Tiger Moth, Fleet Finch, or Fairchild Cornell over 8 weeks.
Elementary schools were operated by civilian flying clubs under contract to the RCAF and most of the instructors were civilians.</p>

        <h3 class="content-box-subtitle">#4 Air Observers School</h3>

        <p class="content-box-text">Air Observers were later called "navigators". For recruits in this stream, the training path after the Initial Training School was 8 weeks at an Air Observer School (AOS), 1 month at a Bombing & Gunnery School, and finally 1 month at a Navigation School.
The Air Observer schools were operated by civilians under contract to the RCAF. However, the instructors were RCAF. They trained in the Avro Anson.</p>
    </section>
    

<section id="training-pic">
    <div  class="blurry-backdrop"></div>
    <div class="focused-pic"></div>
</section>

<section class="color-content-box white-background">
        <h3 class="content-box-title">BCATP Training Sites</h3>
        <p class="content-box-text">Explore the interactive map of sixteen training sites across Southwestern Ontario.</p>
</section>

<section id='wte-map'></section>

        <div class="read-more">
            <a class="read-more-button">Explore the Map <span class="cta-arrow">&#8594</span></a>
        </div>

<section class="color-content-box white-background">
        <h3 class="content-box-title">Accidental Deaths During Training</h3>
        <p class="content-box-text">Training under the British Commonwealth Air Training Plan carried risks. While Southwestern Ontario provided open farmland and nearby lakes to reduce ground casualties, accidents still occurred during instruction and night navigation exercises.</p>
        <p class="content-box-text">Several airmen and civilian instructors lost their lives while training at London’s No. 3 Elementary Flying Training School and No. 4 Air Observer School.</p>
        <h3 class="content-box-subtitle">Accidental Deaths During Training</h3>
        <ul  class="content-box-text">
            <li>Leading Aircraftman J.E. Higginbotham</li>
            <li>Leading Aircraftman Lewis Duff</li>
            <li>Civilian Pilot Robert Wilfred Reain</li>
            <li>Civilian Pilot Oscar A. Lutken</li>
            <li>Leading Aircraftman Kenneth Gerald Spooner, GC</li>
        </ul>

        <p class="subtle-text">These individuals are honoured in our Remembrance section.</p>
</section>

        <div class="read-more">
            <a class="read-more-button" id="explore-remembrance">Explore the Remembrance Page <span class="cta-arrow">&#8594</span></a>
        </div>

   <section class="color-content-box white-background" id="wte-gallery">
        <h3 class="content-box-title">Scenes from Wartime Training</h3>
        <p class="content-box-text">A visual record of the airfields, aircraft, instructors, and trainees who shaped Canada’s wartime aviation efforts.</p>
   
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
            <a class="read-more-button">View More<span class="cta-arrow">&#8594</span></a>
        </div>
</section>     
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
    <script src="{{ asset('build/assets/main-B5nEAxxQ.js') }}"></script>
</html>