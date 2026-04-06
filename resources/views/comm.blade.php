<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <script type="importmap">
      {
        "imports": {
          "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
        }
      }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commemoration Page</title>
    <script>window.commMembers = @json($commMembers);</script>
    <script>window.trainingThree = @json($trainingThree);</script>
    <script>window.trainingFour = @json($trainingFour);</script>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
</head>

<body id="commemoration-page" data-page="comm">

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
                <li class="m-l-nav-item">
                    <a class="nav-anchor" href="{{ route('gallery') }}">Gallery</a>
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

    <h1 class="hidden">Commemoration Page</h1>
    
    <main>

        <!-- HERO -->
        <section class="hero-video-section" id="commemoration-hero">
            
            <h2 class="hidden">Commemoration hero section</h2>

            <div class="hero-title-con">
                <div class="hero-title">
                    <h3>
                        Legacy of the Fallen
                    </h3>
                </div>
                <div class="hero-subtitle">
                    <p>
                        Commemroate the losses throughout history
                    </p>
                </div>
            </div>

            <video class="hero-card-video hero-section-video" muted loop playsinline preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                <source data-desktop="/videos/hero-videos/hero-march-1920x1080.mp4" type="video/mp4">
                
                <source data-mobile="/videos/hero-videos/hero-march-768x768.mp4" type="video/mp4">

                <p>Your browser does not support</p>
            </video>

        </section>
       
<!-- COMMEMORATION HERO SECTION -->

        <section class="hero-section" id="comm-hero">
            <div class="hero-triangle"></div>
            <div class="hero-title-con">
                <div class="hero-title"><p>London's Air Age</p></div>
                <div class="hero-subtitle"><p>From Lambeth to Crumlin</p></div>
            </div>
        </section>

<!-- Commemoration Text Section -->

    <section class="text-con">
        
        <div>
            <h3>
                Honouring Those Connected to London's Aviation History
            </h3>

            <p>
                This section recognizes airmen connected to London, Ontario, including members of the 420 Snowy Owl Auxiliary Fighter Squadron, those who served in the Battle of Britain, and those who lost their lives during training under the British Commonwealth Air Training Plan. Their names are preserved through historical records and the Book of Remembrance.
            </p>
        </div>
    </section>

<!-- Commemoration Expandable Selection -->
    
    <section class="comm-selection-section">
        
        <div class="comm-alpha-con">
            
            <!-- BetaCon 1 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        420 Snowy Owl Auxiliary Fighter Squadron
                    </h2>

                    <h3>
                        (1948-1956)
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/images/comm-images/desktop/d-comm-john-allan-smith.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="/images/comm-images/mobile/m-comm-john-allan-smith.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            Many Londoners see their first aircraft - a Curtiss Model E - flown by Beckwith Havens who took off from Carling Heights, near Wolseley Barracks (now the Royal Canadian Regiment Museum) for a 20-minute flight over the city.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>

                </div>
                <!-- list of 420 squad airmen -->

              

                <div id="comm-app"></div>

                <div class="read-more">
                    <a class="read-more-button comm-CTA-button">Expand <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- BetaCon 2 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        Losses during Training
                    </h2>

                    <h3>
                        British Commonwealth Air Training Plan (BCATP)
                    </h3>

                    <h3>
                        (1940-1943)
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/images/comm-images/desktop/d-comm-robert-clinton-bailey.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="/images/comm-images/mobile/m-comm-robert-clinton-bailey.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            Between 1940 and 1943, several airmen connected to training schools in and around London, Ontario, lost their lives while preparing for service under the British Commonwealth Air Training Plan. Accidents occurred during solo flights, mid-air collisions, navigation exercises, and routine training operations involving aircraft such as the Fleet Finch and Avro Anson. These losses form part of the historical record of Canada's wartime air training program.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>
                </div>

                <div class="comm-delta-con-wrapper">
                    <h2>NO.3 AIR OBSERVER SCHOOL</h2>
                <div id="comm-training-three"></div>
                </div>
                <div class="comm-delta-con-wrapper">
                    <h2>NO. 4  AIR OBSERVER SCHOOL</h2>
                <div id="comm-training-four"></div>
                </div>

                <div class="read-more">
                    <a class="read-more-button comm-CTA-button">Expand <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- BetaCon 3 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        Five London Airmen in the Battle of Britain
                    </h2>

                    <h3>
                        (1940)
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/images/comm-images/desktop/d-comm-grant-thomas-stewart.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="/images/comm-images/mobile/m-comm-grant-thomas-stewart.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            In 1940, five airmen connected to London served during the Battle of Britain, one of the most significant air campaigns of the Second World War. Their participation formed part of Canada's contribution to the defence of Britain during this critical period.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>
                </div>

                <div class="read-more">
                    <a href="BOB.html" class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- BetaCon 4 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        The Book of Rememberance
                    </h2>

                    <h3>
                        (1940) CHANGE DATE
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            The Book of Remembrance preserves the names of those connected to London's aviation history whose service and sacrifice are recorded for future generations. It stands as a lasting record within the museum and 427 Wing.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>
                </div>

                <div class="read-more">
                    <a class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>
        
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