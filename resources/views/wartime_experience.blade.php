<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>War Time Experience</title>   
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>

<body data-page="wartime-experience">

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
</main>     
<footer id="main-footer">

    <div id="footer-inner">

        <div class="footer-col" id="footer-logo">
            <img src="aviation.png" alt="London Aviation Museum Logo" id="footer-logo-img">
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
                        <img src="\images\icons\footer-socials-icons\Facebook.svg">
                    </a>
                    <a href="https://www.linkedin.com/" class="social-icon" alt="LinkedIn">
                        <img src="\images\icons\footer-socials-icons\LinkedIn.svg">
                    </a>
                    <a href="https://www.instagram.com/" class="social-icon" alt="Instagram">
                        <img src="\images\icons\footer-socials-icons\Instagram.svg">
                    </a>
                    <a href="https://x.com/" class="social-icon" alt="X / Twitter">
                        <img src="\images\icons\footer-socials-icons\twitter.svg">
                    </a>
                    <a href="https://www.youtube.com/" class="social-icon" alt="YouTube">
                        <img src="\images\icons\footer-socials-icons\Youtube.svg">
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