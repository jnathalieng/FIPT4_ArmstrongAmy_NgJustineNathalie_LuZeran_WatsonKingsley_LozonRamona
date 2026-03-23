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
        <nav>
                <div id="logo"><a href="{{ route('home') }}" class="hover-item"></a></div>
                
                <div class="m-l-nav-item" id="about-nav">
                <div></div>
                    <a class="button-text" href="{{ route('about') }}">About</a>>About</a>
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
                            <a class="button-text" href="{{ route('canteen') }}">Airman's Canteen</a>
                        </li>
                    </ul>

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
                        <li><a class="button-text hover-item" href="{{ route('BOB') }}">Battle of Britain</a></li>
                        <li><a class="button-text hover-item" href="{{ route('events') }}">Events</a></li>
                        <li><a class="button-text hover-item" href="{{ route('contact') }}">Contact</a></li>
                    </ul>

        </nav>
    </header>

    <h1 class="hidden">Commemoration Page</h1>

    <main>
       
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
                        <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-john-allan-smith.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-john-allan-smith.png" alt="picture of John Allan Smith recieving a medal">
                        
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
                        <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-robert-clinton-bailey.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-robert-clinton-bailey.png" alt="picture of John Allan Smith recieving a medal">
                        
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
                        <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-grant-thomas-stewart.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-grant-thomas-stewart.png" alt="picture of John Allan Smith recieving a medal">
                        
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