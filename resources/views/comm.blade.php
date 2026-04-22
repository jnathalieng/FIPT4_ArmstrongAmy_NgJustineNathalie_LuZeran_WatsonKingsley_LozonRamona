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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
</head>

<body id="commemoration-page" data-page="comm">

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

    <h1 class="hidden">Commemoration Page</h1>
    
    <main>

        <!-- HERO -->
        <section class="hero-video-section" id="commemoration-hero">
            
            <h2 class="hidden">Commemoration hero section</h2>

            <div class="hero-title-con-vid">
                <div class="hero-title-vid">
                    <h3>
                        Legacy of the Fallen
                    </h3>
                </div>
                <div class="hero-subtitle-vid">
                    <p>
                        Commemorate the losses throughout history
                    </p>
                </div>
            </div>

            <video class="hero-card-video hero-section-video" muted loop playsinline preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                <source class="responsive-source" data-desktop="{{ asset('videos/hero-videos/hero-march-1920x1080.mp4') }}" type="video/mp4" data-mobile="{{ asset('videos/hero-videos/hero-march-768x768.mp4') }}" type="video/mp4">
                
                <source data-mobile="/videos/hero-videos/hero-march-768x768.mp4') }}" type="video/mp4">

                <p>Your browser does not support</p>
            </video>

        </section>

        <!-- Commemoration Text Section -->
        <section class="text-con">
            <div class="text-box-full">
                <h3>
                    Commemorating the Fallen
                </h3>

                <p>
                    <br>
                    This section recognizes airmen connected to London, Ontario, including members of the 420 Snowy Owl Auxiliary Fighter Squadron, those who served in the Battle of Britain, and those who lost their lives during training under the British Commonwealth Air Training Plan. Their names are preserved through historical records and the Book of Remembrance.
                </p>
            </div>
        </section>

        <!-- Commemoration Expandable Selection -->
        <section class="comm-selection-section">
        
            <!-- COMM CARD SECTION 1 -->
            <div class="comm-card-section">
                
                <div class="comm-intro-section">
                    <h2>
                        420 Snowy Owl Auxiliary Fighter Squadron (1948-1956)
                    </h2>

                    <p>
                        Many Londoners see their first aircraft - a Curtiss Model E - flown by Beckwith Havens who took off from Carling Heights, near Wolseley Barracks (now the Royal Canadian Regiment Museum) for a 20-minute flight over the city.
                    </p>
                </div>

                <div class="comm-card-con" id="comm-app"></div>

                <div class="read-more">
                    <a class="read-more-button comm-CTA-button">Expand <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- COMM CARD SECTION 2 -->
            <div class="comm-card-section">
                <div class="comm-intro-section">
                    <h2>
                        BCATP - British Commonwealth Air Training Plan (1940-1943)
                    </h2>

                    <p>
                        Between 1940 and 1943, several airmen connected to training schools in and around London, Ontario, lost their lives while preparing for service under the British Commonwealth Air Training Plan. Accidents occurred during solo flights, mid-air collisions, navigation exercises, and routine training operations involving aircraft such as the Fleet Finch and Avro Anson. These losses form part of the historical record of Canada's wartime air training program.
                    </p>
                </div>

                <div class="comm-delta-con-wrapper">
                    <h2>NO.3 AIR OBSERVER SCHOOL</h2>
                    <div class="comm-card-con" id="comm-training-three"></div>
                </div>

                <div class="comm-delta-con-wrapper">
                    <h2>NO. 4  AIR OBSERVER SCHOOL</h2>
                    <div class="comm-card-con" id="comm-training-four"></div>
                </div>

                <div class="read-more">
                    <a class="read-more-button comm-CTA-button">Expand <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>
        </section>

        <!-- COMM CARD SECTION 3 -->
        <section class="comm-card-section">
            <h2 class="hidden">Commemorating 5 London Pilots Section</h2>
            <div class="comm-intro-section">
                <h2>
                    Five London Airmen in the Battle of Britain
                </h2>

                <p>
                    Commemorating those from our city who served in 1940.
                </p>
            </div>

            <div class="comm-card-con">

                <!-- CARD 1 -->
                <div class="comm-card-box">
                    <div class="comm-card">
                        <h4 class="comm-card-rank">FLYING OFFICER</h4>
                        <h3 class="comm-card-name">ROSS SMITHER</h3>

                        <div class="comm-card-img-con">
                            <picture class="comm-card-img-box">
                                <source media="(min-width: 768px)" srcset="{{ asset('images/BOB-images/desktop/d-bob-ross-smither.png') }}">
                                <img class="comm-card-img" src="{{ asset('images/BOB-images/mobile/m-bob-ross-smither.png') }}" alt="picture of Bob Ross Smither">
                            </picture>
                        </div>

                        <p class="comm-p">
                            Born London, Nov. 12, 1912.
                            <br>
                            <br>
                            Smither served two years in the militia before joining the RCAF as a fitter. He later   qualified as an air gunner before applying to enter a pilot's course. He was serving with No. 1 (RCAF) Squadron when it arrived in the UK on June 21, 1940.
                            <br>
                            <br>
                            Smither claimed a Me109 damaged on August 31st and a Me110 destroyed and another damaged on September 4th.
                            He was shot down and killed by Me109s over Tunbridge Wells on September 15th, in Hurricane P3876.
                            <br>
                            <br>
                            He is buried in Brookwood Military Cemetery.
                        </p>
                    </div>
                </div>
                <!-- CARD 2 -->
                <div class="comm-card-box">
                    <div class="comm-card">
                    <h4 class="comm-card-rank">PILOT OFFICER</h4>
                    <h3 class="comm-card-name">HUGH RILEY</h3>

                        <div class="comm-card-img-con" id="hugh-riley">
                            <picture class="comm-card-img-box">
                                <source media="(min-width: 768px)" srcset="{{ asset('images/BOB-images/desktop/d-bob-hugh-reilley.png') }}">
                                <img class="comm-card-img" src="{{ asset('images/BOB-images/mobile/m-bob-hugh-reilley.png') }}" alt="picture of hugh reilley">
                            </picture>
                        </div>

                        <p class="comm-p">
                            Born London, May 26, 1918.
                            <br>
                            <br>
                            After finishing his schooling in 1938 he worked at the Highland Golf Club and the London Winery before leaving for England in May 1939 with a friend to enlist in the RAF.
                            <br>
                            <br>
                            He was awarded a short service commission (five years) qualifying in August, 1940.
                            <br>
                            <br>
                            Conversion to Spitfires at 7 OTU Hawarden was followed by a posting to 64 Squadron at Leconfield in early September. His last move was on September 15th to 66 Squadron at Gravesend. On September 27th, he claimed a Me109 destroyed and this was confirmed.
                            He was shot down near Crockham Hill, Sevenoaks, on October 17th, flying Spitfire R6800 and died in the ensuing crash.
                            <br>
                            <br>
                            He is buried in Gravesend Cemetery.
                        </p>
                    </div>
                </div>
                <!-- CARD 3 -->
                <div class="comm-card-box">
                    <div class="comm-card">
                    <h4 class="comm-card-rank">FLYING OFFICER</h4>
                    <h3 class="comm-card-name">ROBERT GRASSICK</h3>

                        <div class="comm-card-img-con" id="robert-grassik">
                            <picture class="comm-card-img-box">
                                <source media="(min-width: 768px)" srcset="{{ asset('images/BOB-images/desktop/d-bob-robert-grassick.png') }}">
                                <img class="comm-card-img" src="{{ asset('images/BOB-images/mobile/m-bob-robert-grassick.png') }}" alt="picture of Bob Robert Grassick">
                            </picture>
                        </div>

                        <p class="comm-p">
                            Born London, May 22, 1917.
                            <br>
                            <br>
                            He joined the RAF on a short service commission in November, 1938. Following training, he joined 242 Squadron, then reforming at Church Fenton, on November 5th, 1939.
                            <br>
                            <br>
                            Grassick went to France on May 14th, 1940, on attachment to 607 Squadron.
                            <br>
                            <br>
                            Whilst in France he destroyed two Me109's and a Ju88 on 15th and 16th May. He destroyed two Me109's over Dunkirk. 242 was posted to France on the 8th of June to reinforce 1, 73 and 501 Squadrons and returned on the 16th.
                            <br>
                            <br>
                            While no actions from the Battle of Britain period appear in his record, Ted Barris mentions him while describing the action the men from 242 Squadron saw in France:
                            <br>
                            <br>
                            “During the climax of the Dunkirk air battle, Stan Turner shot down two more enemy fighters. His fellow No. 242 P/O's Robert Grassick, Willie McKnight and John Latta also turned in remarkable combat records. Grassick chased and fired at an Me109 until it crashed and then claimed a second enemy fighter.”
                            <br>
                            <br>
                            He survived the war.
                        </p>
                    </div>
                </div>
                <!-- CARD 4 -->
                <div class="comm-card-box">
                    <div class="comm-card">
                    <h4 class="comm-card-rank">PILOT OFFICER</h4>
                    <h3 class="comm-card-name">NIEL CAMPBELL</h3>

                        <div class="comm-card-img-con" id="niel-campbell">
                            <picture class="comm-card-img-box">
                                <source media="(min-width: 768px)" srcset="{{ asset('images/BOB-images/desktop/d-bob-neil-campbell.png') }}">
                                <img class="comm-card-img" src="{{ asset('images/BOB-images/mobile/m-bob-neil-campbell.png') }}" alt="picture of Bob Neil Campbell">
                            </picture>
                        </div>
                    
                        <p class="comm-p">
                            Born St. Thomas, June 24, 1916.
                            <br>
                            <br>
                            In 1938 Campbell began flying at the London, Ontario Flying Club and obtained his civil pilot's licence. He applied for a short service commission in the RAF in late 1938.
                            <br>
                            <br>
                            Following training, he was posted to 32 Squadron at Wittering, arriving on May 24th. On June 3rd, he moved to 242 Squadron at Biggin Hill. Five days later he flew to France with the squadron; to help cover the rearguard actions being fought by the British Army as it retreated to the Atlantic coast.
                            <br>
                            <br>
                            By mid-July, 242 was operational again and on September 15th, Campbell damaged a Do17 and on the 18th he claimed two Ju88s destroyed, shared in shooting down another, and damaged a fourth.
                            On 17th October 1940 Campbell was in Hurricane V6575 which crashed into the sea after possibly being hit by return fire from a Do17 engaged off Yarmouth.
                            <br>
                            <br>
                            His body was later recovered, and buried on October 31st in Scottow Cemetery, Norfolk.
                        </p>
                    </div>
                </div>
                <!-- CARD 5 -->
                <div class="comm-card-box">
                    <div class="comm-card">
                    <h4 class="comm-card-rank">FLYING OFFICER</h4>
                    <h3 class="comm-card-name">ROBERT R. SMITH, DFC</h3>

                    <div class="comm-card-img-con" id="robert-smith">
                        <picture class="comm-card-img-box">
                            <source media="(min-width: 768px)" srcset="{{ asset('images/BOB-images/desktop/d-bob-robert-smith.png') }}">
                            <img class="comm-card-img" src="{{ asset('images/BOB-images/mobile/m-bob-robert-smith.png') }}" alt="">
                        </picture>
                    </div>

                    <p class="comm-p">
                        Born London, August 17, 1915.
                        <br>
                        <br>
                        Smith joined the RAF on a short service commission in May, 1938.
                        <br>
                        <br>
                        He joined 229 Squadron when it was reformed at Digby on October 6th, 1939. Over Dunkirk, on May 29th, 1940, Smith probably destroyed a Me109 and, on June 1st, one Ju87 and probably a second.
                        <br>
                        <br>
                        On September 11th, he claimed a He111 probably destroyed. On the 15th, he was shot down in an attack on Do17s and Me110s over Sevenoaks and baled out, with leg wounds, from Hurricane V6616.
                        On this day he damaged a Me109.
                        <br>
                        <br>
                        Smith later flew a Kittyhawk with 112 Squadron in the Western Desert campaign in North Africa where he was shot down, becoming a Prisoner of War.
                        <br>
                        <br>
                        He survived the war.
                    </p>
                </div>
            </div>
        </section>

        <div class="read-more">
            <a class="read-more-button" href="{{ route('BOB') }}">Learn More<span class="cta-arrow">&#8594</span></a>
        </div>
</main>

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