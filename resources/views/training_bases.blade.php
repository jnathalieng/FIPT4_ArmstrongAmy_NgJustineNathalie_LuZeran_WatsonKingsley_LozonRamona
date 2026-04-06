<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Bases</title>   
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <!-- GSAP LINKING -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/DrawSVGPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/ScrollToPlugin.min.js"></script>
</head>
<body data-page="trainingBases" id="bases-page">

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

    <h1 class="hidden">Training Bases and Flight Schools Page</h1>

    <main>

        <!-- HERO -->
        <section class="hero-video-section" id="base-hero">
            
            <h2 class="hidden">Training Bases hero section</h2>

            <div class="hero-title-con">
                <div class="hero-title">
                    <h3>
                        Interactive Map
                    </h3>
                </div>
                <div class="hero-subtitle">
                    <p>
                        Discover the BCATP Training Sites
                    </p>
                </div>
            </div>

            <video class="hero-card-video hero-section-video" muted loop playsinline preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                <source data-desktop="/videos/hero-videos/hero-plane-1920x1080.mp4" type="video/mp4">
                
                <source data-mobile="/videos/hero-videos/hero-plane-768x768.mp4" type="video/mp4">

                <p>Your browser does not support</p>
            </video>

        </section>

        <div class="button-container">
            <button class="map-button" id="return-map-button">
                Go to Map
            </button>
        </div>

        <div class="scroll-container">

            <!-- <section class="scroll-section" data-target="about-bases" id="about-bases">
                <h2>Welcome to the training bases page!</h2>
                <p>
                    Training bases in Southwestern Ontario, <br>
                    EFTS - Elementary Flying Training School, <br>
                    SFTS - Service Flying Training School, <br>
                    B&G - Bombing and Gunnery <br>
                </p>
            </section> -->

            <section class="scroll-section" data-target="full-view" id="full-view">
            </section>

            <section class="scroll-section" data-target="base-1">
                <h2>Port Albert</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            No. 31 Air Navigation School
                        </p>
                    </div>

                    <div class="map-image-box" id="base-1-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A1-PortAlbert_3AirNav.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A1-MOBILE-PortAlbert_3AirNav.png" alt="picture of Port Albert training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-2">
                <h2>Goderich</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            EFTS #12
                            <br>
                            <br>
                            This training base was an EFTS - Elementary Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-2-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A2-Goderich12.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A2-MOBILE-Goderich12.png" alt="picture of Goderich training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-3">
                <h2>Clinton</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            Radio Direction Finding (Radar) School
                            <br>
                            <br>
                            No. 31 (became #5 in July, 1943)
                        </p>
                    </div>

                    <div class="map-image-box" id="base-3-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A3-Clinton_no5Radio.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A3-MOBILE-Clinton_no5Radio.png" alt="picture of Clinton training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-4">
                <h2>Centralia</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #8 SFTS
                            <br>
                            <br>
                            This training base was a SFTS - Service Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-4-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A4-Centralia_8SFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A4-MOBILE-Centralia_8SFTS.png" alt="picture of Centralia training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-5">
                <h2>Guelph</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #4 Wireless
                        </p>
                    </div>

                    <div class="map-image-box" id="base-5-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A5-Guelph_4Wireless.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A5-MOBILE-Guelph_4Wireless.png" alt="picture of Guelph training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-6">
                <h2>London</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #3 EFTS 1940-42
                            <br>
                            <br>
                            This training base was an EFTS - Elementary Flying Training School!
                            <br>
                            <br>
                            #4 AOS 1940-44
                            <br>
                            <br>
                        </p>
                    </div>

                    <div class="map-image-box" id="base-6-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/mobile/A6-MOBILE-LondonEFTS_AOS.png">

                            <img class="map-image" src="/images/Training_Bases/desktop/A6-LondonEFTS_AOS.png" alt="picture of London training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-7">
                <h2>Windsor</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #7 EFTS
                            <br>
                            <br>
                            This training base was an EFTS - Elementary Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-7-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A7-Windsor_7EFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A7-MOBILE-Windsor_7EFTS.png" alt="picture of Windsor training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-8">
                <h2>Fingal</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #4 B&G
                            <br>
                            <br>
                            This training was a B&G - Bombing and Gunnery!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-8-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A8-Fingal_4BomGun.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A8-MOBILE-Fingal_4BomGun.png" alt="picture of training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-9">
                <h2>St. Thomas</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #1 Technical Training School
                        </p>
                    </div>

                    <div class="map-image-box" id="base-9-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A9-StThomas.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A9-MOBILE-StThomas.png" alt="picture of St. Thomas training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-10">
                <h2>Aylmer</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #14 SFTS
                            <br>
                            <br>
                            This training base was a SFTS - Service Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-10-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A10-Aylmer14SFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A10-MOBILE-Aylmer14SFTS.png" alt="picture of Aylmer training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-11">
                <h2>Jarvis</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #1 B&G
                            <br>
                            <br>
                            This training base was a B&G - Bombing and Gunnery!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-11-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A11-Jarvis_BG.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A11-MOBILE-Jarvis_BG.png" alt="picture of Jarvis training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-12">
                <h2>Hagersville</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #16 SFTS
                            <br>
                            <br>
                            This training base was a SFTS - Service Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-12-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A12-Hagersville,16SFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A12-MOBILE-Hagersville,16SFTS.png" alt="picture of Hagersville training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-13">
                <h2>Dunnville</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #6 SFTS
                            <br>
                            <br>
                            This training base was a SFTS - Service Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-13-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A13-Dunville6SFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A13-MOBILE-Dunville6SFTS.png" alt="picture of Dunnville training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-14">
                <h2>St. Catharines</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #9 EFTS
                            <br>
                            <br>
                            This training base was a EFTS - Elementary Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-14-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A14-StCatharines9EFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A14-MOBILE-StCatharines9EFTS.png" alt="picture of St. Catharines training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-15">
                <h2>Mount Hope</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            No. 33 Air Navigation School
                            <br>
                            <br>
                            #10 EFTS
                            <br>
                            <br>
                            This training base was an EFTS - Elementary Flying Training School!
                            <br>
                            <br>
                            #1 Wireless School
                            <br>
                            <br>
                        </p>
                    </div>

                    <div class="map-image-box" id="base-15-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A15-Hamilton_MountHope.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A15-MOBILE-Hamilton_MountHope.png" alt="picture of Mount Hope training base">
                        </picture>

                    </div>
                </div>
            </section>

            <section class="scroll-section" data-target="base-16">
                <h2>Brantford</h2>

                <div class="scroll-flex-con">
                    <div class="map-content-box">
                        <p>
                            #5 SFTS
                            <br>
                            <br>
                            This training base was a SFTS - Service Flying Training School!
                        </p>
                    </div>

                    <div class="map-image-box" id="base-16-image">

                        <picture class="map-image-con">
                            <source media="(min-width: 768px)" srcset="/images/Training_Bases/desktop/A16-Brantford_5SFTS.png">

                            <img class="map-image" src="/images/Training_Bases/mobile/A16-MOBILE-Brantford_5SFTS.png" alt="picture of Brantford training base">
                        </picture>

                    </div>
                </div>
            </section>

        </div>

        <svg id="map" viewBox="0 0 1359.71 804.3" preserveAspectRatio="xMidYMid meet" class="map-svg-element">

            <defs>
                <style>
                .cls-1 {
                    fill: #727272;
                }

                .cls-2 {
                    fill: #606060;
                }

                .cls-3 {
                    stroke: #ff9100;
                }

                .cls-3, .cls-4, .cls-5 {
                    fill: none;
                    stroke-miterlimit: 10;
                }

                .cls-6 {
                    fill: #ff2215;
                }

                .cls-7 {
                    fill: #badcfe;
                }

                .cls-4 {
                    stroke: #0098ff;
                }

                .cls-5 {
                    stroke: #fcd68b;
                    stroke-width: .75px;
                }

                .cls-8 {
                    fill: #eaeaea;
                }

                .cls-9 {
                    fill: #150000;
                }
                </style>
            </defs>
            <g id="water">
                <rect id="water-body" class="cls-7" x="-263.64" y="-338.28" width="1995.56" height="1336.97"/>
                <polyline id="water-path-4" class="cls-4" points="1359.71 137.26 1213.97 203.27 1257.84 275.24"/>
                <polyline id="water-path-3" class="cls-4" points="1299.06 405.26 1290.92 429.14 1254.81 447.12 956.35 587.91 614.37 655.52 349.25 805.21"/>
                <polyline id="water-path-2" class="cls-4" points="124.05 805.69 81.66 780.82 58.03 715.63 66.38 684.23 62.2 668.4 67.84 641.48 69.12 635.15 71.59 630.66 74.33 625.88 78.9 620.24 82.55 617.07 89.6 613.51 94.69 612.32"/>
                <path id="water-path-1" class="cls-4" d="M93.38,612.62l10.31-2.26,6.92-2.22s4.57-2.87,5.09-2.87,8.35-2.22,8.35-2.22c0,0,6.87-2.61,7.74-2.74s9.74-3.26,9.74-3.26l9.66-1.83,49.58-60.67,7.96-5.87,12.92,1.83,21.63-23.78,1.57-16.34,12.53-33.56v-6.11l-3.82-14.05,3.33-12.82.49-14.48,6.56-19.38,4.4-5.77,4.41-4.48v-4.81l-1.24-5.15-.78-4.04,3.29-4.84,85.69-210.05L330.46,0"/>
                <g id="lake-st.claire">
                <path id="L" class="cls-2" d="M193.61,581.42h.78v5.41h2.59v.66h-3.38v-6.07Z"/>
                <path id="a" class="cls-2" d="M200.25,587.49l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.4,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM200.13,585.27c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.05-.17.05-.25v-.76Z"/>
                <path id="k" class="cls-2" d="M202.95,585.13h.02c.11-.15.26-.34.39-.5l1.28-1.5h.95l-1.68,1.79,1.92,2.57h-.96l-1.5-2.09-.41.45v1.64h-.78v-6.39h.78v4.03Z"/>
                <path id="e" class="cls-2" d="M206.83,585.46c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM209.15,584.89c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="S" class="cls-2" d="M212.73,586.54c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.59,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="t" class="cls-2" d="M218.17,581.88v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="_." data-name="." class="cls-2" d="M219.98,587.02c0-.33.23-.57.54-.57s.53.23.53.57-.21.57-.54.57c-.32,0-.53-.24-.53-.57Z"/>
                <path id="C" class="cls-2" d="M228.21,587.29c-.29.14-.86.29-1.6.29-1.71,0-3-1.08-3-3.07s1.29-3.19,3.17-3.19c.76,0,1.23.16,1.44.27l-.19.64c-.3-.14-.72-.25-1.22-.25-1.42,0-2.37.91-2.37,2.5,0,1.49.86,2.44,2.33,2.44.48,0,.96-.1,1.28-.25l.16.62Z"/>
                <path id="l" class="cls-2" d="M229.16,581.1h.79v6.39h-.79v-6.39Z"/>
                <path id="a-2" data-name="a" class="cls-2" d="M233.7,587.49l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.4,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM233.58,585.27c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.05-.17.05-.25v-.76Z"/>
                <path id="i" class="cls-2" d="M236.5,581.91c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM235.62,587.49v-4.36h.79v4.36h-.79Z"/>
                <path id="r" class="cls-2" d="M237.73,584.49c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.58.68-.95,1.21-.95.09,0,.15,0,.23.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                </g>
                <g id="lake-erie">
                <path id="L-2" data-name="L" class="cls-2" d="M583.29,677.24l.68-.39,2.68,4.7,2.25-1.28.33.57-2.93,1.67-3.01-5.27Z"/>
                <path id="a-3" data-name="a" class="cls-2" d="M592.06,679.22l-.33-.45h-.02c-.04.43-.3.93-.84,1.24-.77.44-1.46.12-1.78-.43-.52-.92,0-1.88,1.47-2.71l-.05-.08c-.18-.31-.58-.83-1.36-.38-.35.2-.66.52-.83.84l-.42-.36c.2-.38.57-.77,1.05-1.05,1.16-.66,1.89-.03,2.32.73l.81,1.42c.19.33.39.64.58.87l-.63.36ZM590.85,677.34c-.76.41-1.54,1.03-1.12,1.77.25.45.67.49,1.02.29.49-.28.63-.77.55-1.16-.02-.08-.05-.17-.09-.24l-.37-.66Z"/>
                <path id="k-2" data-name="k" class="cls-2" d="M593.24,675.83h.02c.02-.2.06-.44.09-.63l.37-1.94.83-.47-.57,2.39,2.94,1.28-.84.48-2.34-1.07-.13.59.81,1.42-.68.39-3.17-5.55.68-.39,2,3.5Z"/>
                <path id="e-2" data-name="e" class="cls-2" d="M596.77,674.19c.55.92,1.36.97,2.05.57.49-.28.74-.54.94-.79l.4.42c-.18.25-.52.61-1.13.95-1.17.67-2.3.3-2.95-.84s-.49-2.42.61-3.05c1.24-.71,2.18.19,2.58.89.08.14.13.26.16.33l-2.66,1.52ZM598.51,672.54c-.24-.44-.82-1.02-1.59-.57-.7.4-.64,1.21-.42,1.72l2.01-1.15Z"/>
                <path id="E" class="cls-2" d="M604.31,668.95l-2.05,1.17,1.08,1.9,2.28-1.3.33.57-2.96,1.69-3.01-5.27,2.85-1.62.33.57-2.17,1.24.95,1.67,2.05-1.17.32.56Z"/>
                <path id="r-2" data-name="r" class="cls-2" d="M605.33,668.2c-.25-.45-.48-.83-.71-1.16l.6-.34.45.73.03-.02c-.12-.61.11-1.16.58-1.43.08-.04.14-.07.21-.09l.37.65c-.08.02-.15.06-.25.11-.48.28-.62.84-.42,1.41.04.1.08.22.15.34l1.15,2.02-.68.39-1.49-2.6Z"/>
                <path id="i-2" data-name="i" class="cls-2" d="M607.4,664.04c.14.23.08.52-.2.67-.24.14-.52.05-.66-.19-.14-.24-.07-.53.18-.68.26-.15.53-.05.67.19ZM609.4,669.32l-2.16-3.78.69-.39,2.16,3.78-.69.39Z"/>
                <path id="e-3" data-name="e" class="cls-2" d="M610.61,666.29c.55.92,1.36.96,2.05.57.49-.28.74-.54.94-.79l.4.43c-.18.25-.52.61-1.13.95-1.17.67-2.3.3-2.95-.84s-.49-2.42.61-3.05c1.24-.71,2.18.19,2.58.89.08.14.13.26.16.33l-2.66,1.52ZM612.34,664.65c-.24-.44-.82-1.02-1.59-.57-.7.4-.63,1.21-.42,1.72l2.01-1.15Z"/>
                </g>
                <g id="lake-ontario">
                <path id="L-3" data-name="L" class="cls-2" d="M1273.04,181.56l.71-.33,2.28,4.91,2.35-1.09.28.6-3.06,1.42-2.56-5.5Z"/>
                <path id="a-4" data-name="a" class="cls-2" d="M1281.61,184.26l-.29-.47h-.02c-.08.42-.37.9-.94,1.16-.8.37-1.47,0-1.74-.57-.44-.96.16-1.87,1.69-2.57l-.04-.08c-.15-.33-.52-.87-1.32-.5-.37.17-.7.46-.89.77l-.38-.4c.23-.36.64-.72,1.13-.95,1.21-.56,1.89.12,2.25.92l.69,1.48c.16.34.33.67.51.92l-.65.3ZM1280.57,182.29c-.79.35-1.62.9-1.26,1.67.22.46.63.54,1,.37.51-.24.69-.72.65-1.11,0-.09-.03-.17-.07-.25l-.32-.69Z"/>
                <path id="k-3" data-name="k" class="cls-2" d="M1283.07,180.98h.02c.03-.19.09-.43.14-.62l.52-1.9.87-.4-.77,2.33,2.82,1.52-.87.41-2.24-1.26-.18.58.69,1.49-.71.33-2.7-5.79.71-.33,1.7,3.66Z"/>
                <path id="e-4" data-name="e" class="cls-2" d="M1286.73,179.64c.47.96,1.28,1.07,1.99.74.51-.24.78-.47,1-.71l.36.46c-.2.23-.57.56-1.2.86-1.22.57-2.31.1-2.87-1.09-.55-1.19-.29-2.46.86-2.99,1.29-.6,2.16.38,2.5,1.1.07.15.11.27.13.35l-2.78,1.29ZM1288.59,178.14c-.21-.46-.73-1.08-1.54-.7-.73.34-.73,1.16-.56,1.68l2.1-.98Z"/>
                <path id="O" class="cls-2" d="M1296.42,173.95c.88,1.89.2,3.43-1.21,4.09-1.45.68-3,.02-3.77-1.64-.81-1.75-.26-3.4,1.21-4.08,1.5-.7,3.01,0,3.77,1.63ZM1292.2,176.03c.55,1.18,1.67,1.93,2.79,1.41,1.13-.52,1.28-1.86.7-3.11-.51-1.09-1.61-1.97-2.8-1.42-1.18.55-1.26,1.91-.7,3.11Z"/>
                <path id="n" class="cls-2" d="M1297.28,173.46c-.19-.41-.35-.74-.53-1.05l.64-.3.34.63h.02c.02-.47.31-1.05.96-1.36.55-.25,1.55-.32,2.18,1.03l1.1,2.36-.72.33-1.06-2.28c-.3-.64-.78-1.06-1.46-.74-.47.22-.68.73-.62,1.18,0,.11.05.24.11.36l1.11,2.38-.72.33-1.34-2.88Z"/>
                <path id="t-2" data-name="t" class="cls-2" d="M1301.62,168.76l.53,1.13,1.03-.48.25.55-1.03.48.99,2.13c.23.49.5.7.9.52.19-.09.32-.18.39-.24l.28.52c-.11.12-.31.27-.59.39-.33.16-.65.17-.92.06-.3-.12-.54-.43-.76-.9l-1-2.16-.61.28-.25-.55.61-.28-.44-.95.61-.51Z"/>
                <path id="a-5" data-name="a" class="cls-2" d="M1308.01,171.97l-.29-.47h-.02c-.08.42-.37.9-.93,1.16-.8.37-1.47,0-1.74-.57-.44-.96.16-1.87,1.69-2.57l-.04-.08c-.15-.33-.51-.87-1.32-.5-.37.17-.7.46-.89.77l-.38-.4c.23-.36.64-.72,1.13-.95,1.21-.56,1.89.13,2.25.92l.69,1.48c.16.34.33.67.51.92l-.65.3ZM1306.97,170.01c-.79.35-1.62.9-1.26,1.67.22.46.63.54,1,.37.51-.24.69-.72.65-1.11,0-.09-.03-.17-.07-.25l-.32-.69Z"/>
                <path id="r-3" data-name="r" class="cls-2" d="M1308.49,168.44c-.22-.46-.41-.86-.61-1.22l.63-.29.39.76.03-.02c-.07-.61.21-1.15.69-1.37.08-.04.14-.06.21-.07l.31.68c-.08.02-.16.04-.26.09-.51.24-.69.79-.53,1.37.03.1.07.23.12.35l.98,2.11-.71.33-1.26-2.72Z"/>
                <path id="i-3" data-name="i" class="cls-2" d="M1310.9,164.47c.12.24.03.52-.25.65-.25.12-.52,0-.64-.24-.12-.25-.02-.54.24-.66.27-.13.53,0,.65.24ZM1312.46,169.91l-1.84-3.95.72-.33,1.84,3.95-.72.33Z"/>
                <path id="o" class="cls-2" d="M1317.01,165.34c.68,1.46-.04,2.57-.99,3.01-1.07.5-2.26.1-2.84-1.15-.62-1.32-.11-2.5.98-3.01,1.13-.53,2.29-.06,2.85,1.15ZM1313.89,166.84c.4.87,1.2,1.29,1.91.96.69-.32.9-1.2.49-2.09-.31-.67-1.04-1.36-1.89-.97-.85.4-.85,1.35-.5,2.1Z"/>
                </g>
                <g id="lake-michigan">
                <path id="L-4" data-name="L" class="cls-2" d="M344.65,201.27l.28-.73,5.04,1.96.94-2.42.61.24-1.22,3.15-5.66-2.2Z"/>
                <path id="a-6" data-name="a" class="cls-2" d="M352.71,197.29l-.53-.14v.03c.22.35.34.9.11,1.48-.32.82-1.06,1.02-1.65.79-.98-.38-1.18-1.46-.56-3.03l-.08-.03c-.33-.13-.98-.27-1.3.56-.15.38-.18.82-.11,1.17l-.55-.02c-.09-.42-.04-.96.16-1.47.48-1.24,1.45-1.22,2.26-.9l1.52.59c.35.14.7.25,1,.31l-.26.67ZM350.59,196.59c-.33.8-.54,1.77.25,2.08.48.19.83-.04.98-.42.21-.53,0-1-.3-1.25-.07-.05-.14-.1-.22-.13l-.7-.27Z"/>
                <path id="k-4" data-name="k" class="cls-2" d="M351.49,193.91v-.02c-.1-.16-.22-.37-.32-.54l-.94-1.74.35-.89,1.06,2.22,3.09-.86-.35.9-2.49.65.27.54,1.53.59-.28.73-5.96-2.31.28-.73,3.76,1.46Z"/>
                <path id="e-5" data-name="e" class="cls-2" d="M353.2,190.41c1.01.37,1.66-.11,1.95-.85.21-.53.24-.88.23-1.21l.58.08c.02.31-.02.8-.27,1.45-.49,1.25-1.6,1.68-2.82,1.2-1.22-.48-1.91-1.57-1.45-2.75.52-1.33,1.82-1.23,2.56-.94.15.06.26.12.33.16l-1.11,2.85ZM353.51,188.04c-.47-.19-1.28-.27-1.6.56-.29.75.27,1.34.76,1.6l.84-2.16Z"/>
                <path id="M" class="cls-2" d="M356.63,179.82c-.8-.26-1.77-.58-2.47-.86v.02c.58.45,1.19.96,1.86,1.55l2.36,2.06-.21.55-3.05-.13c-.9-.04-1.72-.1-2.45-.2v.02c.69.29,1.62.7,2.45,1.08l2.37,1.09-.27.7-5.5-2.59.36-.93,3.11.1c.79.04,1.48.08,2.13.17v-.02c-.51-.36-1.05-.81-1.66-1.34l-2.35-2.07.36-.93,5.79,1.84-.28.71-2.54-.82Z"/>
                <path id="i-4" data-name="i" class="cls-2" d="M355.03,175.89c.25.09.38.35.27.65-.1.26-.37.37-.63.27-.26-.1-.39-.37-.28-.64.11-.28.38-.37.64-.27ZM359.91,178.73l-4.06-1.58.29-.74,4.06,1.58-.29.74Z"/>
                <path id="c" class="cls-2" d="M361.65,173.81c.03.23,0,.71-.22,1.26-.48,1.23-1.62,1.7-2.86,1.22-1.25-.49-1.82-1.69-1.31-3.02.17-.44.43-.78.61-.94l.51.39c-.17.14-.37.38-.53.78-.36.93.13,1.7.98,2.03.94.37,1.75-.01,2.07-.82.16-.42.16-.74.15-.98l.6.09Z"/>
                <path id="h" class="cls-2" d="M356.18,170.69l.29-.74,2.53.98v-.02c-.16-.2-.27-.46-.31-.73-.04-.27-.02-.56.08-.84.21-.55.89-1.29,2.29-.74l2.42.94-.29.74-2.33-.91c-.65-.25-1.3-.23-1.57.47-.19.48,0,.99.35,1.28.08.08.19.13.33.19l2.45.95-.29.74-5.96-2.31Z"/>
                <path id="i-5" data-name="i" class="cls-2" d="M359.06,165.51c.26.09.38.35.27.65-.1.26-.37.37-.63.27-.26-.1-.39-.37-.28-.64.11-.28.38-.37.64-.27ZM363.94,168.35l-4.06-1.58.29-.74,4.06,1.58-.29.74Z"/>
                <path id="g" class="cls-2" d="M362,161.31c.29.13.61.27,1.1.47l2.36.92c.93.36,1.43.77,1.63,1.3.22.54.11,1.15-.09,1.67-.19.49-.52.98-.86,1.22l-.49-.4c.27-.2.59-.56.78-1.07.29-.76.11-1.46-.91-1.86l-.45-.18v.02c.28.37.42.93.17,1.56-.39,1.01-1.53,1.4-2.65.96-1.38-.53-1.81-1.73-1.45-2.67.27-.71.79-.95,1.2-.99v-.02s-.59-.27-.59-.27l.25-.65ZM363.31,162.7c-.12-.05-.24-.08-.35-.09-.48-.03-.97.19-1.18.73-.27.71.13,1.44,1.07,1.8.8.31,1.62.16,1.93-.63.18-.45.05-.98-.36-1.32-.11-.09-.25-.16-.37-.21l-.73-.28Z"/>
                <path id="a-7" data-name="a" class="cls-2" d="M367.4,159.45l-.53-.14v.03c.22.35.34.9.11,1.48-.32.82-1.06,1.02-1.65.79-.98-.38-1.18-1.46-.56-3.03l-.08-.03c-.33-.13-.98-.27-1.3.56-.15.38-.18.82-.11,1.17l-.55-.02c-.09-.42-.04-.96.16-1.47.48-1.24,1.45-1.22,2.26-.9l1.52.59c.35.14.7.25,1,.31l-.26.67ZM365.29,158.75c-.33.8-.54,1.77.25,2.08.48.19.83-.04.98-.42.21-.53,0-1-.3-1.25-.06-.05-.14-.1-.22-.13l-.7-.27Z"/>
                <path id="n-2" data-name="n" class="cls-2" d="M365.14,156.5c-.42-.16-.77-.29-1.11-.39l.25-.65.69.22v-.02c-.3-.35-.5-.97-.24-1.64.22-.56.89-1.31,2.29-.76l2.42.94-.29.74-2.34-.91c-.66-.25-1.29-.22-1.56.47-.19.49,0,1,.37,1.28.08.07.2.14.32.18l2.44.95-.29.74-2.96-1.15Z"/>
                </g>
            </g>
            <g id="ontario">
                <path id="island-4" class="cls-8" d="M911.53,526.4l4.89.98,10.18,1.57h14.68l7.63.98h6.26l4.31.98-11.74,2.35-6.07.78-8.42-1.57s-6.65-.78-7.44-.98-6.65-1.17-7.83-1.27-7.44,0-7.44,0l-4.11-1.08v-1.57l5.09-1.17Z"/>
                <polygon id="island-3" class="cls-8" points="900.37 524.51 896.72 524.51 895.28 526.4 895.28 527.12 898.29 527.12 901.16 527.12 903.24 526.4 905.85 524.51 900.37 524.51"/>
                <path id="island-2" class="cls-8" d="M859.93,519.26h6.78s4.83.82,5.22.95,3.65.52,4.31.52,4.96.52,5.61.78,4.7,1.41,4.7,1.41l3.26,1.07v1.96h-2.61s-4.44-1.04-5.22-1.17-7.11-1.3-7.11-1.3l-5.41-.86s-3-1.09-3.39-1.09h-4.96c-.52,0-5.09.13-5.87.13s-5.03-.26-5.03-.26l5.42-5.01,4.31,2.89Z"/>
                <polygon id="island-1" class="cls-8" points="848.44 514.99 846.36 514.99 845.44 517.07 845.44 518.64 846.94 518.64 849.36 518.64 850.2 517.33 848.44 514.99"/>
                <path id="main-land" class="cls-8" d="M877.04-334.74c-49.26,70.57-20.25,66.3,17.3,34.22,37.55-32.08-20.44,26.73,27.85,36.36s65.06-18.18,64.32,32.08c-.73,50.26,40.54,53.47,40.54,53.47,0,0,107.76-57.74,38.63,6.42-45.19,41.94-67.56,40.93-87.48,19.66-10.55-11.26-20.42-28.21-32.63-47.46-35.26-55.6-99.47-17.11-137.59,2.14-38.12,19.25,52.02,21.39,32.48,53.47s173.51-6.42,96.5,40.63-86.59-2.14-129.37-7.13c-42.77-4.99-15.68-57.39-49.54-63.09-33.86-5.7-74.85,42.06-99.09,38.54-24.24-3.52,60.59-48.16,14.26-41.39-46.34,6.77-46.69-10.34-29.23-12.83,17.47-2.49,40.99-39.92,8.55-57.03-32.44-17.11-20.67,3.92-28.51,18.53-7.84,14.61-32.79,22.81-37.78-3.56s-20.67-28.51-20.67-28.51c-64.87-44.91,68.08-53.47-36.36-59.17-104.44-5.7-163.6,26.73-92.67,21.39,70.93-5.35,76.99,44.2,95.03,93.39,18.04,49.19-58.16,72.36-83.63,91.96-25.47,19.6,25.47,112.11,25.47,112.11l-.16,1.01.33,11.91,1.17,1.7s-.13,5.48.13,6,.13,5.74.13,6.39-.78,9.52-.78,9.52v10.96c0,.39.78,6.92.78,7.57v11.09c0,1.04-.13,3-.26,3.78-.13.78,0,3.91,0,4.73s.78,4.28.78,4.28l.39,16.95.52,6.52.26,7.7s.26,4.57.26,4.96.39,5.35.64,6c.25.65.4,4.18,0,5.74-.4,1.57.4,2.61,0,3.39-.4.78.53,2.35.53,3.39s.39,3.39.91,4.44c.52,1.04.26,3.13,0,3.52-.26.39.65,13.44.65,13.44,0,0,.13,3.26.26,4.18.13.91.52,4.96.39,6-.13,1.04-.52,3.39-.78,4.57-.26,1.17-.91,7.57-1.04,8.35-.13.78-.39,5.35-.39,5.35l-.53,13.57v25.7s.14,5.74,0,6.13-.9,3-1.03,3.39c-.13.39-1.83,4.04-2.09,4.44s-2.87,4.44-3.39,4.96c-.52.52-1.44,2.22-2.22,3.13-.78.91-3,3.39-3,3.39l-5.09,5.15s-2.48,3.46-3.13,3.91c-.65.46-2.48,1.63-3.26,2.22-.78.59-1.3,1.24-2.28,2.02-.98.78-1.44,1.11-2.15,1.63-.72.52-1.57.91-2.41,1.63-.84.72-2.09,2.02-3.2,2.94-1.11.91-1.96,1.5-3.13,2.09-1.17.59-5.09,2.61-5.09,2.61,0,0-4.81,4.03-5.69,4.42-.88.39-1.76,1.22-3.52,2.5-1.76,1.27-1.91,1.42-3.42,2.1-1.51.68-2.01.64-2.94.83-.93.2-2.05.34-2.2.34s-2.05,1.03-2.05,1.03c0,0-1.47.59-3.42.88s-2.35.39-3.91.65c-1.57.26-1.08.72-2.94,1.31-1.86.59-2.05,1.17-3.13,1.76-1.08.59-2.25.68-3.23.98-.98.29-2.74.49-3.23.39-.49-.1-5.77-.39-6.26.1-.49.49-.78,1.57-.88,1.86-.1.29-.2,2.45-.2,2.45l.29,6.07-.88,1.76-1.47,1.66-2.84,2.74s-2.64,2.94-2.84,3.33c-.2.39-2.25,2.54-2.64,2.94s-2.35,2.15-2.84,2.74c-.49.59-2.45,3.03-3.03,3.62l-2.25,2.25c-.49.49-1.17,1.27-2.05,2.25-.88.98-1.08,2.05-1.96,2.84-.88.78-.98,1.17-2.15,2.25s-2.15,1.27-4.01,1.86c-1.86.59-1.86.29-4.11.49s-1.66.29-2.74.39-2.74.1-2.74.1l-.39,1.17s-.1,1.86-.1,2.15.1,3.13-.1,3.91c-.2.78-.49,1.57-.78,2.25-.29.68-1.08,1.37-1.86,1.96s-1.27,1.57-2.54,2.35c-1.27.78-1.76,1.08-2.84,1.86s-2.54,1.27-4.5,1.86c-1.96.59-2.94,1.57-2.94,1.57,0,0-5.38,2.48-6.56,3.13-1.17.65-3.26.91-5.48,1.57-2.22.65-3,.91-4.44,1.17-1.44.26-3.52.39-5.35.65s-3,.52-4.96.78c-1.96.26-3.91.39-5.87.39s-3.39.52-4.7.78c-1.3.26-3.13.65-5.09.78-1.96.13-3.13.39-4.83.52-1.7.13-2.48.13-3.52.26-1.04.13-2.74.65-3.5.91-.76.26-1.33,1.44-1.33,1.44l-1.96,2.41s-.26.1-2.09.23-.59.2-1.73.62c-1.14.42-.33.2-.56,1.11-.23.91.04.82,0,1.3-.04.49.07.52,0,.95-.07.42.17.39.23.62.07.23.2.29.29.49.1.2.2.39.36.55s.62.49.98.68c.36.2.91.49,1.14.72s1.14.42,1.6.72c.46.29.23.46.2.68-.03.23-.03.68-.03,1.01s-.39,1.24-.39,1.24l-.91,1.14s-8.61,4.57-15.4,18.92c-6.78,14.35-7.05,43.06-7.05,43.06,0,0,3.91,10.7,4.18,13.31.26,2.61-11.48,32.1-11.48,32.1,0,0-3.13,9-2.74,21.01l-21.14,25.18-13.7-1.57-11.97,8.45s-.59,1.96,0,3.13c.59,1.17,4.79-.98,4.79-.98l7.24-5.19,5.28-1.17,2.15.78-.68,3.52,1.76,2.54h2.64s1.17.39,1.27,1.27c.1.88-.2,6.16-.2,6.16h2.64l5.28-.68h4.6c.68,0,2.15-1.76,2.15-1.76,0,0,1.96.98,2.25,1.47s1.27,2.64,1.37,3.13.2,1.76.68,2.25c.49.49,2.25.98,2.45.59.2-.39.88-1.37,1.08-1.96.2-.59,1.17-2.84,1.27-3.13.1-.29.78-.98,1.27-1.27s2.84-1.47,2.84-1.47c0,0,2.64-1.47,3.42-1.47s2.84.29,3.03.59c.2.29.59,1.57.29,1.96s-2.05,2.25-2.05,2.25c0,0-2.94.98-3.52,1.08-.59.1-1.17,1.47-1.17,1.76s.39.98,1.57,1.08c1.17.1,2.45,0,4.6,0s3.42-.1,4.31,0c.88.1,3.62.1,4.4.1h2.64c.59,0,2.15.77,3.03.63.88-.14,2.45-.7,2.54.02.1.72.68,2.97.68,3.66s-.49,5.87-.49,6.46-.33,31.31-.33,31.31c0,0-2.48,17.22-19.31,23.75h-.65s-7.7,1.96-15.4-1.83h-10.57s-1.79,8.94-39.76,4.76c0,0-34.35,4.92-63.51-15.63,0,0-6.16,4.8-34.35,8.37,0,0-13.5,4.74-19.38,23.24,0,0-.49,2.94,3.23,4.21l.29,20.84s-4.11,3.82-4.4,10.08h1.96l-.2,3.33h-2.25v12.82h2.25l-.2,10.57-2.05.49v11.25s3.23,3.82,14.48,5.48l-.88-6.07,7.44,1.27,1.37,7.14s14.68,6.65,14.97,6.95c.29.29,9.3,5.58,9.3,5.58l5.09,2.94s5.19,4.7,11.64,1.27l14.97-3.13s12.33,1.27,31.9-12.82l40.02-.68,1.66.16,4.21,2.45,2.45,3.33,2.64,2.94,2.05,2.15s1.57,1.76,1.66,2.05c.1.29,1.47,2.25,1.47,2.25,0,0,.98,2.27,1.17,2.56.2.28.98,3.32.98,3.32,0,0,1.47,3.03,1.66,3.33.2.29,1.86,2.94,2.15,3.42s1.57,2.35,1.66,2.84c.1.49.59,1.57.78,2.35.2.78.39,2.15.68,2.74.29.59.49,1.96.68,2.45.2.49.68,1.57.78,2.05.1.49.49.88.78,1.08.29.2,1.27.39,1.57,0,.29-.39.68-1.57.68-1.96v-3.62c0-.68,0-1.37-.29-2.84-.29-1.47-.59-2.45-.59-3.42s.29-2.74.29-2.74l-.1-1.57s-.59-.68-1.08-.78c-.49-.1-1.96-.88-1.96-.88,0,0-.59-1.37-.59-1.66s.39-.88.98-.88,1.96.1,1.96.1c0,0,1.17.39,1.17,0s.29-.68.39-1.17c.1-.49.2-6.56.2-6.56,0,0,0-2.25.1-2.94s1.47-6.07,1.76-6.26c.29-.2,1.66-3.13,2.05-3.82s1.66-3.42,1.76-3.82c.1-.39,1.47-3.03,1.57-3.42s3.13-6.16,3.13-6.16c0,0,1.17-2.84,1.57-3.13.39-.29,3.03-2.45,3.42-2.64.39-.2,3.91-3.33,3.91-3.33l2.74-2.25,3.52-3.13s2.64-2.15,3.03-2.45c.39-.29,1.96-1.66,2.54-2.05.59-.39,3.91-2.05,4.21-2.25.29-.2,4.44-2.45,4.44-2.45,0,0,73.07-40.45,92.38-45.93l32.88-.65v-10.31l2.81-4.14s12.72.49,14.97-11.35l7.24-.2v6.75l-2.84,4.7s-.98,2.74-1.27,2.94c-.29.2-1.96,1.86-2.45,1.96-.49.1-1.96,2.05-1.96,2.05,0,0-.1,1.37-.1,2.05v3.42c0,.59.68,2.35.68,2.35,0,0,1.57,1.17,2.35,1.47.78.29,1.57.98,2.45,1.08.88.1,1.47.49,2.25.1s1.57-.98,1.76-1.27c.2-.29.59-1.08.88-1.57.29-.49.49-1.76.59-2.25.1-.49-.39-1.96,0-2.84.39-.88-.27-2.74.01-3.42s.11-3.72.11-3.72l.05-3.62s-.51-3.52,0-4.4c.51-.88.7-3.72.7-4.5s.2-2.84.59-3.42.98-1.86,1.57-3.03c.59-1.17,1.08-4.11,1.08-4.6s.49-2.45.88-2.74c.39-.29,79.33-62.33,79.33-62.33,0,0,6-14.09,24.53-13.83,0,0,5.48-13.31,21.66-9.39,0,0,18.53-27.4,51.15-18.53,0,0,14.09-6.26,62.63,2.09,0,0,14.61-10.96,58.19,4.18,0,0,8.09-4.44,54.54,21.4l44.62,1.83s4.47-27.17,25.12-30.6l8.22-6.26h2.45v7.83l6.26.1v-13.99s15.17-21.23,25.05-24.46c0,0,.98-8.71,8.02-7.83,7.05.88,30.43-4.5,37.87-2.81,0,0,.33,2.32.33,2.45s2.25.03,2.45.03.68-5.25.68-5.25h6.98s5.76-9.2,12.46,0l1.71,1.42,1.17,1.08s1.86.29,2.1.24.83-.05,1.47-.59,1.22-1.22,1.52-1.57c.29-.34.93-1.32,1.22-1.66.29-.34.93-1.47,1.22-1.71s.88-1.3.88-1.3v-1.29h2.35v1.37l5.68-.39,1.52.15v-1.47l11.84.34,3.38-.1s1.91-6.07,10.91-2.64l3.72-.29.78-.75s-.39-.91,0-1.2c.39-.29,2.45-1.96,2.45-1.96h2.45s.29-.1,1.37,0,1.96.11,2.84-.04c.88-.15,2.05-.54,2.05-.54,0,0,1.08-.98,1.47-1.17.39-.2.98-.68,1.27-.98s.88-1.37,1.37-1.57c.49-.2.69.1,1.37,0,.69-.1,2.06,1.08,2.06,1.08,0,0,1.17.39,1.66.59.49.2,2.06.49,2.35.49s.69-.29,1.08-.59c.39-.29.49,0,1.17-.98.69-.98.98-1.17,1.17-1.57.2-.39.88-.98.88-.98,0,0-.39.49,1.86,0,2.25-.49,2.35-.29,3.33-.59.98-.29,1.66-.49,1.96-.68.29-.2.88-.98.88-.98,0,0,1.86.1,2.74.59.88.49,1.27.78,1.76,1.27.49.49,5.87,1.08,5.87,1.08,0,0,.98.98,2.54,1.37,1.57.39,3.91,1.17,3.91,1.17,0,0,.78.98,1.96,1.17,1.17.2,2.15.39,3.13,0s2.54-.98,3.13-1.37,2.35-1.17,2.35-1.17c0,0,1.17-1.17,2.35-1.57,1.17-.39,1.17-.59,2.54-.98s2.35-1.96,3.33-1.57c.98.39.98-.12,2.15-.06,1.17.06,1.76-1.44,3.13,0,1.37,1.44,1.37,3,1.96,3.39.59.39,1.37,1.76,2.15,1.96.78.2,2.15.2,2.74-.39.59-.59,1.37-1.17,1.96-1.57s1.96-1.96,1.96-1.96l1.37-.39s-.2.59,1.76,1.37c1.96.78.98.78,3.52,1.37,2.54.59,5.68.98,5.68.98h1.17s1.57-.39,2.15-.98c.59-.59,1.17-1.17,2.15-2.35.98-1.17,1.17-.6,2.15-2.06q.98-1.46,1.76-2.44c.78-.98,1.57-1.57,1.57-1.57,0,0,2.74-.39,4.89,0,2.15.39,4.31.78,5.68.78s2.74-.2,4.5,0c1.76.2,6.46.59,6.46.59l3.52.39,3.33,1.96,3.72.39s1.37-1.17,1.76-2.15c.39-.98.98-2.13.98-2.13,0,0,.78-1,1.57-1.2s4.5,0,6.07,0,6.85-.09,6.85-.09l4.7,1.65,4.31-6.46v5.28l6.26-.39v1.57s3.13.78,3.91.78,5.87-.78,6.65-1.17c.78-.39,5.09-1.37,5.09-1.37l3.72-.39s1.57-.2,2.15,0c.59.2,2.35,1.96,2.35,1.96,0,0,.59.98,1.57,1.17.98.2,4.5.78,4.5.78l3.52.59,1.76,1.17v3.13l3.13,3.13,3.72,1.37v-2.94l-1.37-2.94.2-1.76s-.78-.78,1.17-.78h10.37l1.76-2.15,2.94-2.54h3.91c.59,0,2.54,1.96,2.54,1.96l4.11-.59,1.17-2.74,2.15-1.76,7.24.78s13.83.07,15.53-11.81c1.7-11.87-7.6-15.89-7.6-15.89,0,0-19.38-3.62-25.25-17.91,0,0,7.44-16.24,2.45-23.09,0,0-12.33-.1-16.24-6.95l1.27-2.35s.2-.49.39-1.08c.2-.59.49-1.08.78-1.57.29-.49.68-1.37.68-1.37v-1.96s.2-.1-.39-.68-.88-.98-1.08-1.27c-.2-.29-.78-1.08-.78-1.47s-.1-.78,0-1.17c.1-.39,0-.39.49-.98s.68-.88,1.27-1.37c.59-.49,1.27-.88,1.57-1.17s.88-.78,1.17-.98c.29-.2.49-.49.69-.88.2-.39.1-.29.39-.88s.88-.98.88-1.47-.29-1.17-.29-1.57-.59-1.66-.59-1.66l-.68-7.24s-2.25-4.01-2.15-4.31c.1-.29.88-4.79.88-5.48s-.39-6.16-.39-6.16v-6.16l-.49-4.79-.49-3.42-3.91-3.03-9.13.65-5.48.39-5.81,2.15-7.37,4.63-2.94,1.96-6.65,2.74-1.57-.98-.59-1.76-2.15-.39-1.96,1.57v2.35l-2.15,1.96-3.33,2.35-3.91.2-3.91.98-1.57,2.15-4.89,2.54-5.48,2.94-1.96,1.57s-6.46.59-7.63.59-6.65-.59-6.65-.59l-3.33-1.37-5.68-2.54-3.33-.78-33.27.78-7.05-1.76-2.74-2.15s-2.94-.2-3.91-.2-6.26-.2-6.26-.2l-.78-1.17-2.15-2.94s-2.54-1.37-3.52-1.57c-.98-.2-3.91-.78-5.09-.98-1.17-.2-4.31-.59-4.31-.59l-3.33.39h-2.54s-7.63-1.89-7.83-1.89-8.87-3.2-8.87-3.2c0,0-7.44-2.48-7.83-2.41s-4.04-3.39-4.04-3.39l-5.35-6.72-2.22-4.57-5.45-9.33s1.27-2.54,1.66-2.74c.39-.2,11.84-7.34,12.72-8.12.88-.78,8.81-10.47,8.81-10.47l5.09-5.97,9.59-13.41,14.68-19.77,6.65-5.87,1.76-5.48.39-8.22s1.96-6.07,2.54-6.85c.59-.78,9.39-9.2,9.39-9.2l7.44-6.26s8.81-1.96,10.37-2.94c1.57-.98,4.89-7.44,4.89-8.02s3.13-3.72,3.13-3.72c0,0,6.85.78,7.63.78s8.81-.78,8.81-.78l1.17.39s0-.13.13.59c.13.72.33,1.24.33,1.24,0,0-.07.2.13.52.2.33.78.65,1.24,1.11s.59.65,1.37,1.04.39.39,1.44,1.04c1.04.65,1.11.85,2.09,1.04.98.2,1.3.39,1.89-.13.59-.52.52-.52.59-1.24.07-.72.39-1.11.07-1.83-.33-.72-.78-1.11-1.04-1.44-.26-.33-.46-.65-1.24-.91-.78-.26-1.57-.39-1.89-.78-.33-.39-.39-.85-.78-1.24-.39-.39-.85-.52-.78-.91.07-.39-.72-.59.85-.59s2.15-.13,3.59,0c1.44.13,2.61.13,3.39.13s1.44.54,1.37-.19-.46-1.05-.46-1.51-1.7-.85,0-.91c1.7-.07,2.54,0,2.54,0,0,0,.13.59.13,1.11s-.85,1.11.91,1.11,1.24-.26,2.35.07,1.5-.07,1.96.39c.46.46.65.85.46,1.44-.2.59-1.44,2.35-1.63,2.54-.2.2-.91.39-1.5.91s-1.24,1.17-.98,2.15c.26.98-.33,1.3.85,1.76,1.17.46,2.09.98,3.46.33,1.37-.65,1.44-.78,2.67-1.3,1.24-.52,1.63-.46,1.89-1.44s.26-1.57.13-2.61c-.13-1.04-.33-1.5-.33-2.28v-2.22c0-.72.07-1.76.33-2.41.26-.65.26-.59.26-1.04s.16-4.21.16-4.21c0,0,4.5-.2,5.28-.59s2.45-1.17,3.52-2.05c1.08-.88,4.01-2.54,4.4-3.03.39-.49,3.13-2.84,3.42-3.23.29-.39,3.82-3.82,3.82-3.82l5.87-4.7s4.01-4.99,4.31-5.19c.29-.2,4.01-5.58,4.01-5.58,0,0,2.35-3.82,2.94-4.01.59-.2,5.68-3.13,6.46-3.52s6.36-3.13,6.85-3.72c.49-.59,2.54-4.11,3.03-4.6.49-.49,5.97-6.07,5.97-6.07l3.23-3.72,1.66-2.74.88-1.17s1.86-.2,2.15,0c.29.2,3.03,1.47,3.03,1.47,0,0,2.45,1.86,2.84,1.86s4.6-.49,4.6-.49l2.15-1.08s5.09-2.54,5.77-2.54,4.11-.49,5.38-.69c1.27-.2,5.77-1.96,6.26-2.15.49-.2,4.7-3.52,4.7-3.52,0,0,1.47-1.47,2.15-1.96.69-.49,3.82-2.06,4.4-2.25s3.52-.68,4.7-.68,4.7.49,5.97.78c1.27.29,4.31.59,4.31.59l.88-3.23,15.56-.49s.59-1.86.88-2.05c.29-.2,1.57-2.25,2.35-2.84.78-.59,2.54-1.27,2.54-1.27h3.13c.68,0,2.74,1.57,5.77,1.86,3.03.29,3.91.29,4.4.29s4.5-.1,4.5-.1c0,0,9,1.24,16.31-3.07,51.32-32.35,76.35,25.01,105.1-5.52,28.75-30.53,267.11-4.99,267.11-4.99v-370.05h-854.88Z"/>
            </g>
            <g id="american-area">
                <path id="america" class="cls-1" d="M1360.4,240.51c-11.27,4.08-23.55,4.98-35.06,7.92-5.13.86-9.97,3.2-14.51,5.31-2.85,1.14-6.41.9-9.49,1.78-12.58,5.31-25.75,9.75-39.17,12.38-2.44,1.05-8.58.61-9.06,3.78-.03,1.37,1.21,2.76,1.52,4.31.42,2.76.14,4.77.22,7.96,0,5.33-.03,11.04.02,16.34.03,3.14,1.57,4.27,2.41,7.37.52,1.96.52,4.1.15,6.1-.37,4.77-6.54,7.26-6.14,12.07.13,1.49.74,2.93.8,4.43.2,2.78-1.9,5.91-.67,8.66,3.49,7.86,20.83,1.32,17.25,13.85-2.61,6.71-7.74,14.97-2,21.52,6.41,6.37,14.69,10.75,23.37,13.03,9.05,4.46,7.11,15.85,10.69,23.69,3.45,6.13,6.61,12.37,10.44,18.27,1.19,2.72-1.7,5.35-1.47,7.92.55,2.84,1.88,5.11,2.55,7.89.75,2.75,1.84,4.94.4,7.14-1.02,1.62-2.56,2.36-3.42,3.67-9.49,13.84-29.94,21.31-46.56,27.56-8.06,2.04-10.58,10.44-11.74,17.63-.6,1.85-1.54,2.64-2.92,3.67-2.48,1.82-5.11,4-7.45,6.18-3.51,3.4-8.08,7.98-9.46,12.81-.82,2.58-.78,5.43-2.01,7.83-2.24,4.79-7.41,6.65-12.43,5.78-2.46-.17-2.65.28-4.27.86-13.82,5.42-27.85,13.6-41.37,21.08-2.49,1.2-6.37.21-7.95,1.7-1.67,1.76-2.24,4.08-4.24,5.68-2.73,2.3-5.85,3.78-8.73,5.71-2.12,1.24-4.41,1.78-5.94,3.04-1.28.99-1.58,2.65-2.1,4.69-1.53,6.99-8.17,10.57-14.04,13.66-5.76,2.79-12.17,6.89-18.08,10.47-5.56,3.52-11.91,6.12-17.19,9.48-9.28,5.21-17.51,13.29-27.23,17.42-17.4,7.56-35.09,15.13-51.93,24.02-18.7,8.57-37.14,17.73-55.09,27.72-1.83,1.31-3.66,2.57-5.51,3.77-.38.24-.75.48-1.13.72-4.33,2.72-8.81,5.05-13.72,6.76-11.45,5.16-23.32,9.87-33.72,16.26.1.33.55,3.74-33.43,17.6-42.48,16.86-67.77,25.23-127.12,44.81-5.17,1.82-10.03,3.2-15.25,3.34-.95.11-.89.12-1.33.19-.16.04-.49.11-.65.14-4.5,1.09-7.53,5.23-11.63,6.97-7.91,2.92-14.75,6.13-23.28,7.81-5.33,1.2-11.14,1.67-16.3,2.97-5.72,2.13-11.24,4.94-17.15,6.66-15.29,6.39-31.41,10.26-45.62,18.37,0,0-142.44,8.26-252.97,73.84,0,0-556.99,232.77-428.91-28.19h0c30.01-57.57,58.55-96.94,58.55-96.94,0,.39,1.08,2.09,1.08,2.09,0,0,.41,1.31.54,1.7s1.22.91,1.63,1.05,2.3,0,2.3,0c0,0,1.49-2.03,1.76-2.39s.81-1.27.81-2.45-.14-3.14,0-3.53-.14-1.57,0-2.35-1.28-1.44.04-2.35c1.32-.91,1.99-2.09,2.67-3.14s1.08-1.57,1.76-2.09c.68-.52,1.49-1.31,2.3-2.09s.81-1.7,2.3-1.83,3.25-.65,4.06,0,2.98,1.57,2.98,1.57c0,0,.54.65,1.49.78.95.13,1.9.39,2.71.26.81-.13,2.3-1.05,2.3-1.57s-.27-1.05,0-2.35c.27-1.31,0-9.93,0-9.93l-.54-1.57-3.52-1.57-3.39-.92-1.9-1.57.14-.91h3.79s.81.39,1.22.65c.41.26,1.76.78,2.17.92.41.13,1.19.26,2.15.26s1.5.13,2.72-.13c1.22-.26,1.76-.52,3.12-.78,1.35-.26,1.08-1.05,2.84-.91,1.76.13,2.03-.16,3.25-.01s3.39-.36,3.93-.04,1.35-.11,1.35-.11l-.95-2.45s-2.17-.52-2.84-.92-1.49-3.66-1.49-4.05.54-3.53.54-3.53h3.79l2.03-1.7s-.41-.65-.68-1.18c-.27-.52-2.03-1.96-2.57-2.22-.54-.26-1.9-1.18-1.9-1.18,0,0-1.63-1.05-2.03-1.31-.41-.26-1.35-.78-1.22-1.18s-.27-2.35-.27-2.35c1.22-.13,2.44-.65,3.39,0s1.49,1.83,1.9,2.09,1.63,1.31,1.63,1.31c0,0,.95.52,1.76.52s1.35.13,1.76-.13c.41-.26,1.08-.52,1.08-1.44v-2.67l-1.35-5.04-.54-4.18-.81-2.75s.41-1.7.81-2.22c.41-.52,1.9-3.01,1.9-3.01v-5.1l.95-4.84.54-4.05s2.44-4.84,2.84-5.36c.41-.52,3.66-7.71,3.93-8.24.27-.52,3.66-6.14,3.66-6.67s1.22-11.76,1.22-12.29,2.17-5.49,2.17-5.49l3.93-1.44,1.39-4.18,2.95-5.62,3.52-5.88,4.6-4.97,3.39-3.4,5.82-3.14,8.53-1.83s2.3-2.48,3.12-3.27,3.12-3.27,3.93-4.05,2.57-1.83,3.93-2.48,1.22-1.05,2.71-1.18c1.49-.13,4.6.13,7.18.13s5.55.39,6.91.26,3.39-1.05,3.39-1.05c0,0,3.79-4.97,3.93-5.49.14-.52,1.9-3.01,3.12-4.58,1.22-1.57,2.44-3.14,2.98-3.66.54-.52,2.17-4.18,2.44-4.71.27-.52.95-2.22,1.22-3.66.27-1.44-.95-1.96,0-3.14s1.08-1.57,1.63-3.01.68-1.96,1.08-3.14c.41-1.18-.41-1.7,0-2.74s1.05-1.31.12-2.22c-.93-.92-.79-1.44-2.01-2.48-1.22-1.05-2.17-1.18-2.3-1.96s-.14-1.83-.27-2.48c-.14-.65-.54-11.11-.54-11.11,0,0,.14-.91,1.35-1.7s2.71-2.88,3.52-3.53c.81-.65,2.44-3.01,2.98-3.79s1.63-2.88,2.3-3.79,1.08-3.01,1.76-3.53c.68-.52.68-2.75,2.44-3.01,1.76-.26,2.98-.65,5.15-1.05,2.17-.39,5.69-.13,6.64,0,.95.13,3.52,1.31,3.52,1.31l.81-3.79s-.68-1.18-.81-1.57-1.9-.78-2.71-.78-1.22-1.7-1.22-1.7l.81-.91h1.9c.68,0,1.9-.26,2.03-.92s.68-1.7,0-2.22-1.22-.92-1.76-1.31c-.54-.39-.14-1.31-1.35-1.96-1.22-.65-1.9-1.05-3.25-1.7-1.35-.65-2.03-.52-2.17-1.18-.14-.65-.54-1.7-.54-1.7,0,0-.68-1.31-.68-2.35s.14-1.96.54-2.88c.41-.91,2.3-3.66,2.57-4.18.27-.52.68-1.31,1.63-1.83.95-.52.27-1.18,3.25-1.05,2.98.13,6.37.88,7.04-.02.68-.9,2.3-2.07,2.84-2.6.54-.52.95-.65,2.03-1.57,1.08-.92,1.49-1.05,2.44-1.96.95-.92,0-1.05,2.44-1.7,2.44-.65,3.12-.91,4.33-1.31,1.22-.39,2.03-.52,3.39-1.18s1.22-.91,2.98-1.05,3.79-.52,5.15,0c1.35.52,1.49.52,2.44,1.05.95.52,1.49.78,2.57,1.18s.27.26,2.84,1.05,3.25.78,4.6.78.68-.39,2.3.13c1.63.52,1.9.78,2.17,2.22s.68,3.01.81,3.79c.14.78-.14,2.09,0,2.61.14.52-.06,1.83.04,2.35.1.52.01,3.01.01,3.01,0,0,1.98,1.7,2.52,1.7s.68-.26,1.9.13c1.22.39-1.08.52,2.03.78,3.12.26,2.03.39,4.74.65s2.03-.13,5.15.52c3.12.65,3.93.91,4.47,1.57.54.65.68,1.96.68,1.96,0,0-.2.13-1.15.26-.95.13-2.3.07-2.71.07s-.81-.26-2.71-.26-1.42-.26-2.51-.26-1.9,0-2.71-.13-.95-.59-2.71-.72-1.49-.72-2.71-.85c-1.22-.13-1.42-.65-2.64-.91-1.22-.26-3.59-1.83-4.94-1.96s-6.09-.59-6.09-.59c0,0-2.84,2.42-3.12,3.07-.27.65,4.06,4.51,4.06,5.29s-.81,1.83.68,2.22c1.49.39.95.26,2.44.92,1.49.65,2.44.65,1.9,1.31s-2.57.52-4.88,1.57c-2.3,1.05-4.06,2.22-4.2,2.88s-.68,2.09-.54,2.88-.68.39,1.22,1.18-.81,3.79,2.57.92c3.39-2.88,2.17-2.88,3.93-4.58,1.76-1.7,0-3.01,1.76-1.7,1.76,1.31,1.63,1.57,2.17,2.61.54,1.05,1.08.52.95,2.61-.14,2.09-.27,2.61-.27,3.53s.82,2.15.82,2.15l10.15,1.12,21.94-25.23,14.76-53.2-4.33-13.33.42-9.25,1.16-11.62,1.8-10.27,3.03-9.97,3.73-7.14,5-6.82,4.57-4.49v-6.59l-1.28-3.4-.81-4.05s-.27-5.23-.54-5.62c-.27-.39-3.25-4.44-3.52-4.97-.27-.52-3.93-6.27-3.93-6.27,0,0-2.3-3.66-2.44-4.05-.14-.39-6.37-12.16-6.5-13.07-.14-.92-2.57-6.93-2.84-7.71-.27-.78-1.9-5.23-1.9-5.23,0,0-.68-.92-.81-2.35s-1.35-3.79-1.49-5.23-.41-2.61-.54-3.66-1.35-6.27-1.35-6.27c0,0-1.49-4.18-1.49-4.71s-.14-4.44-.41-6.27c-.27-1.83-1.49-6.41-1.49-6.41,0,0-1.22-2.75-1.35-3.79s-.68-3.53-.68-4.84-.41-5.75-.54-6.27-.95-15.56-.95-15.95-.68-18.3-.68-18.69,0-14.64.14-15.29c.14-.65-.27-6.27-.41-7.06-.14-.78-3.25-8.24-3.25-8.89s-2.3-6.01-2.3-6.01l-3.66-11.11-2.57-8.37-3.66-13.59s-2.03-10.46-2.03-10.85-2.17-9.02-2.17-9.02c0,0-1.49-10.85-1.63-11.37-.14-.52-1.22-5.36-1.22-6.01s.41-11.63.41-11.63c0,0,.54-12.94.41-13.46-.14-.52-.95-7.58-.95-8.1s-2.3-5.62-2.3-5.62l-2.44-9.41-2.71-10.07s-2.98-12.03-3.25-12.42c-.27-.39-9.75-15.95-9.75-15.95l-9.21-19.48s-4.88-9.41-5.01-9.8-5.96-6.54-5.96-6.54l-3.39-4.97S118.08-135.45-22.53-135.45-124.63,145.18-263.64,69.02v929.67h1995.56v-178.21l-713.51-.78c142.18-.46,281.49-.82,342-.02l371.52.79V239.51c-177.51-35.65-371.52,1-371.52,1Z"/>
            </g>
            <g id="major-roads">
                <path id="road-56" class="cls-5" d="M80.76,620.15l2.44,3.39,1.96,3.39s1.17,2.87,1.3,3.26,2.22,4.44,2.22,4.44l3.13,3s1.57,2.22,2.74,2.87,5.22,2.48,5.94,2.87,5.55,1.12,6.2,1.6,4.7,1.3,5.48,1.87,7.18,2.4,7.18,2.4l4.31,1.17s2.61,1.04,3.13,1.17,5,2.48,5,2.48l4.66,3.13,3.26,3.13,12.4,9.52,10.7,8.61,5.48,4.18,4.57,3.39s2.61,2.22,3.39,2.74,1.44,1.04,3,2.61,3.52,3.26,4.31,4.04,2.87,2.22,3.39,3,1.3,1.7,1.96,2.74,1.83,2.22,2.61,2.61,8.22,0,8.22,0l13.31.17h4.7s1.17-.04,2.35.61,2.35,1.7,3,2.09,1.04.65,1.57.78,3,1.04,3.91.65,1.7-.91,3.13-1.04,4.96-1.17,5.74-1.44,2.74-1.17,4.31-1.7,14.22-6.92,14.22-6.92c0,0,4.96-1.7,6.39-2.74s4.83-3.26,5.48-3.52,3.78-3.26,4.89-3.78,5.16-4.44,5.16-4.44c0,0,2.35-2.09,3.65-2.35s7.18-2.35,7.18-2.35l5.61-1.96,6.52-2.87,9.39-3.65,9.13-4.04,7.31-4.18,10.83-5.22s11.35-6.26,11.87-6.65,8.61-5.35,8.61-5.35c0,0,5.87-3.52,6.52-3.65s6.78-2.87,7.44-3.26,4.83-1.57,5.35-1.83,4.18-2.35,5.48-3.52,3.78-5.09,4.31-6.13,2.09-5.35,2.35-5.35,3-5.61,3-5.61l1.04-4.57s1.7-1.57,2.09-1.3,3.91,2.35,3.91,2.35c0,0,1.44.91,1.96,1.04s2.74.78,2.74.78c0,0,2.09.13,3.13-.65s3.13-3.06,4.57-3.55,4.83-2.71,5.74-3.23,4.57-3.65,5.09-3.78,4.04-2.87,4.04-2.87l11.74-9.52,7.57-5.85,7.05-6.16,9.92-7.96,6.65-3.91,9.26-5.22,5.22-3.52,7.05-5.48s6-5.48,6.39-5.74,6.78-6,6.78-6l6.65-4.96,5.48-4.83,7.18-6.13,7.96-7.57,12.53-10.05,9-8.09,10.57-8.48s3.39-3.26,3.91-3.65,5.09-4.57,5.09-4.57l4.7-5.87,2.87-4.7,2.87-4.31,4.57-6.26,4.31-5.09,3.52-3.91s4.12-3.21,4.73-4.22,4.14-3.87,4.14-3.87l5.72-2.87s3.81-.91,4.72-1.04,3.13-1.04,4.04-1.04,3.52.26,4.04,0,4.44,1.04,5.74,1.3,3.7,1.3,4.92,1.83,4.09,1.7,4.87,1.96,3.39,1.44,4.04,1.7,5.09,3.16,5.09,3.16l4.57,1.12s4.18-.15,4.57,0,5.35,0,5.35,0h18.36l3.82,1.05s1.96-.02,2.48,0,4.7,0,4.7,0l2.74,1.58s1.44.72,2.09,1.08,3.33,1.01,3.95,1.14,3.62.13,4.14.13,5.22-.39,6-.39,5.09-.26,5.09-.26l3.39-.62,3-.55,3.13-1.3,2.22-.8,8.35-6.9,5.09-4.04,3.91-2.71,8.09-6.04,4.04-3s3-2.22,3.65-2.48,3-1.57,3.91-1.7,10.83-.65,10.83-.65c0,0,7.83-.13,8.22,0s6.92.78,6.92.78l6.92.91,5.35-.13s5.09-.39,6.26-.39,4.57-.26,4.57-.26c0,0,2.61-.64,3.65-.97s5.09-.99,5.74-1.25,4.31-.91,4.96-1.17,2.61-.91,2.61-.91c0,0,1.7-.26,3.13,2.35s2.48,5.09,2.48,5.09l1.44,1.7,1.17,1.17s1.83.91,2.22,1.17,2.22.65,2.87.78,1.7-.13,1.83.13,4.75.39,4.75.39c0,0,1.77-.65,2.16-.65s3.65-1.04,3.65-1.04l3-.52,5.35-1.17,10.44-1.52,7.57-1.35s14.27-4.17,15.62-4.17,12.11-2.36,12.11-2.36l12.46-1.63,11.48-2.8h7.31l13.83-6,8.12-1.92s4.93-.54,5.71-.74,8.09-1.67,8.09-1.67c0,0,6-3.42,7.05-2.54s3.65,0,3.65,0l4.16-3.29.8-3.65,11.22-4.23s4.7.38,5.74-.56,12.04-3.28,12.04-3.28l7.8-2.62s6-3.12,6.78-2.6,7.31-2.09,8.09-2.09,7.57-3.29,7.57-3.29l8.87-1.9,6.26-1.72s10.18-5.88,10.18,5.08v12.99l1.57,3.97,1.96,2.61,2.48,2.61h3.39l4.18,1.44,3.85.55h3.2s1.83.62,2.61-.55c.78-1.17,4.18-3.78,4.18-3.78l5.18-2.61,4.22-4.23,4.44-.56,7.83-1.47,7.83-1.81h25.83l3.1,3.84.07,4.49,1.53,4.7s-.52.33,0,1.99c.52,1.66,1.04,4.22,1.04,4.22l4.44.74h12.62s6.69.03,8.13,0,6.5-.74,6.5-.74c0,0,2.63-1.9,3.42-2.16s3.39-1.04,4.31-.52,1.83,1.17,3,1.83,3.13,1.76,3.91,1.6,4.57.03,5.22,0,5.87.03,6.52,0,6.13-.1,6.65,0,2.87.29,3.91,0,2.35-.8,3.13-.74,2.09-.6,2.74-.73,2.48-1.17,3-1.57,1.17-1.17,1.7-1.3,6.26-.46,6.65-.62,9.26,0,9.26,0h23.36l9.92-.55h4.91"/>
                <polyline id="road-55" class="cls-5" points="220.08 704.57 220.86 690.34 220.86 680.43 220.86 672.86 220.86 667.51 232.21 667.51 232.21 641.15"/>
                <path id="road-54" class="cls-5" d="M93.03,639.14l6.36-1.9,4.83-.91,4.04-.65s3.39-.78,3.91-.78,3.91-.65,4.44-.78,2.35-1.17,3.26-1.57,3.52-1.24,3.52-1.24c0,0,2.61-.98,3.52-1.11s4.87,0,4.87,0l2.44-.78s1.3-.65,2.22-.78,2.48.52,3.26,0,3.13.1,4.18-.02,3.65.54,3.65.54l2.87-.13,5.61.13h4.04c.39,0,4.96.13,5.61.13s4.83.52,5.48.65,4.96.52,5.35.52,4.57.13,4.57.13h4.44c.52,0,5.35.72,5.35.72h30.01l3.65.72,5.22.26,4.96.91h4.96s3.39.64,3.78.58,4.31,0,4.31,0l4.7.72,1.65,1.12"/>
                <line id="road-53" class="cls-5" x1="139.7" y1="660.33" x2="139.7" y2="615.65"/>
                <path id="road-52" class="cls-5" d="M129.53,620.8l5.71-1.44h3.43s4.18.78,4.83.72,4.35.82,5.01.75,4.21,1.15,4.21,1.15c0,0,3.34.65,4.16.71,1.2.08,4.28.46,5.48.71,1.68.35,5.43.32,5.43.32,0,0,3.29.13,3.77.2.41.06,3.13.2,4.31.2s3.57-.08,4.6.05,4.5.07,5.28.2,3.87.1,5.04.23,4.66-.48,5.58,0,3.38.42,4.42.55"/>
                <line id="road-51" class="cls-5" x1="194.23" y1="624.42" x2="194.23" y2="631.3"/>
                <polyline id="road-50" class="cls-5" points="393.48 609.97 387.08 603.97 385.52 602.4 381.99 599.66 377.82 597.58 374.95 595.62 371.17 592.88 365.95 589.62 363.34 586.8 358.9 584.14 354.99 579.96 352.38 577.48 349.25 574.87"/>
                <path id="road-49" class="cls-5" d="M303.79,617.46l7.39-7.14,4.35-4.01s2.54-2.25,2.84-2.54,2.64-2.59,2.89-2.74,2.69-1.86,3.03-2.25,4.08-3.92,4.08-3.92c0,0,2.74-3.01,3.13-3.53s1.3-2.61,1.7-3.13,2.09-1.86,2.35-2.82,3.22-3.96,3.22-3.96c0,0,3.69-1.57,4.22-1.96s3.13-1.83,3.78-2.48,2.61-1.83,3.13-2.61,1.96-4.96,1.96-4.96l3.91-7.31,2.48-3.65,2.09-2.48,3.78-3.39,3-2.74s2.09-1.83,2.61-2.22,4.18-3.78,4.18-3.78l4.18-2.74,4.57-2.35,4.18-1.57,4.96-2.48,4.57-1.96,5.22-1.96,3.26-1.17,4.18-2.48,4.83-1.57,4.44-1.83,2.09-2.48,5.87-6.13,2.09-3.13,2.35-3,3.65-1.17h5.35l5.61-.65,4.44-1.7,3.52-2.74s3-3.52,3.39-3.78,3-2.87,3-2.87l1.83-2.22,4.83-1.04,3-2.87,2.61-2.48,63.02-63.02,2.74-1.44,3-1.83s3.78-2.09,4.18-2.35,3-3.26,3.39-3.78,3.26-3.65,4.18-4.44,4.83-3.65,4.83-3.65l2.48-3"/>
                <path id="road-48" class="cls-5" d="M401.57,530.77l2.22,2.61.65.78.52,2.22s.78,1.57.78,1.96.39,1.96.65,2.48,1.57,1.96,1.83,2.35,1.3,1.57,1.7,1.96,1.83,1.57,2.35,2.09,2.48,2.22,2.48,2.22c0,0,2.48,2.35,2.87,2.74s3.65,3.78,3.65,3.78l7.7,7.96,1.96,2.35-3.65,5.22,8.22,9.92,3.39,3.96,5.35,5.82"/>
                <path id="road-47" class="cls-5" d="M338.01,582.19l-17.43-17.53s-7.05-8.42-7.34-8.81-6.46-6.56-6.46-6.56l-4.7-4.79-6.16-6.46-4.31-4.7-2.94-2.58-3.03-3.78-2.64-1.86-.98-3.03v-7.53h-13.6v-38.16l.59-18.98s.29-1.47.49-1.76,1.57-2.94,1.76-3.42.68-2.54.98-3.62.49-6.26.49-6.26v-8.84s.53-14.94.53-15.14.26-6.78.26-7.05.13-7.37.13-7.37c0,0,.26-5.87.26-6.07s.39-8.22.39-8.22h18.33v-18.73"/>
                <path id="road-46" class="cls-5" d="M282.02,514.56l4.21-.68,2.64-1.47s3.82-.59,4.21-.59h6.65s9.3-.1,9.79,0,8.9.01,9.39-.04,8.32,0,8.32,0l6.95-.02h8.42l.78-19.8h14.68l.68-50.69s.49-11.25.49-12.13-.2-11.94,0-12.23,0-17.03,0-17.03l.46-28.83"/>
                <polyline id="road-45" class="cls-5" points="342.59 511.75 342.59 517.07 342.59 520.33 342.59 523.07 390.21 523.07 393.48 524.64 395.43 525.68 397.13 527.25 400.91 530.77"/>
                <path id="road-44" class="cls-5" d="M430.66,508.98l-.49-3.62s.2-3.13.24-3.42-.73-1.96-.73-1.96l-1.57-1.66-1.86-1.27-1.86-1.37.98-33.56-.2-6.56h7.34l-.77-29.81v-18.79l-.56-13.05-.39-22.87"/>
                <polyline id="road-43" class="cls-5" points="272.72 434.87 297.84 434.87 309.32 434.87 314.15 435.53 318.45 436.18 357.34 436.18 431.75 436.18 453.95 436.86 456.89 437.45 489.42 469.99"/>
                <path id="road-42" class="cls-5" d="M480.76,96.34l15.95,13.49,6.95,7.44,2.74,6.46s3.91,5.19,4.01,5.48,6.21,4.31,6.21,4.31l7.58,4.21,6.95,4.11v1.47l1.27,12.23s2.84,17.61,2.84,17.91,4.4,21.92,4.4,21.92l2.74,20.26,2.15,14.78,2.84,16.93,2.25,12.24s1.76,13.6,1.76,13.99,1.66,9.49,1.66,9.79,1.37,11.94,1.37,11.94h6.26c.49,0,5.09,1.27,5.77,1.57s4.11,2.74,4.11,2.74l5.48,3.03,6.36,4.4,2.05,3.82,4.21,7.63s2.74,7.34,2.74,7.63,5.28,12.82,5.28,12.82c0,0,3.52,8.32,3.62,8.71s2.94,5.87,3.33,6.49,2.74,7.5,2.74,7.5l3.03,9.33.73,7.21v7.93l-1.02,4.4-2.45,3.33-3.1,2.45-3.26,3.23v2.74l1.37,5.28,1.89,5.77,1.44,3.91,1.05,3.58,1.62,3.14,1.3,3.52s1.83,5.09,1.83,5.84,1.96,3.69,1.96,3.69l3.12,3.26,3.15,2.61,2.87,3.13,3.39,2.98,2.38,3.16s1.93,3.39,1.93,3.78.98,3.72.98,3.72v17.55l-1.76,3.52-3,3.26-2.48,2.52"/>
                <path id="road-41" class="cls-5" d="M642.1,444.47l1.23-8.13s-.47-3.59,0-4.27,0-9.39,0-9.39l-1.23-8.51s-1.83-4.01-1.93-4.4-2.61-6.56-2.61-6.56c0,0-.62-3.91-.72-4.6s-.86-4.31-.97-5.09-2.23-6.26-2.23-6.26l-1.69-5.73s-1.76-4.54-1.86-4.93-2.51-5.42-2.38-5.65-.55-2.69-.55-2.69l11.25-3.21,3.6-1.31,6.64-2.41,7.47-2.84,6.75-2.54,10.86-3.91,10.76-4.31,4.53-2.05,3.89-1.76,17.09-6.49,10.27-3.26,7.09-3.65,9-2.87,7.83-2.87,8.22-1.61,7.05-2.17,9.13-1.7,8.09-1.83,8.22-1.57,8.09-1.44s7.31-1.7,7.83-1.96,9.26-2.35,9.79-2.35,11.74-1.44,12.53-1.44,10.31-2.48,10.31-2.48l6.49-1.79,3.78-.65h3.03c1.08,0,3.42-.49,4.31,0s3.52,1.08,4.01,1.08,2.35-1.02,3.23-1.29,3.72-1.35,4.01-1.54,2.54-2.05,3.03-2.35,2.25-1.76,2.64-2.05,1.47-.88,2.54-.88,6.75,1.37,6.75,1.37c0,0,3.82,1.17,4.7,1.66s4.6,2.35,4.6,2.35c0,0,1.66,1.47,3.72,2.15s6.87,1.57,7.69,1.57,7.57-.68,9.04-.68,5.38-.1,6.56-.1,5.24,1.17,5.24,1.17l1.39,3.23,1.44,2.64s1.96,1.17,1.96,1.96.26,2.22,0,3-.52,2.09-.52,2.61-.52,1.44.52,2.35,3,1.7,3.39,2.09,1.17,1.96,1.44,2.61-1.17,1.3.78,1.44,4.57-.52,5.22-.52,3.52.13,4.18,0,1.96-.65,2.74-.65,3.78-1.57,3.78-1.57l1.83-1.04,2.48,1.96s.39,1.3,1.24,1.7.59.52,2.15,1.3,1.7.37,3,1.16,2.35,1.19,4.04,1.58,2.35.78,4.18.91,3.65.26,5.22.39,2.61-.13,4.18.13,2.87.39,4.57,1.04,1.83.52,3.78,1.57,2.22,1.17,4.31,1.96,3.78,1.3,4.57,1.83,3.65,2.09,4.57,2.61,1.96,1.3,3.65,1.7,1.83.39,2.74.91,0,0,2.09,1.44,2.94,2.87,2.94,2.87c0,0,.59.65.72,1.44s.78,2.09,1.17,2.74,1.17,2.22,1.44,2.61,2.61,4.31,2.61,4.31c0,0,1.44,3.25,1.7,3.52s1.44,2.22,1.57,3,.39,2.54.78,3.55.78,4.01,1.04,4.93.95,2.74,1.13,4.44.44,3.13,1.22,4.7c.78,1.57,2.22,4.04,2.61,4.57s3.88,4.7,3.88,4.7"/>
                <path id="road-40" class="cls-5" d="M688.65,345.83l2.83,3.46,2.74,1.04h2.61s3.07-.13,3.42,0,2.19-.13,3.1,0,1.98-.06,3.34.04,3.84-.07,4.49.01,2.74-.31,3.91.02,2.97.45,4.03.78,3.41,1.42,4.06,1.46,2.22.82,2.87,1.15,1.96.4,2.61,1.15,2.35,2.19,2.74,2.71,2.09,3.33,2.61,3.42,2.09,1.79,2.22,2.32,1.04,1.96,1.57,2.74,1.96,3.39,2.22,3.59,1.44,2.45,1.96,3.02,1.83,2.66,2.22,3.18,1.57,2.35,2.09,2.87,2.87,5.61,2.87,5.61l1.7,3s1.04.97,1.44,1.92,1.04,2.12,1.44,2.78.65,1.04,1.04,1.7,1.44,3.65,1.57,4.18-.39,1.17,0,2.09.65,2.22.91,3.26.78,3.52,1.17,4.31,1.44,2.22,1.96,2.74.78,1.04,1.96,2.48,2.61,2.87,3.26,3.78,2.87,2.61,2.87,2.61l3.39,1.96,3.26,1.3"/>
                <path id="road-39" class="cls-5" d="M642.01,363.73l1.68,3.16,1.17,1.96s.88,1.82,1.08,2.08,1.57,2.51,1.66,2.81,1.86,3.33,1.86,3.33l1.47,3.03,2.05,6.16v1.52"/>
                <path id="road-38" class="cls-5" d="M763.96,327.56l1.96,4.89,1.96,5.09,2.74,8.3,2.35,6.8,1.17,5.46.98,1.76h3.91l3.65-.39,4.04-.46s2.74-.59,3.07-.65,2.87-.78,3.13-.78,4.04-.33,4.37-.26,2.94.39,3.07.59.78,1.83.78,1.96.78,2.41.78,2.41c0,0,.65,2.67.65,2.87s1.5,5.8,1.5,5.8l1.37,4.37s.68,3.13.78,3.72.88,4.31.88,4.6.68,2.64.78,2.94.98,2.94,1.17,3.62.78,4.01.88,4.31.29,3.23.59,4.31.98,3.13,1.76,4.21,2.64,3.03,3.52,3.72,3.91,3.52,3.91,3.52l2.64,2.45,3.91,2.54s2.64,1.57,2.94,1.96,3.35,3.01,3.35,3.01"/>
                <path id="road-37" class="cls-5" d="M738.13,349.29l-3.42-3.46-2.82-2.94-2.96-1.84-2.54-4.11-.98-2.94-1.17-2.45-2.81-6.65-3.36-8.12-2.74-6.36-3.33-8.42-2.94-7.53-4.31-10.18-3.42-7.83s-3.33-7.63-3.33-7.93-3.33-8.81-3.33-8.81l-6.46-15.46-2.05-2.74"/>
                <path id="road-36" class="cls-5" d="M408.16,370.6l3.33-3.61,4.31-.78h22.31c.39,0,9.69.29,9.98,0s31.8-.59,32.68-.49,17.22-.02,17.22-.02h18.4s10.18.54,10.57.54,9,0,10.31.13,7.83.78,8.35.78h9c.91,0,9.92,1.21,10.57.99s7.31.21,7.83,0,3.91-.86,4.44-.86,5.61-2.09,6.13-2.35,4.83-1.83,5.35-1.96,7.05-1.66,7.05-1.66l8.74-3.3"/>
                <path id="road-35" class="cls-5" d="M393.35,370.6s.46-24.97.59-25.36,0-16.18,0-16.18h4.63v-27.66h4.44s2.81-.72,3.26-.78,3.33-.85,3.59-.91,1.57-.85,2.09-1.11,2.61-1.5,2.81-1.63,3.46-1.83,3.46-1.83c0,0,2.74-1.76,3.26-2.02s3.52-1.96,4.04-2.28,3-1.37,3.52-1.63,3.65-1.88,3.98-1.88,2.61-1.91,2.61-1.91l3-2.28,7.96-5.48,6-6s3.91-4.18,4.18-4.57,5.35-8.09,5.35-8.09c0,0,4.44-6.13,4.57-6.52s4.18-5.16,4.18-5.16l5.35-7.63,2.74-5.87s1.44-7.96,1.83-8.35,0-6.13,0-6.13c0,0,.09-9.66.17-10.05s1.65-11.61,1.65-12.13v-6.26c0-.65,1.04-8.61,1.04-8.61l1.17-10.18.65-8.09s-1.04-2.22-1.17-2.87-.78-1.89-.78-3.16-1.17-6.75-1.3-7.53-.26-3.39-.26-4.04-1.17-7.8-1.17-7.8v-6.81s-.52-20.62,0-21.27,0-11.35,0-11.35l1.04-13.57-.13-5.34v-9.93l.65-5.48s.13-3.91.13-4.31-1.96-2.05-2.22-2.72-1.3-2.89-1.3-2.89c0,0-.52-4.83,0-5.61s1.17-6.92,1.17-6.92l1.7-15.79s0-5.61.13-6-1.17-6.65-1.17-6.65c0,0-.91-4.7-.91-5.09s-1.04-3.52-.91-3.91-.65-4.96-.65-4.96"/>
                <path id="road-34" class="cls-5" d="M429.03,289.2v6.07l.46,3.91v2.74l.68,2.05c.1.29,1.08.78,1.86,1.08s3.42.88,3.91,1.08,3.39.68,3.46.88,2.02,1.08,2.41,1.37,2.74,1.96,2.84,2.25.52,1.37,1.63,1.57,2.68.49,3.46.59,5.19,1.17,5.77,1.17,2.54-.49,3.13,0,3.23,1.17,3.72,1.27,2.84.59,3.52.59,3.23-.29,3.72,0,3.42.88,3.91,1.08,3.82.78,4.21.78,4.21.49,4.21.49l1.86-.59s.88-1.47,1.08-1.86.39-2.05.59-2.35.88-2.25.98-2.54l.88-2.64,1.08-3.82.68-3.13s.88-2.64.88-2.94.49-2.64.59-2.94-.2-1.57,0-2.05.53-1.67.02-1.91-1.98-1.42-2.27-1.42-1.17.1-1.37-.78-.59-3.82-.59-3.82l-.88-3.13s.59-1.76,0-2.25-.29-.68-1.37-.98-2.74-.39-3.33-.59-2.45-.49-2.45-.49l-1.76-7.93s-.59-3.72-.59-4.21.1-2.94-.1-3.52-.78-2.84-1.17-3.52-2.45-2.54-2.84-2.74-2.74-1.08-3.13-1.37-2.72-1.16-2.72-1.16"/>
                <path id="road-33" class="cls-5" d="M486.24,311.4l3.27.83,2.74.65v2.09l-.52,3.2-.88,4.98-1.6,6.7-.91,4.18-1.44,4.18-1.44,4.31-.65,4.66-.23,1.3,6.36,2.15s4.83.85,5.15.91,3.62.2,3.98.23,1.7.16,1.7.16v22.51s-.33,1.76,0,2.15.52,1.76.82,2.25,1.03,2.15,1.57,2.68,1.37,2.02,1.86,2.5.98,1.27,1.57,1.86,1.27.98,2.45,1.76,3.91,1.86,4.79,2.15.88.2,1.96.68,1.66.88,2.15,1.47,1.08,1.47,1.37,1.96.03,1.17,1.04,1.66,2.19,1.17,3.56,1.37,1.17-.29,2.35,0,2.94.78,4.5.88,2.84-.59,3.82,0,1.76.78,2.54,1.17,1.17.68,1.96,1.17.88,1.04,2.54,1.6,2.84.95,3.82,1.24,2.35.72,3.52.95,1.76-.13,2.64,0,1.17.36,1.76,0,3.52-1.53,3.52-1.53l4.21-.65,5.38-1.01s2.64-.49,3.42-.49,4.5-.39,4.5-.39c0,0,.78.2,1.47,0s.98-.59,1.57-.78.39-.59,1.96-.68,2.74-.2,3.72-.1,1.37.2,2.25.49,1.57.88,2.25,1.27,1.17.78,2.05,1.08,1.47.46,2.15.62,1.57-.26,2.15,0,2.06.52,2.59,0,2.1-1.79,2.79-2.28"/>
                <path id="road-32" class="cls-5" d="M492.25,312.88l3.39,1.04s3.98.72,4.44.72,3.13.39,3.85.46,1.96.33,2.61.33,1.76-.33,2.28-.91,1.57-2.02,1.83-2.67.78-1.04.78-1.04c0,0,2.35-.33,2.87,0s2.81.78,3.39.91,3.07.59,3.65.78,3.52.52,4.37.65,2.48.2,3.59.46,2.35.39,3.39.65,3.33.85,4.5,1.17,2.61.46,3.59.72,1.83.46,3.13.78,2.28.52,3.72.65,3.39.26,4.5.13,1.76-.2,2.61-.59,1.24-.98,2.48-1.5,2.22-1.46,2.74-1.42,6.03-1.81,6.03-1.81l8.32-2.35s4.79-1.96,5.19-2.05,5.58-1.96,5.58-1.96c0,0,6.16-2.45,6.46-2.45s5.87-2.54,6.02-2.64,16.1-6.16,16.1-6.16l12.04-3.38,16.93-7.19,12.13-4.21s4.89-2.05,5.28-2.25l2.15-1.08,3.85,10.89s1.83,3.91,2.09,4.44,4.32,9.79,4.32,9.79l3.12,7.57,2.28,6.78,4.24,10.05,3.13,5.48s-.26,1.83,0,2.48,1.11,2.48.95,2.87-.06,1.7.02,2.09,2.53,5.99,2.66,6.64"/>
                <path id="road-31" class="cls-5" d="M473.11,244.09l12.94-.88s8.42-1.37,8.61-1.37,8.35-1.14,8.35-1.14l9.51-.82s4.98-.65,5.3-.72,3.85-1.44,5.94-1.5,6.52-.72,7.37-.78,4.83-.98,5.55-1.04,5.09-.59,5.09-.59l8.15-.91,11.42-1.57s5.35-.65,5.94-.65,6.92-.78,6.92-.78l8.42-1.63,7.95-.91,7.38-.98,6.72-.85,4.96-.78-6.92,10.86-12.92,19.08-7.53,12.53,3.98,36.93"/>
                <polyline id="road-30" class="cls-5" points="609.61 226.18 635.25 186.64 646.24 170.6 659.74 151.42 663.95 151.02 682.74 121.28 697.22 97.4 701.14 98.97 726.19 61 721.49 33.99 726.19 30.47 726.19 12.85 809.56 1.3"/>
                <path id="road-29" class="cls-5" d="M662.19,276.67l30.47-44.75-64.95-35.62-11.38-6s-10.05-5.94-10.24-6.07-17.94-9.98-17.94-9.98l-21.72-11.74-12.59-7.57-14.74-7.96-5.15-3.2-2.87-2.02"/>
                <path id="road-28" class="cls-5" d="M692.66,231.92l24.04.42,13.7.49h12.62l14.78,1.27,7.05.68h5.28s2.64-2.71,3.33-2.87,7.02-5.93,7.02-5.93"/>
                <path id="road-27" class="cls-5" d="M757.09,321.7l-1.8-5.95-3.78-9.13-4.83-12.13s-3.39-7.96-3.39-8.35-3.91-9.46-3.91-9.46l-2.09-4.89-2.87-6.52-1.96-6.13-1.44-3,.65-4.18,1.7-.91.91-1.3v-9.26l.13-7.96"/>
                <path id="road-26" class="cls-5" d="M1203.13,403.24l1.11-3.46,2.77-4.18,1.01-2.22,1.57-4.31,1.04-5.09.78-5.09s-.13-5.09,0-5.48,0-3.39,0-3.39l-2.48-.65-2.58-1.17-1.21-1.7s-.52-2.87-.52-3.26-1.51-8.43-1.51-8.43"/>
                <path id="road-25" class="cls-5" d="M1215.73,308.64l3.98-4.16,3.65-4.59s3.26-3,3.46-3.26,2.94-3.52,2.94-3.52l4.31-4.66,3.59-3.23,2.74-2.74,1.83-2.22,1.76-1.63,1.04-1.01,2.15-1.4,1.4-.62,1.86.42,1.89.72"/>
                <path id="road-24" class="cls-5" d="M1204.71,324.03l4.11.98h3.91s3.62-.39,3.91,0,4.21.59,4.6.59h7.83s2.84-.29,3.23,0,3.42,0,3.42,0"/>
                <polyline id="road-23" class="cls-5" points="1223.3 325.6 1223.89 321.1 1223.89 317.09 1223.89 313.09 1223.59 310.43"/>
                <path id="road-22" class="cls-5" d="M1235.73,334.99l-9.15,1.32s-7.63.83-8.42,1.03-11.5,2.94-11.5,2.94c0,0-7.73,4.5-7.88,4.6s-6.16,3.57-6.75,3.82-5.63,2.4-5.63,2.4c0,0-19.73-.21-20.13,0s-12.53.41-12.98.41-15.4.72-16.31.72h-10.5c-.59,0-1.89-1.3-1.89-1.3,0,0-.13-4.24,0-4.7s-.33-4.37-.33-4.37c0,0-3.07-2.15-3.72-2.74s-3.72-4.11-4.18-4.44-3.91-3.26-3.98-3.46-2.81-2.94-3.2-3.33-3.26-2.48-3.52-2.67-5.81-1.37-5.81-1.37l-9.92-2.74-9.13-1.96s-5.64-1.96-6.8-2.22-5.72-2.09-6.64-2.15-3.13-1.47-3.65-1.68-1.96-2.62-2.35-2.66-2.22-1.73-2.61-1.79-3.13-1.11-3.52-1.24-3.65-1.28-4.31-1.36-4.57-1.56-4.57-1.56l.49-5.99v-4.31l.68-4.24s.1-3.2.1-3.49.1-1.76.1-1.76l2.54-.98v-1.96c0-.39-.1-1.86-.1-2.35s-.49-2.3-.49-2.3"/>
                <path id="road-21" class="cls-5" d="M1198.93,312.39c-.59-.15-2.45,1.17-3.03,1.47s-2.35.98-3.03.91-4.21.46-4.89.53-7.14-.07-7.14-.07c0,0-6.95-.1-7.63,0s-5.19.1-5.77,0-4.5-.88-5.19-1.27-2.54-1.47-2.94-1.81-2.15-1.02-3.33-1.64-3.42-.26-4.31-.07-2.54-.1-3.23,0-2.84-.1-3.23,0-3.03-.59-3.42-.92-2.25-.55-2.84-.88-3.13-.95-3.62-1.14-3.23-1.76-3.23-1.76l-4.7-1.86-3.2-1.57-2.41-.39-3.07-.72s-5.81-1.37-6.13-1.44-3.85-1.04-4.31-1.11-5.61-.91-6.26-.98-4.57-1.24-4.96-1.37-3.65-1.04-3.91-1.3-2.67-1.64-3.39-1.57-4.83-.58-4.83-.58c0,0-4.5-.07-4.76,0s-3.52-.26-3.78-.33-2.67-.46-2.87-.52-5.15-1.76-5.48-1.76-4.63-1.04-4.89-1.11-5.02-1.5-5.22-1.57-3.65-1.24-4.11-1.37-3.98-1.04-4.37-1.11-1.72,0-1.72,0"/>
                <path id="road-20" class="cls-5" d="M1010.95,260.33l-5.48-5.87-4.5-4.6-5.28-4.53s-6.46-5.55-6.65-5.85-5.87-5.09-5.87-5.09l-5.58-5.28-5.58-4.01-7.05-5.87-7.93-6.56-5.09-4.01-5.48-4.11-2.54-3.13"/>
                <path id="road-19" class="cls-5" d="M1004.46,253.42l-3.2,2.11s-3.65,1.57-4.37,1.66-7.28,1.37-7.28,1.37l-10.76,1.76-13.21,2.74s-4.01,1.47-4.6,1.57-5.19-1.08-5.97-1.37-4.4-2.15-6.26-2.94-9.2-3.42-9.88-3.72-9.98-4.31-9.98-4.31c0,0-6.46-2.05-6.85-2.45s-8.12-3.82-8.12-3.82l-10.08-3.72-7.34-3.42-4.99-3.77-4.31-2.69-.82-1.93"/>
                <path id="road-18" class="cls-5" d="M899.01,305.77l-.88-8.29s-.59-5.74-.59-6.23-1.37-6.36-1.47-6.75-2.45-6.36-2.54-6.85-2.35-8.32-2.35-8.32c0,0-2.45-6.56-2.45-6.95s-1.17-7.93-1.17-8.22-.1-13.01,0-13.5-.59-7.73-.59-7.73c0,0-1.49-7.24-1.53-7.63s-1.41-5.28-1.41-5.28v-11.73l1.41-4.81,4.17-6.85,2.03-3.94,7.36-7.73,3.72-4.77,8.22-11.55,9.39-10.18,9.39-10.18,7.63-6.52,8.09,4.36,7.96-7.83,5.48-2.54h9.2l15.66-14.29,10.16,6.85,12.54.59h10.44l6.52.13,18.4-20.35,6.26-7.91"/>
                <path id="road-17" class="cls-5" d="M869.84,310.14l1.17,3.78,1.17,3.52,1.04,2.61,1.44,4.18,1.96,6.25.65,3.27-.78,4.31-2.22,3.91s-2.22,3.67-2.35,3.86-.26,2.53-.26,2.53l.39,4.44s-.26,1.96-.26,2.61-.65,3.39-.65,3.78.26,4.96.39,5.35.91,6.39,1.17,6.92,2.87,7.44,2.87,7.44l2.35,6.92,3,9.92,2.48,8.58,2.03,8.25,2.15,4.89,1.09,6.4s3.08,8.42,3.21,8.81,1.3,6.26,1.3,6.26l1.17,4.7,1.3,4.44.91,7.18-1.83.95-4.44.74-3.39,1.04-6.26,3.26-5.09,2.61-4.7,2.61-8.09,4.31-10.31,6.13-10.96,5.09-7.96,4.04-5.74,3-3.39-6.13-4.7-7.05-4.04-5.87s-3.78-6.52-3.91-6.92-3.65-5.61-3.65-5.61l-5.81-10.75-2.05-3.72-1.52-3.62-2.2-3.67-1.71-2.84-2.5-5.58-1.51-3.94"/>
                <polyline id="road-16" class="cls-5" points="874 322.28 881.45 321.36 888.37 320.45 897.99 318.88 899.72 318.88 899.01 304.61"/>
                <path id="road-15" class="cls-5" d="M820.15,182.12l-1.72-3.99c-.25-.57-.3-1.21-.16-1.82l1.03-4.36c.03-.12.04-.24.04-.37v-4.29c0-.3-.05-.6-.14-.88l-1.42-4.36-1.18-3.6-2.35-3.69h-4.7s-3.13.42-4.31,0-3.33-1.99-3.91-1.99-1.57-2.35-1.57-2.35c0,0-3.72-3.33-4.31-3.52s-5.68-2.74-5.68-2.74c0,0-6.07-3.13-7.44-3.72l-9.59-4.11s-9.79-4.89-10.37-5.28-12.13-6.65-12.92-7.24-10.37-5.48-10.37-5.48l-16.05-8.02-11.74-6.26-15.85-7.71-40.51-21.25-18.2-8.81-10.37-5.87s-3.78-3.56-3.88-3.75-1.5-1.57-1.92-1.92-2.71-2.09-3.16-2.28-2.02-.82-2.77-.91-3.49-.1-3.91,0-3.39-.07-3.39-.07l-49.58-26.41L509.39,0"/>
                <path id="road-14" class="cls-5" d="M927.48,203.27v-3.22l-.88-2.55-1.76-2.25s-.88-1.57-1.27-2.05-2.94-2.74-3.52-3.13-6.07-5.28-6.26-5.58-3.72-2.84-3.91-3.23-2.84-3.13-2.84-3.13c0,0-7.24-4.6-7.53-5.09s-6.23-6.32-6.23-6.32c0,0,3.29-2.68,3.36-2.91s.75-2.51.75-2.81-1.7-3.13-1.86-3.33-2.45-2.67-2.45-2.67l-1.42-4.96s-2.13-4.79-2.23-5.48-1.08-6.07-1.17-6.56-1.17-4.79-1.37-5.09-2.35-3.62-2.84-4.01-3.33-4.21-3.33-4.21l-4.21-5.32-3.78-6.52-5.48-6.13s-4.96-4.57-5.48-5.09-7.57-4.83-7.96-5.22-7.7-6-7.7-6l-5.61-6.52-2.87-4.57s-2.61-4.31-2.87-4.83-7.72-8.09-7.72-8.09l-2.34-3.13s-16.68-11.61-16.95-12-6.78-7.05-8.09-8.22-5.87-7.44-7.31-8.61-7.18-6.78-9.13-8.35-8.09-4.96-8.61-5.35-4.83-3.39-5.22-3.91-1.44-2.48-1.83-3.65-1.3-3.39-1.96-4.31-2.35-3.78-2.87-4.57-4.83-3.78-4.83-3.78l-.91-.52"/>
                <path id="road-13" class="cls-5" d="M842.23,196.63l4.71-1.37,4.11-2.05c.39-.2,6.46-3.03,6.46-3.03,0,0,4.6-2.74,5.09-3.13s5.38-2.94,6.26-3.42,6.85-4.21,7.14-4.4,5.68-3.72,5.97-3.91,5.51-3.82,5.69-4.11,4.68-3.91,4.68-3.91l.91-.55"/>
                <path id="road-12" class="cls-5" d="M911.58,167.95l-1.71-1.51-1.76-1.42s-1.08-1.13-1.17-1.27-.29-1.76-.39-2.1.1-1.71,0-1.91.05-1.66.2-2.15.93-2.77,1.03-2.8,1.1-1.7,1.28-1.99,1.31-1.61,1.31-1.61l2.84-4.84,1.57-3.52,3.03-5.09s4.13-4.89,4.12-5.19,5.57-6.16,5.57-6.16l5.77-5.97,5.68-6.16,3.33-3.62,7.44-7.93,7.53-8.12s3.82-4.11,4.01-4.4.88-2.54.88-2.54v-1.86l-1.57-1.47-1.86-2.35s-1.27-1.66-1.47-2.05.29-2.25.29-2.25l22.9-24.53"/>
                <path id="road-11" class="cls-5" d="M1096.87,160.03l-6.72-5.22-3.39-2.74s-2.85-2.74-3.19-3.46-2.88-3.59-2.88-3.59c0,0-2.41-2.94-2.54-3.13s-3.39-3.07-3.39-3.07l-3.39-3.13-5.68-5.15-6.26-4.89s-7.83-7.44-7.96-7.63-7.31-6.72-7.31-6.72l-15.49-14.54-12.53-11.4s-9.3-8.9-9.79-9.39-11.45-10.67-11.45-10.67l-9.3-7.76s-8.42-7.41-8.71-7.8-10.85-11.74-10.85-11.74l-8.72-7.93"/>
                <path id="road-10" class="cls-5" d="M726.19,61h5.77l5.58-1.08,9.59-1.27s12.23-.68,12.72-.68,17.61,1.52,17.61,1.52l16.34.54,15.75,1.66s6.95,1.17,7.24,1.17h9.79l8.42-2.45,9.3-2.45,10.86-2.94s9.79-2.35,10.08-2.54,10.86-3.13,10.86-3.13l10.67-3.03,31.87-8.09,15-4.7,5.74-.78,3.39,1.3s1.96,1.7,2.35,1.96,1.96,1.17,2.74,1.17,2.61-.39,3.39-.78,1.96-1.17,2.35-1.44,1.17-1.57,1.96-2.22,2.09-1.7,2.87-2.22"/>
                <path id="road-9" class="cls-5" d="M958.15,30.82l-3.46-3.1-2.25-1.66s-1.86-1.86-1.96-2.35-.98-3.52-.98-4.01-.68-5.28-.78-5.77-1.86-4.21-1.96-4.79-.39-4.79-.49-5.19,0-3.52,0-3.52"/>
                <path id="road-8" class="cls-5" d="M956.8,29.62l6.49-1.9,5.87-1.66s8.51-2.74,8.81-2.84,9.39-2.25,9.39-2.25l6.85-2.15,6.85-2.15,6.75-1.86,10.27-2.45,9.69-2.05,9.79-3.42,11.64-4.31,5.97-2.58"/>
                <path id="road-7" class="cls-5" d="M756.98,58.11v-2.49l-1.92-2.74s-2.05-2.15-2.35-2.45-3.52-2.05-3.82-2.45-7.24-4.89-7.24-4.89c0,0-4.89-3.13-5.19-3.52s-7.14-5.19-7.14-5.19l-7.44-3.85-11.55-8.09-6.85-4.21-10.57-7.93s-5.68-2.94-5.97-3.23-6.46-3.72-6.46-3.72l-3.03-3.36"/>
                <line id="road-6" class="cls-5" x1="689.89" y1="8.72" x2="689.3"/>
                <path id="road-5" class="cls-5" d="M1086.12,85.83l-.51-3.7,3.24-4.43.39-6.13-.52-4.69-1.57-5.16s-2.35-6.26-2.35-6.52-2.61-9.59-2.61-9.59l-1.57-10.44s-.52-4.24-.59-4.63-1.83-5.22-1.83-5.22c0,0-.72-8.09-.72-8.48s-2.02-8.02-2.02-8.29-.91-8.55-.91-8.55"/>
                <path id="road-4" class="cls-5" d="M1170.65,127.15l4.7-1.76,6.85-3.72,5.58-4.6,6.36-3.86,2.64-1.92,4.31-5.19s1.76-2.74,1.86-3.13,4.6-6.46,4.79-6.75,2.64-3.62,3.13-4.01,4.89-6.07,4.89-6.07c0,0,3.72-3.62,4.21-4.11s5.38-4.01,5.38-4.01l1.86-3.33"/>
                <path id="road-3" class="cls-5" d="M1203.34,78.32l-1.96-8.32-2.19-13.21-1.08-6.16-1.63-5.77-2.05-9.49-1.08-8.22-1.57-8.42s-1.66-6.16-1.76-6.56-1.76-8.51-1.76-8.9V.52"/>
                <path id="road-2" class="cls-5" d="M1266.65,52.97l4.4-3.91,6.85-1.37s6.46-1.27,6.85-1.37,3.42-2.25,4.7-2.64,6.85-.78,7.73-.98,5.97-1.15,7.24-1.75c1.27-.6,4.5-2.92,5.38-3.08.88-.16,10.96-1.58,10.96-1.58,0,0,4.57.15,5.22,0s3-1.19,3.78-1.58,3-.74,4.57-1.41c1.57-.68,4.44-.94,5.74-.94s7.96.26,9,0,6,.39,6.52,0,2.35-3.91,2.35-3.91l-.65-4.44s-3-6.26-3-6.78-4.7-8.87-4.7-8.87l-4.18-4.83"/>
                <line id="road-1" class="cls-5" x1="1283.71" y1="16.57" x2="1283.06" y2=".52"/>
            </g>
            <g id="highways">
                <path id="highway-17" class="cls-3" d="M79.42,631.24h4.44s3.52.26,3.91,0,2.87,1.83,2.87,1.96-.39,1.17,0,1.96.78,1.83,1.17,2.48,1.04,1.63,1.96,2.51,1.57,1.79,3,2.58,3.58,1.86,4.46,1.97,2.32-.37,3.24,0,1.5.05,2.97.02,2.51-.56,3.42-1.21,1.17-1.17,1.83-1.3-.39-.65,1.7-.65,4.44.26,5.48.39,4.44.13,5.09.13h11.61l6.39.52s5.87-.39,6.26-.39h5.09s4.96.52,5.74.52,10.18.39,10.7.52,6.52.13,7.18.26,7.18.13,8.09.39,7.96.91,8.74.98,7.7,0,7.7,0c0,0,6-.14,6.52.03s7.7,0,7.7,0l5.22-.88,4.83-1.7,5.09-1.17s2.87-.33,3.78-1.01,3.26-1.84,4.31-2.05,4.57-1.9,4.96-1.9,8.09-.52,8.09-.52l7.96-.39s3.13-1.96,3.78-2.09,4.57-.26,5.35-.39,4.31-.91,5.09-.91,6.39-.31,6.78-.67,4.31-1.02,4.83-1.28,3.39-2.22,3.91-2.61,4.57-3.65,4.57-3.65l6.13-5.22,5.48-1.3s4.31-.91,4.96-.91,3.39-1.17,4.7-1.83,5.87-2.09,6.39-2.22,4.57-1.17,4.96-1.17,3.52-.52,4.44-1.17,3.26-3,4.5-3.52,3.03-1.83,3.96-2.35,3.93-2.48,4.19-2.87,4.44-3,4.44-3c0,0,2.48-1.44,3-1.44s5.61-1.82,5.61-1.82c0,0,4.83-2.36,5.35-2.62s5.09-1.3,5.48-1.44,2.6-1.04,3.91-1.04,3.53-.39,4.96-.52,4.44-1.72,5.35-2.43,2.74-1.88,3.65-2.4,3.52-2.74,4.18-3,3-2.09,3.65-2.74,6.26-6.26,6.26-6.26c0,0,6.39-7.24,6.98-7.83s8.61-6.46,8.61-6.46l5.68-2.54,7.63-2.54s3.52-1.96,4.31-2.35,5.09-3.52,5.68-4.31,5.87-4.31,6.46-4.89,5.68-4.11,6.46-4.7,5.09-4.7,5.09-4.7h4.31s3.91-3.13,4.5-3.13,6.85-4.31,6.85-4.31l3.52-2.54,4.31-4.11,2.94-2.35s4.7.59,5.48,0,5.68-1.37,5.68-1.37l3.52-2.35,5.09-5.87s3.13-3.74,3.72-3.24,6.26-2.44,6.26-2.44l5.28-1.57s3.13-1.37,3.91-1.96,4.31-3.91,4.31-3.91l7.44-6.48,52.45-45.38,9.43-7.44,2.71-3.91,4.24-5.09,4.76-6.46,3.91-6.46,5.71-7.44,4.66-5.68,3.33-4.5,6.7-2.35,7.97-1.37,7.99-1.58,31.84-7.41,10.13-2.49,9.63-1.83,6.44-.95s2.86-1.6,4.23-2.38,5.09-3.17,5.09-3.17c0,0,4.95-4.86,5.41-5.25s6.53-5.48,6.53-5.48c0,0,5.87-5.02,6.46-5.74s8.22-7.3,8.22-7.3l6.26-6.73s4.89-5.09,5.48-5.48,5.68-5.09,5.68-5.09l8.42-3.91,12.53-2.25s12.13-1.66,12.72-1.86,16.44-2.35,16.44-2.35l17.81-1.17,10.96-1.57,12.72-2.35,11.16-2.94,11.55-2.74,11.1-2.15,10.43-.78h15.07l7.88.78s2.74.24,2.98.29,4.31.1,4.65.05,2.89-1.03,3.23-1.13,2.35-1.32,2.89-1.61,2.69-1.57,3.62-1.91,6.21-.88,6.21-.88l17.6-5.38,5.87-2.22s3.39-1.3,4.37-1.44,5.94.52,7.11,0,8.74.49,9.13-.02,2.09-.14,2.09-.14v-3.5s4.31-4.44,4.18-4.83c-.02-.06.52-.84,1.16-1.73.89-1.24,1.97-2.7,1.97-2.7,0,0,3.33-2.61,3.82-2.87s4.79-2.35,5.58-2.61,3.78-1.3,4.18-1.57,2.74-2.35,2.74-2.87-.91-6.26-.91-6.26l.91-2.74s2.86-3.65,3.13-3.78,5.35-3.65,5.88-4.04,4.96-4.13,5.61-4.15,3.26-1.67,3.26-1.67l3.13-4.97,6.92-6.41,6.65-7.71,7.18-7.96s6.92-7.18,7.05-7.57,6.52-7.18,6.78-7.57,4.7-5.87,4.7-5.87l1.83-1.7s-.13-7.57,0-8.09,0-4.96,0-4.96l3.49-2.84s4.5-5.28,4.79-5.68,4.21-5.68,4.21-5.68l5.09-5.28,7.34-8.51s5.38-4.99,5.58-5.28,5.97-5.97,5.97-5.97l6.29-2.12,5.91-1.17s2.61-1.57,3.39-1.83,5.48-2.22,5.48-2.22c0,0,3.78-2.22,4.18-2.61s2.09-1.57,3-.91,5.48,1.44,6,1.57,3.26.52,4.31.13,4.96-2.08,5.48-1.89,5.09.3,5.35-.02,2.87.7,3.52,0,4.31-2.5,4.7-3.17,2.09-3.77,2.09-4.11-1.04-2.86-1.17-3.49-1.7-5.33-1.83-5.98-.39-3.08,0-3.43,1.96-2.05,3-2.44,3.26-2.61,3.78-3,1.57-1.83,1.7-2.87-.39-5.61,0-6-1.17-11.09-1.17-11.09c0,0-.91-5.35-1.44-6.13s-2.09-4.57-2.09-5.61-.13-3.78-.26-4.44-1.04-4.42-1.83-4.75-2.74-1.9-3.13-2.82-2.74-6.39-2.87-6.52-.98-3-.95-4.05c.03-1.04-2.05-17.22-2.05-17.22,0,0-.65-8.35-.65-9s-1.89-6.39-1.4-7.31-.82-9.92-.82-9.92l-1.04-8.74"/>
                <path id="highway-16" class="cls-3" d="M272.72,369.7s1.91,1.01,2.06,1.06,3.08,1.03,3.38,1.03,4.31.44,5.58.49,2.64.2,4.01,0,3.03-.54,4.75-.64,5.43-.47,6.8-.6,4.31-.38,5.53-.38,6.7.1,6.9.1,7.78-.47,7.78-.47h9.79l13.7.13,16.7.62s18.01.1,18.4,0,11.74-.16,12.4,0,13.57,0,13.57,0h94.72l9.39-.62,6.52.62,6.65,5.38,4.31,3.13,4.31,3.99,4.7,3.29,2.22.94h3s1.44.63,2.22,1.03,4.31,2.1,4.44,2.49,1.44,1.5,1.7,1.73,1.96,2.32,2.48,2.71,3,3,3,3l2.48,3.03s2.61,1.66,3.52,2.19,2.87,1.04,3.65,1.44,2.87.52,4.04.52,2.87-.52,3.52-.65,2.22-.13,2.87-.26.78-.13,1.7-.13,2.74.65,3.65.91,3.91,1.44,4.96,1.83,2.22.78,3,.91,1.44.13,2.61,0,2.48.85,3.26.1,1.57-1.14,2.61-1.27,1.44-.26,3.13-.52,3-.64,4.18-.84,3.39-1.12,4.31-1.25,1.44-1.44,3.91-1.57,3.75-.26,4.81-.13,3.93,0,3.93,0"/>
                <path id="highway-15" class="cls-3" d="M1297.93,401.21l-5.74-.75s-3.42-.88-3.72-.98-4.31-1.27-4.7-1.57-3.42-2.05-3.82-2.45-4.4-3.72-4.79-4.11-3.42-3.91-3.52-4.21-5.09-4.6-5.09-4.6l-3.52-3.82-5.87-4.89-4.89-5.28-3.72-4.01s-4.5-3.91-4.7-4.21-4.31-5.38-4.31-5.38l-2.25-2.45s-1.08-3.52-1.08-3.91v-19.38s.29-3.62,0-4.01-1.17-5.09-1.17-5.09c0,0-2.45-2.54-2.74-3.13s-3.72-3.13-3.91-3.42-5.48-2.45-5.48-2.45l-7.83-2.84-9.79-2.64s-5.48-2.74-6.07-2.74-6.85-1.17-8.02-1.27-10.18-.82-10.86-.78-8.02-.2-9,0-4.4-.13-5.97.03-9.2-1.5-10.08-1.6-6.75,0-6.75,0l-8.48-.04h-10.16s-9.41.32-9.8,0-4.57-.71-6.39-1.75-7.44-4.05-8.09-4.05-8.87-1.69-9.79-1.95-9-3.03-9-3.03c0,0-6.13-1.01-7.57-1.4s-9-3.13-9-3.13l-9.79-3-6.13-2.22-5.48-1.58-3.78-6.2-2.58-4.75-3.29-5.05-2.74-4.35-3.13-5.48-1.7-3.11-1.57-1.67-1.5-5.86v-16.83s-.26-2.35,0-2.67,1.3-2.28,1.44-2.48,2.48-3.13,2.48-3.13l3.26-3.52,2.28-2.87s1.63-2.22,1.76-2.48.72-3.59.72-3.78.91-4.83,1.11-5.22,1.83-3.65,1.89-3.85,3.78-4.96,3.78-4.96l3.85-4.63,3.78-4.5,3.85-4.96"/>
                <path id="highway-14" class="cls-3" d="M1257.13,309.52s-2.19-.03-2.45.17-1.3-.46-1.83,0-1.5.91-1.89,1.11-1.57.85-1.89,1.11-1.37.87-1.7,1.06-1.3.7-1.76.9-1.04.33-1.37.59-1.44.33-1.83.33-1.11-.2-2.09-.59-1.76-1.08-2.54-1.1-1.63-.41-2.48-.47-2.48-.07-2.74-.13-1.5-.43-2.15-.34-1.57.11-2.09,0-2.61-.7-2.61-.7l-2.81-.33"/>
                <path id="highway-13" class="cls-3" d="M1203.14,355.25v-8.42l-.59-3.82v-8.61s.2-2.94,0-3.33,0-3.42,0-3.42l.59-2.74,1.37-2.15s1.22-2.01,1.27-2.25.59-3.47.59-3.47c0,0-.54-1.99-.59-2.27s-.64-1.67-.78-1.68-1.22-1.38-1.22-1.38c0,0-1.96-.2-2.3,0s-1.42.73-1.96.83-1.08.05-1.96-.15-2.74-.47-2.94-.77-1.22-.89-1.76-1.14-1.47-.88-1.81-1.17-.49-.39-1.03-.88-1.22-1.47-1.27-1.76-.24-2.16-.24-2.18v-2.86"/>
                <path id="highway-12" class="cls-3" d="M131.78,620.15l-6.83,1.94s-10.47,2.57-10.57,2.76-11.16,3.13-11.16,3.13l-9,2.25-5.77,1.08h-8.12"/>
                <path id="highway-11" class="cls-3" d="M776.68,323.14l3.72-9.18,5.38-7.83,3.13-3.33,4.01-5.09,4.11-5.48,3.91-2.05s1.47-.88,1.66-1.27,1.27-3.62,1.27-4.01v-2.05s2.74-1.08,3.42-1.17,2.45-.49,2.94-.98,1.66-1.47,2.05-2.05,1.37-2.54,1.57-2.84,1.47-2.74,1.47-2.74l6.65-5.19,5.77-3.82,5.41-3.1,2.87-2.48s3.07-2.87,3.88-3.39,4.73-3.91,5.12-4.18,4.7-3.91,4.7-3.91l4.04-3,3.52-2.45,1.44-7.21,2.35-6.65s2.74-3.39,3.26-3.78,4.31-3.13,5.09-3.65,3.13-2.22,4.04-2.74,8.35-1.57,8.35-1.57c0,0,6.39-1.37,6.92-1.01s4.18.75,4.18.75l6-2.74s4.44-2.87,4.96-3,6.78-2.22,6.78-2.22l7.18-1.7s3.78-1.7,4.7-1.7h7.05l6.92-1.57s6.13.52,6.92,0,6.65-2.7,6.65-2.7c0,0,6.78-2.12,7.31-2.38s6.39-2.48,6.39-2.48l8.09-3.13,10.31-2.74,5.61-2.61s3.5-2.87,4.16-3.26,3.14-3.52,3.54-3.78,2.87-2.87,2.87-2.87c0,0,2.74-2.09,3.39-2.22s4.18-1.3,5.87-1.44,7.04-1.04,7.69-1.17,4.7-2.09,4.7-2.09l3.78-5.79,5.09-5.82,6.49-5.48,10.21,9.92s6.13,5.41,6.07,5.61,5.09,4.44,5.09,4.44l2.02,2.02,2.41-1.96,4.96,4.63,7.88,6.9"/>
                <path id="highway-10" class="cls-3" d="M779.91,226.47l5.09-1.27s2.45-.98,3.23-1.17,4.01-1.08,4.5-1.27,3.91-1.08,4.79-1.32,3.52-1.12,4.01-1.32,1.96-1.08,2.94-1.17,5.87-.59,7.05-.59,5.28-.2,5.58,0,2.74-.2,3.23,0,2.35-.39,2.74-.68,2.64-2.74,2.64-2.74c0,0,2.34-.88,3.03-1.08s4.11-1.47,4.41-1.57,3.13-1.27,3.91-1.57,3.42-1.08,3.82-1.27,2.64-1.08,3.82-1.08,2.74-.2,3.42,0,3.72,1.76,4.21,1.96,2.74,1.47,3.03,1.57,2.25,1.08,2.64,1.47,3.13,2.25,3.62,2.45,2.84,1.58,3.13,1.57,2.94.97,2.94.97l1.76,1.89"/>
                <path id="highway-9" class="cls-3" d="M819.35,180.74s1.76,3.07,2.05,3.46,1.47,1.96,1.76,2.25,1.96,1.27,2.74,1.66,3.33,1.08,3.82,1.27,1.37,0,2.64.49,4.21,2.15,4.5,2.35.55.59,1.35,1.17,2.46,2.15,2.85,2.54,1.66,1.77,1.96,2.4.68,2.59.88,3.37.49,2.25.68,2.84.88,1.66,1.27,2.35,2.69,1.63,2.69,1.63"/>
                <path id="highway-8" class="cls-3" d="M1035.38,152.79l3.3-4.18,2.09-1.7,3.52-2.87,5.22-4.18,4.7-4.18,2.87-3.13,4.04-3.39,3.78-3.39,1.96-3.15,2.09-4.94,1.3-4.48,1.61-5.44,3.34-7,4.44-4.61,6.23-4.04,3.82-2.35,5.35-2.72,6.52-1.72s3.52-.91,3.91-1.17,8.74-2.61,8.74-2.61l6.78-3s4.57-2.09,4.96-2.09,3.13-1.83,3.13-1.83c0,0,1.57-1.83,1.7-2.22l.91-2.74s.91-2.46,1.57-2.8,3.13-1.77,3.91-2.16,2.48-1.57,3.13-1.7,3-1.44,3.91-1.57,4.04-.52,4.96-.78,5.87-.78,7.18-1.04,15.14-2.08,15.14-2.08l6.26-1.18,4.83-1.17s2.61-.21,3.13-.69,3.52-1.27,4.57-1.4,3-.78,4.04-1.04,3.26-1.3,3.78-1.44,1.83-.91,2.87-1.17,3.52-.91,4.18-1.17,3.26-1.04,4.04-1.44,2.74-1.3,3.52-1.7,1.7-1.22,2.48-1.92,1.7-1.64,2.74-2.28c1.04-.63,4.18-3.9,4.18-3.9l7.63-3.42,7.83-1.8s5.87-2.74,6.46-2.94,4.89-1.96,6.26-2.54,4.89-2.35,6.65-2.74,4.7-1.76,6.85-1.96,14.68-3.72,14.68-3.72l11.16-2.54,10.96-3.33s9.48-2.35,9.63-2.54,3.16-1.17,3.16-1.17V0"/>
                <path id="highway-7" class="cls-3" d="M1038.68,148.61l6.03-.42s4.4-.78,4.79-.98,5.48-2.05,5.97-2.35,4.4-2.45,4.89-2.54,5.38-2.64,5.38-2.64l6.12-3.23,7-3.42,7.01-3.42s5.9-3.42,6.2-3.47,4.99-2.5,4.99-2.5c0,0,4.5-2.15,4.89-2.74s1.66-2.35,1.86-3.13,1.27-4.54,1.27-4.54c0,0,1.76-2.9,2.45-3.39s3.13-1.96,3.62-2.25,3.42-1.37,4.21-1.47,3.33-.1,4.7,0,5.48-1.27,5.48-1.27l4.01-1.66s4.5-1.27,4.89-1.37,3.82-.49,4.11-.49,3.82-.68,4.31-.98,4.99-4.6,4.99-4.6l4.11-3.33,4.11-3.52s2.15-.78,2.54-.78,4.47-.82,4.47-.82c0,0,2.74-.52,3.07-.59s3.98-.46,3.98-.46c0,0,3-.52,3.46-.52s4.24.26,4.5,0l6.65-1.24,4.5-1.17,3.52-1.17s4.31-1.37,4.89-1.37,5.28-1.37,5.28-1.37l2.74-1.57,3.91-1.44,3.52-1.5s3.33-.98,3.91-.98h5.48l6.46.33,4.5-2.67s4.7-2.67,4.89-2.74,2.94-2.54,3.52-2.94,4.83-3.13,5.15-3.39,2.94-2.74,2.94-2.74l4.8-3.07,5.41-2.35s5.09-.68,5.77-.88,4.6-1.57,5.19-1.76,2.84-.98,3.82-1.37,2.94-1.08,4.4-1.08,5.04-.1,6.04,0,5.51-.38,6.19-.04,3.33.24,4.21.24,3.82-.78,5.09-1.17,3.91-1.57,4.21-1.76,4.4-1.57,4.4-1.57l2.31-1.27,4.44-.88s.08-.78,2.49-.78,4.66-.39,5.54,0,4.5.87,4.79,1.22,2.25,1.43,2.45,1.72,2.05,1.27,2.05,1.27l3.88-.68,2.35-.78s.52-1.61,1.04-1.52,3.65.43,4.57,0,2.87.04,3.78,0,3.52-.09,4.44,0,1.83-.17,2.48-.56,3-1.83,3-1.83l.59-1.39"/>
                <polyline id="highway-6" class="cls-3" points="1061.18 172.81 1065.29 166.85 1069.47 162.06 1076.78 154.78 1081.77 151.37 1085.88 145.09 1087.47 143 1083.82 137.26 1078.86 133.02 1069.99 124.47 1056.94 109.86 1043.9 96.76"/>
                <path id="highway-5" class="cls-3" d="M1110.76,144.47v-4.34l-1.63-4.18-2.61-5.72-1.57-4.11-1.04-3.49-3.65-2.07-3.13-2.87-1.83-4.48-2.35-4.4-2.61-3.91-1.57-5.57v-4.09l-.42-4.01s-1.76-4.17-1.86-4.19-.62-2.17-.62-2.17"/>
                <polyline id="highway-4" class="cls-3" points="1139.73 95.44 1141.29 101.71 1142.66 105.42 1144.82 110.51"/>
                <polyline id="highway-3" class="cls-3" points="1106.26 111.3 1101.37 111.3 1098.32 111.3 1094.13 113.21 1090.02 114.67"/>
                <path id="highway-2" class="cls-3" d="M1127.05,108.46l-4.55-3.33-2.05-2.15-1.47-2.21-1.08-4.55v-4.89l-1.37-4.7-1.57-4.21-.88-4.01-.78-4.7s-.2-5.19,0-5.48-.68-5.19-.68-5.19l-1.08-5.51-1.27-4.96-1.17-5.09-.88-7.34s-.28-4.14-.67-4.53-1.39-4.37-1.29-4.76-1.27-7.63-1.27-7.63l-.88-6.16-1.08-5.19-.68-5.97-.98-5.9"/>
                <polyline id="highway-1" class="cls-3" points="993.91 281.79 999.7 284.11 1008.21 286.85 1015.84 288.45 1024.45 290.54 1031.7 294.45 1048.94 277.2"/>
            </g>
            <g id="citynames">
                <g id="london-group">
                <path id="L-5" data-name="L" d="M578.36,347.75h1.39v9.62h4.61v1.17h-6v-10.79Z"/>
                <path id="o-2" data-name="o" d="M592.66,354.6c0,2.87-1.98,4.11-3.86,4.11-2.1,0-3.71-1.54-3.71-3.99,0-2.59,1.7-4.11,3.84-4.11s3.73,1.62,3.73,3.99ZM586.51,354.68c0,1.7.98,2.98,2.35,2.98s2.35-1.26,2.35-3.01c0-1.31-.66-2.98-2.32-2.98s-2.39,1.54-2.39,3.01Z"/>
                <path id="n-3" data-name="n" d="M594.43,352.89c0-.8-.02-1.46-.06-2.1h1.25l.08,1.28h.03c.38-.74,1.28-1.46,2.56-1.46,1.07,0,2.74.64,2.74,3.3v4.63h-1.41v-4.47c0-1.25-.46-2.29-1.79-2.29-.93,0-1.65.66-1.89,1.44-.06.18-.1.42-.1.66v4.66h-1.41v-5.65Z"/>
                <path id="d" d="M610,347.18v9.36c0,.69.02,1.47.06,2h-1.26l-.06-1.34h-.03c-.43.86-1.38,1.52-2.64,1.52-1.87,0-3.31-1.58-3.31-3.94-.02-2.58,1.58-4.16,3.47-4.16,1.18,0,1.98.56,2.34,1.18h.03v-4.63h1.41ZM608.59,353.95c0-.18-.02-.42-.06-.59-.21-.9-.98-1.63-2.03-1.63-1.46,0-2.32,1.28-2.32,2.99,0,1.57.77,2.87,2.29,2.87.94,0,1.81-.62,2.06-1.68.05-.19.06-.38.06-.61v-1.34Z"/>
                <path id="o-3" data-name="o" d="M619.34,354.6c0,2.87-1.98,4.11-3.86,4.11-2.1,0-3.71-1.54-3.71-3.99,0-2.59,1.7-4.11,3.84-4.11s3.73,1.62,3.73,3.99ZM613.2,354.68c0,1.7.98,2.98,2.35,2.98s2.35-1.26,2.35-3.01c0-1.31-.66-2.98-2.32-2.98s-2.39,1.54-2.39,3.01Z"/>
                <path id="n-4" data-name="n" d="M621.12,352.89c0-.8-.02-1.46-.06-2.1h1.25l.08,1.28h.03c.38-.74,1.28-1.46,2.56-1.46,1.07,0,2.74.64,2.74,3.3v4.63h-1.41v-4.47c0-1.25-.46-2.29-1.79-2.29-.93,0-1.65.66-1.89,1.44-.06.18-.1.42-.1.66v4.66h-1.41v-5.65Z"/>
                </g>
                <g id="sarnia-group">
                <path id="S-2" data-name="S" d="M280.49,378.58c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.59,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="a-8" data-name="a" d="M287.45,379.54l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM287.33,377.31c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="r-4" data-name="r" d="M289.37,376.54c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.23.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="n-5" data-name="n" d="M292.35,376.36c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="i-6" data-name="i" d="M298.23,373.96c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM297.35,379.54v-4.36h.79v4.36h-.79Z"/>
                <path id="a-9" data-name="a" d="M301.87,379.54l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM301.75,377.31c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                </g>
                <g id="goderich-group">
                <path id="G" d="M472.61,92.59c-.35.13-1.04.33-1.86.33-.92,0-1.67-.23-2.27-.8-.52-.5-.85-1.31-.85-2.26,0-1.81,1.25-3.13,3.29-3.13.7,0,1.25.15,1.51.28l-.19.64c-.32-.14-.73-.26-1.34-.26-1.48,0-2.44.92-2.44,2.44s.93,2.45,2.34,2.45c.51,0,.86-.07,1.04-.16v-1.81h-1.23v-.63h2v2.92Z"/>
                <path id="o-4" data-name="o" d="M477.77,90.65c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM474.31,90.69c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="d-2" data-name="d" d="M482.53,86.47v5.27c0,.39,0,.83.04,1.13h-.71l-.04-.76h-.02c-.24.49-.77.86-1.49.86-1.05,0-1.86-.89-1.86-2.21,0-1.45.89-2.34,1.95-2.34.67,0,1.12.32,1.31.67h.02v-2.6h.79ZM481.74,90.28c0-.1,0-.23-.04-.33-.12-.5-.55-.92-1.14-.92-.82,0-1.31.72-1.31,1.68,0,.88.43,1.61,1.29,1.61.53,0,1.02-.35,1.16-.95.03-.11.04-.22.04-.34v-.76Z"/>
                <path id="e-6" data-name="e" d="M484.28,90.83c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM486.61,90.26c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="r-5" data-name="r" d="M488.35,89.87c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="i-7" data-name="i" d="M492.21,87.28c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM491.33,92.86v-4.36h.79v4.36h-.79Z"/>
                <path id="c-2" data-name="c" d="M496.54,92.7c-.21.11-.67.25-1.25.25-1.31,0-2.17-.89-2.17-2.22s.92-2.31,2.34-2.31c.47,0,.88.12,1.1.23l-.18.61c-.19-.11-.49-.21-.92-.21-1,0-1.54.74-1.54,1.65,0,1.01.65,1.63,1.51,1.63.45,0,.75-.12.97-.22l.14.59Z"/>
                <path id="h-2" data-name="h" d="M497.47,86.47h.79v2.72h.02c.13-.22.32-.42.57-.56.23-.13.51-.23.81-.23.59,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.04.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                </g>
                <g id="clinton-group">
                <path id="C-2" data-name="C" d="M521.24,138.39c-.29.14-.86.29-1.6.29-1.71,0-3-1.08-3-3.07s1.29-3.19,3.17-3.19c.76,0,1.23.16,1.44.27l-.19.64c-.3-.14-.72-.25-1.22-.25-1.42,0-2.37.91-2.37,2.5,0,1.49.86,2.44,2.33,2.44.48,0,.96-.1,1.28-.25l.16.62Z"/>
                <path id="l-2" data-name="l" d="M522.2,132.2h.79v6.39h-.79v-6.39Z"/>
                <path id="i-8" data-name="i" d="M525.2,133.01c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM524.32,138.59v-4.36h.79v4.36h-.79Z"/>
                <path id="n-6" data-name="n" d="M526.43,135.41c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="t-3" data-name="t" d="M532.34,132.98v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="o-5" data-name="o" d="M538.25,136.38c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM534.8,136.42c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="n-7" data-name="n" d="M539.25,135.41c0-.45,0-.82-.04-1.18h.7l.05.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                </g>
                <g id="bayfield-group">
                <path id="B" d="M477.53,186.38c.34-.07.88-.13,1.43-.13.78,0,1.29.13,1.67.44.31.23.5.59.5,1.07,0,.59-.39,1.1-1.03,1.33v.02c.58.14,1.25.62,1.25,1.52,0,.52-.21.92-.51,1.22-.42.39-1.11.57-2.1.57-.54,0-.95-.04-1.22-.07v-5.97ZM478.31,188.87h.71c.83,0,1.31-.43,1.31-1.02,0-.71-.54-.99-1.33-.99-.36,0-.57.03-.69.05v1.95ZM478.31,191.78c.15.03.38.04.66.04.81,0,1.56-.3,1.56-1.18,0-.83-.71-1.17-1.57-1.17h-.65v2.31Z"/>
                <path id="a-10" data-name="a" d="M484.79,192.37l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM484.68,190.15c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="y" d="M486.94,188.01l.95,2.57c.1.29.21.63.28.89h.02c.08-.26.17-.59.28-.91l.86-2.56h.84l-1.19,3.11c-.57,1.49-.95,2.26-1.49,2.73-.39.34-.77.48-.97.51l-.2-.67c.2-.06.46-.19.69-.39.22-.17.49-.48.67-.88.04-.08.06-.14.06-.19s-.02-.11-.05-.21l-1.61-4.02h.86Z"/>
                <path id="fi" d="M490.97,192.37v-3.75h-.61v-.6h.61v-.23c0-1.15.68-1.9,1.9-1.9.41,0,.88.13,1.11.29l-.23.6c-.19-.14-.53-.25-.92-.25-.84,0-1.08.58-1.08,1.28v.22h2.53v4.36h-.78v-3.75h-1.75v3.75h-.78Z"/>
                <path id="e-7" data-name="e" d="M496.03,190.34c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM498.36,189.77c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="l-3" data-name="l" d="M500.1,185.98h.79v6.39h-.79v-6.39Z"/>
                <path id="d-3" data-name="d" d="M505.99,185.98v5.27c0,.39,0,.83.04,1.13h-.71l-.04-.76h-.02c-.24.49-.77.86-1.49.86-1.05,0-1.86-.89-1.86-2.21,0-1.45.89-2.34,1.95-2.34.67,0,1.12.32,1.31.67h.02v-2.6h.79ZM505.2,189.79c0-.1,0-.23-.04-.33-.12-.5-.55-.92-1.14-.92-.82,0-1.31.72-1.31,1.68,0,.88.43,1.61,1.29,1.61.53,0,1.02-.35,1.16-.95.03-.11.04-.22.04-.34v-.76Z"/>
                </g>
                <g id="lambtonshores-group">
                <path id="L-6" data-name="L" d="M416.98,265.03h.78v5.41h2.59v.66h-3.38v-6.07Z"/>
                <path id="a-11" data-name="a" d="M423.62,271.09l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.4,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM423.5,268.87c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.05-.17.05-.25v-.76Z"/>
                <path id="m" d="M425.54,267.92c0-.45,0-.82-.04-1.18h.69l.04.7h.03c.24-.41.65-.8,1.37-.8.59,0,1.04.36,1.23.87h.02c.14-.24.31-.43.49-.57.26-.2.55-.31.96-.31.58,0,1.43.38,1.43,1.89v2.57h-.77v-2.47c0-.84-.31-1.34-.95-1.34-.45,0-.8.33-.94.72-.04.11-.06.25-.06.4v2.69h-.77v-2.61c0-.69-.31-1.2-.91-1.2-.5,0-.85.4-.98.79-.05.12-.06.25-.06.39v2.63h-.77v-3.18Z"/>
                <path id="b" d="M433.01,271.09c.02-.3.04-.74.04-1.13v-5.27h.78v2.74h.02c.28-.49.78-.8,1.49-.8,1.08,0,1.85.9,1.84,2.22,0,1.56-.98,2.33-1.95,2.33-.63,0-1.13-.24-1.46-.82h-.03l-.04.72h-.68ZM433.83,269.35c0,.1.02.2.04.29.15.55.61.93,1.19.93.83,0,1.32-.68,1.32-1.67,0-.87-.45-1.62-1.3-1.62-.54,0-1.04.37-1.21.97-.02.09-.04.2-.04.32v.78Z"/>
                <path id="t-4" data-name="t" d="M439.12,265.49v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="o-6" data-name="o" d="M445.04,268.88c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM441.58,268.92c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="n-8" data-name="n" d="M446.04,267.92c0-.45,0-.82-.04-1.18h.7l.05.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="S-3" data-name="S" d="M421.26,280.94c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.59,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="h-3" data-name="h" d="M425.78,275.5h.79v2.72h.02c.13-.23.32-.42.57-.56.23-.13.51-.23.81-.23.59,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.04.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="o-7" data-name="o" d="M434.72,279.68c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM431.26,279.72c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="r-6" data-name="r" d="M435.72,278.9c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.23.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="e-8" data-name="e" d="M439.01,279.86c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM441.33,279.29c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="s" d="M442.97,281.08c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.23-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                </g>
                <g id="strathroy-group">
                <path id="S-4" data-name="S" d="M488.56,392.07c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.59,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="t-5" data-name="t" d="M494,387.41v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="r-7" data-name="r" d="M496.03,390.02c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="a-12" data-name="a" d="M501.34,393.02l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM501.22,390.8c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="t-6" data-name="t" d="M504.18,387.41v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="h-4" data-name="h" d="M506.2,386.63h.79v2.72h.02c.13-.22.32-.42.57-.56.23-.13.51-.23.81-.23.59,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.04.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="r-8" data-name="r" d="M511.2,390.02c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="o-8" data-name="o" d="M518,390.81c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM514.54,390.85c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="y-2" data-name="y" d="M519.22,388.66l.95,2.57c.1.29.21.63.28.89h.02c.08-.26.17-.59.28-.91l.86-2.56h.84l-1.19,3.11c-.57,1.49-.95,2.26-1.49,2.73-.39.34-.77.48-.97.51l-.2-.67c.2-.06.46-.19.69-.39.22-.17.49-.48.67-.88.04-.08.06-.14.06-.19s-.02-.11-.05-.21l-1.61-4.02h.86Z"/>
                </g>
                <g id="chathamkent-group">
                <path id="C-3" data-name="C" d="M309.44,594.64c-.29.14-.86.29-1.6.29-1.71,0-3-1.08-3-3.07s1.29-3.19,3.17-3.19c.76,0,1.23.16,1.44.27l-.19.64c-.3-.14-.72-.25-1.22-.25-1.42,0-2.37.91-2.37,2.5,0,1.49.86,2.44,2.33,2.44.48,0,.96-.1,1.28-.25l.16.62Z"/>
                <path id="h-5" data-name="h" d="M310.39,588.45h.79v2.72h.02c.13-.23.32-.42.57-.56.23-.13.51-.22.81-.22.59,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.04.11-.05.22-.05.38v2.63h-.79v-6.39Z"/>
                <path id="a-13" data-name="a" d="M317.8,594.84l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.4,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM317.68,592.62c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.05-.17.05-.25v-.76Z"/>
                <path id="t-7" data-name="t" d="M320.64,589.23v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="h-6" data-name="h" d="M322.67,588.45h.79v2.72h.02c.13-.23.32-.42.57-.56.23-.13.51-.22.81-.22.59,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.04.11-.05.22-.05.38v2.63h-.79v-6.39Z"/>
                <path id="a-14" data-name="a" d="M330.07,594.84l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM329.96,592.62c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="m-2" data-name="m" d="M332,591.66c0-.45,0-.82-.04-1.18h.69l.04.7h.03c.24-.41.65-.8,1.37-.8.59,0,1.04.36,1.23.87h.02c.14-.24.31-.43.49-.57.26-.2.55-.31.96-.31.58,0,1.43.38,1.43,1.89v2.57h-.77v-2.47c0-.84-.31-1.34-.95-1.34-.45,0-.8.33-.94.72-.04.11-.06.25-.06.4v2.69h-.77v-2.61c0-.69-.31-1.2-.91-1.2-.5,0-.85.4-.98.79-.05.12-.06.25-.06.39v2.63h-.77v-3.18Z"/>
                <path id="_-" data-name="-" d="M341.34,592.12v.58h-2.22v-.58h2.22Z"/>
                <path id="K" d="M342.29,588.78h.78v2.93h.03c.16-.23.32-.45.48-.65l1.85-2.28h.97l-2.2,2.57,2.37,3.49h-.93l-2-2.98-.58.67v2.31h-.78v-6.07Z"/>
                <path id="e-9" data-name="e" d="M347.59,592.81c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.22l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM349.91,592.24c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="n-9" data-name="n" d="M351.65,591.66c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="t-8" data-name="t" d="M357.57,589.23v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                </g>
                <g id="windsor-group">
                <path id="W" d="M103.34,621.99l-2.05-8.08h1.1l.96,4.09c.24,1.01.46,2.02.6,2.79h.02c.13-.8.38-1.76.66-2.81l1.08-4.08h1.09l.98,4.1c.23.96.44,1.92.56,2.77h.02c.17-.89.4-1.79.65-2.79l1.07-4.08h1.07l-2.29,8.08h-1.09l-1.02-4.21c-.25-1.03-.42-1.82-.53-2.64h-.02c-.14.8-.32,1.6-.62,2.64l-1.15,4.21h-1.09Z"/>
                <path id="i-9" data-name="i" d="M113.12,614.55c.01.36-.25.65-.67.65-.37,0-.64-.29-.64-.65s.28-.66.66-.66.65.29.65.66ZM111.94,621.99v-5.8h1.06v5.8h-1.06Z"/>
                <path id="n-10" data-name="n" d="M114.75,617.75c0-.6-.01-1.09-.05-1.57h.94l.06.96h.02c.29-.55.96-1.09,1.92-1.09.8,0,2.05.48,2.05,2.47v3.47h-1.06v-3.35c0-.94-.35-1.72-1.34-1.72-.7,0-1.24.49-1.42,1.08-.05.13-.07.31-.07.49v3.49h-1.06v-4.23Z"/>
                <path id="d-4" data-name="d" d="M126.42,613.47v7.02c0,.52.01,1.1.05,1.5h-.95l-.05-1.01h-.02c-.32.65-1.03,1.14-1.98,1.14-1.4,0-2.48-1.19-2.48-2.95-.01-1.93,1.19-3.12,2.6-3.12.89,0,1.49.42,1.75.89h.02v-3.47h1.06ZM125.37,618.54c0-.13-.01-.31-.05-.44-.16-.67-.73-1.22-1.52-1.22-1.09,0-1.74.96-1.74,2.24,0,1.17.58,2.15,1.72,2.15.71,0,1.35-.47,1.55-1.26.04-.14.05-.29.05-.46v-1.01Z"/>
                <path id="s-2" data-name="s" d="M128.03,620.91c.31.2.86.42,1.39.42.77,0,1.13-.38,1.13-.86s-.3-.78-1.08-1.07c-1.04-.37-1.54-.95-1.54-1.64,0-.94.76-1.7,2-1.7.59,0,1.1.17,1.43.36l-.26.77c-.23-.14-.65-.34-1.19-.34-.62,0-.97.36-.97.79,0,.48.35.7,1.1.98,1.01.38,1.52.89,1.52,1.75,0,1.02-.79,1.74-2.17,1.74-.64,0-1.22-.16-1.63-.4l.26-.8Z"/>
                <path id="o-9" data-name="o" d="M138.18,619.03c0,2.15-1.49,3.08-2.89,3.08-1.57,0-2.78-1.15-2.78-2.99,0-1.94,1.27-3.08,2.88-3.08s2.79,1.21,2.79,2.99ZM133.58,619.09c0,1.27.73,2.23,1.76,2.23s1.76-.95,1.76-2.25c0-.98-.49-2.23-1.74-2.23s-1.79,1.15-1.79,2.25Z"/>
                <path d="M139.52,617.99c0-.68-.01-1.27-.05-1.81h.92l.04,1.14h.05c.26-.78.9-1.27,1.61-1.27.12,0,.2.01.3.04v1c-.11-.02-.22-.04-.36-.04-.74,0-1.27.56-1.42,1.36-.02.14-.05.31-.05.49v3.09h-1.04v-3.99Z"/>
                </g>
                <g id="stthomas-group">
                <path id="S-5" data-name="S" d="M610.3,443.05c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.59,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="t-9" data-name="t" d="M615.74,438.4v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="_.-2" data-name="." d="M617.55,443.54c0-.33.23-.57.54-.57s.53.23.53.57-.21.57-.54.57c-.32,0-.53-.24-.53-.57Z"/>
                <path id="T" d="M622.32,438.61h-1.85v-.67h4.49v.67h-1.85v5.4h-.79v-5.4Z"/>
                <path id="h-7" data-name="h" d="M625.55,437.62h.79v2.72h.02c.13-.22.32-.42.57-.56.23-.13.51-.23.81-.23.59,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.04.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="o-10" data-name="o" d="M634.49,441.79c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM631.03,441.84c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="m-3" data-name="m" d="M635.49,440.83c0-.45,0-.82-.04-1.18h.69l.04.7h.03c.24-.41.65-.8,1.37-.8.59,0,1.04.36,1.23.87h.02c.14-.24.31-.43.49-.57.26-.2.55-.31.96-.31.58,0,1.43.38,1.43,1.89v2.57h-.77v-2.47c0-.84-.31-1.34-.95-1.34-.45,0-.8.33-.94.72-.04.11-.06.25-.06.4v2.69h-.77v-2.61c0-.69-.31-1.2-.91-1.2-.5,0-.85.4-.98.79-.05.12-.06.25-.06.39v2.63h-.77v-3.18Z"/>
                <path id="a-15" data-name="a" d="M645.41,444.01l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM645.29,441.78c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="s-3" data-name="s" d="M647.22,443.2c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.23-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                </g>
                <g id="hamilton-group">
                <path id="H" d="M992.88,262.68v3.38h3.91v-3.38h1.06v8.08h-1.06v-3.79h-3.91v3.79h-1.04v-8.08h1.04Z"/>
                <path id="a-16" data-name="a" d="M1002.83,270.77l-.08-.73h-.04c-.32.46-.95.86-1.78.86-1.17,0-1.77-.83-1.77-1.67,0-1.4,1.25-2.17,3.49-2.16v-.12c0-.48-.13-1.34-1.32-1.34-.54,0-1.1.17-1.51.43l-.24-.7c.48-.31,1.17-.52,1.91-.52,1.78,0,2.21,1.21,2.21,2.37v2.17c0,.5.02,1,.1,1.39h-.96ZM1002.68,267.8c-1.15-.02-2.46.18-2.46,1.31,0,.68.46,1.01,1,1.01.76,0,1.24-.48,1.4-.97.04-.11.06-.23.06-.34v-1.01Z"/>
                <path id="m-4" data-name="m" d="M1005.4,266.53c0-.6-.01-1.09-.05-1.57h.92l.05.94h.04c.32-.55.86-1.07,1.82-1.07.79,0,1.39.48,1.64,1.16h.02c.18-.32.41-.58.65-.76.35-.26.73-.41,1.28-.41.77,0,1.91.5,1.91,2.52v3.42h-1.03v-3.29c0-1.12-.41-1.79-1.26-1.79-.6,0-1.07.44-1.25.96-.05.14-.08.34-.08.53v3.59h-1.03v-3.48c0-.92-.41-1.6-1.21-1.6-.66,0-1.14.53-1.31,1.06-.06.16-.08.34-.08.52v3.5h-1.03v-4.23Z"/>
                <path id="i-10" data-name="i" d="M1016.59,263.33c.01.36-.25.65-.67.65-.37,0-.64-.29-.64-.65s.28-.66.66-.66.65.29.65.66ZM1015.41,270.77v-5.8h1.05v5.8h-1.05Z"/>
                <path id="l-4" data-name="l" d="M1018.22,262.25h1.05v8.52h-1.05v-8.52Z"/>
                <path id="t-10" data-name="t" d="M1022.32,263.29v1.67h1.51v.8h-1.51v3.13c0,.72.2,1.13.79,1.13.28,0,.48-.04.61-.07l.05.79c-.2.08-.53.14-.94.14-.49,0-.89-.16-1.14-.44-.3-.31-.41-.83-.41-1.51v-3.17h-.9v-.8h.9v-1.39l1.03-.28Z"/>
                <path id="o-11" data-name="o" d="M1030.21,267.82c0,2.15-1.49,3.08-2.89,3.08-1.57,0-2.78-1.15-2.78-2.99,0-1.94,1.27-3.08,2.88-3.08s2.79,1.21,2.79,2.99ZM1025.6,267.87c0,1.27.73,2.23,1.76,2.23s1.76-.95,1.76-2.25c0-.98-.49-2.23-1.74-2.23s-1.79,1.15-1.79,2.25Z"/>
                <path id="n-11" data-name="n" d="M1031.54,266.53c0-.6-.01-1.09-.05-1.57h.94l.06.96h.02c.29-.55.96-1.09,1.92-1.09.8,0,2.05.48,2.05,2.47v3.47h-1.05v-3.35c0-.94-.35-1.71-1.34-1.71-.7,0-1.24.49-1.42,1.08-.05.13-.07.31-.07.49v3.49h-1.05v-4.23Z"/>
                </g>
                <g id="brantford-group">
                <path id="B-2" data-name="B" d="M885.22,297.07c.34-.07.88-.13,1.43-.13.78,0,1.29.14,1.67.44.31.23.5.59.5,1.07,0,.59-.39,1.1-1.03,1.33v.02c.58.14,1.25.62,1.25,1.52,0,.52-.21.92-.51,1.22-.42.39-1.11.57-2.1.57-.54,0-.95-.04-1.22-.07v-5.97ZM886,299.55h.71c.83,0,1.31-.43,1.31-1.02,0-.71-.54-.99-1.33-.99-.36,0-.57.03-.69.05v1.95ZM886,302.46c.15.03.38.04.66.04.81,0,1.56-.3,1.56-1.18,0-.83-.71-1.17-1.57-1.17h-.65v2.31Z"/>
                <path id="r-9" data-name="r" d="M890.07,300.06c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.23.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="a-17" data-name="a" d="M895.38,303.06l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.4,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM895.26,300.83c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.05-.17.05-.25v-.76Z"/>
                <path id="n-12" data-name="n" d="M897.3,299.88c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="t-11" data-name="t" d="M903.22,297.45v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.85-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.68v-.6h.68v-1.04l.77-.21Z"/>
                <path id="f" d="M905.32,303.06v-3.75h-.61v-.6h.61v-.21c0-.61.13-1.17.5-1.52.3-.29.69-.4,1.06-.4.28,0,.52.06.68.13l-.11.61c-.12-.05-.28-.1-.5-.1-.68,0-.85.59-.85,1.26v.23h1.05v.6h-1.05v3.75h-.78Z"/>
                <path id="o-12" data-name="o" d="M911.7,300.84c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM908.24,300.89c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="r-10" data-name="r" d="M912.69,300.06c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.23.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="d-5" data-name="d" d="M919.31,296.66v5.27c0,.39,0,.83.04,1.13h-.71l-.04-.76h-.02c-.24.49-.77.86-1.49.86-1.05,0-1.86-.89-1.86-2.21,0-1.45.89-2.34,1.95-2.34.67,0,1.12.32,1.31.67h.02v-2.6h.79ZM918.52,300.47c0-.1,0-.23-.04-.33-.12-.5-.55-.92-1.14-.92-.82,0-1.31.72-1.31,1.68,0,.88.43,1.61,1.29,1.61.53,0,1.02-.35,1.16-.95.03-.11.04-.22.04-.34v-.76Z"/>
                </g>
                <g id="hagersville">
                <path id="H-2" data-name="H" d="M931.46,364.51v2.54h2.94v-2.54h.79v6.07h-.79v-2.84h-2.94v2.84h-.78v-6.07h.78Z"/>
                <path id="a-18" data-name="a" d="M938.93,370.58l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM938.81,368.36c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="g-2" data-name="g" d="M944.61,366.22c-.02.32-.04.67-.04,1.2v2.53c0,1-.2,1.61-.62,1.99-.42.4-1.04.52-1.58.52s-1.1-.13-1.45-.36l.2-.6c.29.18.74.34,1.28.34.81,0,1.4-.42,1.4-1.52v-.49h-.02c-.24.4-.71.73-1.39.73-1.08,0-1.85-.92-1.85-2.12,0-1.48.96-2.31,1.96-2.31.76,0,1.17.4,1.36.76h.02l.04-.66h.69ZM943.79,367.94c0-.14,0-.25-.05-.36-.14-.46-.53-.84-1.11-.84-.76,0-1.3.64-1.3,1.65,0,.85.43,1.57,1.29,1.57.49,0,.93-.31,1.1-.81.05-.13.06-.29.06-.42v-.78Z"/>
                <path id="e-10" data-name="e" d="M946.33,368.55c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM948.65,367.98c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="r-11" data-name="r" d="M950.39,367.58c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="s-4" data-name="s" d="M953.23,369.77c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.23-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                <path id="v" d="M957.21,366.22l.85,2.45c.14.4.26.76.35,1.12h.03c.1-.36.23-.72.37-1.12l.85-2.45h.83l-1.71,4.36h-.76l-1.66-4.36h.85Z"/>
                <path id="i-11" data-name="i" d="M962.11,365c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM961.23,370.58v-4.36h.79v4.36h-.79Z"/>
                <path id="l-5" data-name="l" d="M963.34,364.19h.79v6.39h-.79v-6.39Z"/>
                <path id="l-6" data-name="l" d="M965.46,364.19h.79v6.39h-.79v-6.39Z"/>
                <path id="e-11" data-name="e" d="M968.03,368.55c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM970.35,367.98c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                </g>
                <g id="simcoe-group">
                <path id="S-6" data-name="S" d="M884.84,426.01c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.59,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="i-12" data-name="i" d="M890.24,421.38c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM889.36,426.96v-4.36h.79v4.36h-.79Z"/>
                <path id="m-5" data-name="m" d="M891.47,423.78c0-.45,0-.82-.04-1.18h.69l.04.7h.03c.24-.41.65-.8,1.37-.8.59,0,1.04.36,1.23.87h.02c.14-.24.31-.43.49-.57.26-.2.55-.31.96-.31.58,0,1.43.38,1.43,1.89v2.57h-.77v-2.47c0-.84-.31-1.34-.95-1.34-.45,0-.8.33-.94.72-.04.11-.06.25-.06.4v2.69h-.77v-2.61c0-.69-.31-1.2-.91-1.2-.5,0-.85.4-.98.79-.05.12-.06.25-.06.39v2.63h-.77v-3.18Z"/>
                <path id="c-3" data-name="c" d="M902.08,426.8c-.21.11-.67.25-1.25.25-1.31,0-2.17-.89-2.17-2.22s.92-2.31,2.34-2.31c.47,0,.88.12,1.1.23l-.18.61c-.19-.11-.49-.21-.92-.21-1,0-1.54.74-1.54,1.65,0,1.01.65,1.63,1.51,1.63.45,0,.75-.12.97-.22l.14.59Z"/>
                <path id="o-13" data-name="o" d="M906.89,424.75c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM903.44,424.79c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="e-12" data-name="e" d="M908.33,424.93c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM910.65,424.36c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                </g>
                <g id="burlington-group">
                <path id="B-3" data-name="B" d="M1015.16,237.03c.34-.07.88-.13,1.43-.13.78,0,1.29.14,1.67.44.32.23.5.59.5,1.07,0,.59-.39,1.1-1.03,1.33v.02c.58.14,1.25.62,1.25,1.52,0,.52-.21.92-.51,1.22-.42.39-1.11.57-2.1.57-.54,0-.95-.04-1.21-.07v-5.97ZM1015.94,239.51h.71c.83,0,1.31-.43,1.31-1.02,0-.71-.54-.99-1.33-.99-.36,0-.57.03-.69.05v1.95ZM1015.94,242.42c.15.03.38.04.66.04.81,0,1.56-.3,1.56-1.18,0-.83-.71-1.17-1.57-1.17h-.65v2.31Z"/>
                <path id="u" d="M1023.65,241.83c0,.45,0,.85.04,1.19h-.7l-.04-.71h-.02c-.21.35-.67.81-1.44.81-.68,0-1.5-.38-1.5-1.91v-2.55h.79v2.41c0,.83.25,1.39.97,1.39.53,0,.9-.37,1.04-.72.04-.12.07-.26.07-.41v-2.67h.79v3.17Z"/>
                <path id="r-12" data-name="r" d="M1024.97,240.02c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="l-7" data-name="l" d="M1027.95,236.62h.79v6.39h-.79v-6.39Z"/>
                <path id="i-13" data-name="i" d="M1030.95,237.43c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM1030.07,243.01v-4.36h.79v4.36h-.79Z"/>
                <path id="n-13" data-name="n" d="M1032.18,239.84c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="g-3" data-name="g" d="M1040.93,238.66c-.02.32-.04.67-.04,1.2v2.53c0,1-.2,1.61-.62,1.99-.42.4-1.04.52-1.58.52s-1.1-.13-1.45-.36l.2-.6c.29.18.74.34,1.28.34.81,0,1.41-.42,1.41-1.52v-.49h-.02c-.24.4-.71.73-1.39.73-1.08,0-1.85-.92-1.85-2.12,0-1.48.96-2.31,1.96-2.31.76,0,1.17.4,1.36.76h.02l.04-.66h.69ZM1040.11,240.38c0-.14,0-.25-.04-.36-.14-.46-.53-.84-1.11-.84-.76,0-1.3.64-1.3,1.65,0,.85.43,1.57,1.29,1.57.49,0,.93-.31,1.1-.81.04-.13.06-.29.06-.42v-.78Z"/>
                <path id="t-12" data-name="t" d="M1043.16,237.41v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.86-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.67v-.6h.67v-1.04l.77-.21Z"/>
                <path id="o-14" data-name="o" d="M1049.07,240.8c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.96-2.31,2.16-2.31s2.1.91,2.1,2.24ZM1045.61,240.84c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="n-14" data-name="n" d="M1050.07,239.84c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                </g>
                <g id="stcatherines-group">
                <path id="S-7" data-name="S" d="M1129.97,312c.35.22.86.4,1.4.4.8,0,1.27-.42,1.27-1.04,0-.57-.32-.89-1.14-1.21-.99-.35-1.6-.86-1.6-1.72,0-.95.78-1.65,1.96-1.65.62,0,1.07.14,1.34.3l-.22.64c-.2-.11-.6-.29-1.15-.29-.83,0-1.14.5-1.14.91,0,.57.37.85,1.21,1.17,1.03.4,1.55.89,1.55,1.78,0,.94-.69,1.75-2.12,1.75-.58,0-1.22-.17-1.55-.39l.2-.66Z"/>
                <path id="t-13" data-name="t" d="M1135.42,307.35v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.86-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.67v-.6h.67v-1.04l.77-.21Z"/>
                <path id="_.-3" data-name="." d="M1137.23,312.49c0-.33.23-.57.54-.57s.53.23.53.57-.21.57-.54.57c-.31,0-.53-.24-.53-.57Z"/>
                <path id="C-4" data-name="C" d="M1145.45,312.76c-.29.14-.86.29-1.6.29-1.71,0-3-1.08-3-3.07s1.29-3.19,3.17-3.19c.76,0,1.23.16,1.44.27l-.19.64c-.3-.14-.72-.25-1.22-.25-1.42,0-2.37.91-2.37,2.5,0,1.49.86,2.44,2.33,2.44.48,0,.96-.1,1.28-.25l.16.62Z"/>
                <path id="a-19" data-name="a" d="M1148.76,312.96l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1148.64,310.73c-.86-.02-1.85.13-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="t-14" data-name="t" d="M1151.6,307.35v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.86-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.67v-.6h.67v-1.04l.77-.21Z"/>
                <path id="h-8" data-name="h" d="M1153.62,306.57h.79v2.72h.02c.13-.23.32-.42.57-.56.23-.13.51-.23.81-.23.58,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.05.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="e-13" data-name="e" d="M1159.06,310.92c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.14.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM1161.38,310.36c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.21,1.29h2.31Z"/>
                <path id="r-13" data-name="r" d="M1163.13,309.96c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.96.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="i-14" data-name="i" d="M1166.99,307.38c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM1166.11,312.96v-4.36h.79v4.36h-.79Z"/>
                <path id="n-15" data-name="n" d="M1168.21,309.78c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="e-14" data-name="e" d="M1173.65,310.92c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.14.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM1175.97,310.36c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.21,1.29h2.31Z"/>
                <path d="M1177.61,312.15c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.22-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                </g>
                <g id="niagarafalls-group">
                <path id="N" d="M1182.62,338.31v-6.07h.85l1.95,3.07c.45.71.8,1.35,1.09,1.97h.02c-.07-.82-.09-1.56-.09-2.5v-2.54h.74v6.07h-.79l-1.93-3.08c-.42-.67-.83-1.37-1.13-2.03h-.03c.04.77.06,1.5.06,2.51v2.59h-.74Z"/>
                <path id="i-15" data-name="i" d="M1189.49,332.73c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM1188.61,338.31v-4.36h.79v4.36h-.79Z"/>
                <path id="a-20" data-name="a" d="M1193.13,338.31l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1193.01,336.08c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="g-4" data-name="g" d="M1198.81,333.95c-.02.32-.04.67-.04,1.2v2.53c0,1-.2,1.61-.62,1.99-.42.4-1.04.52-1.58.52s-1.1-.13-1.45-.36l.2-.6c.29.18.74.34,1.28.34.81,0,1.41-.42,1.41-1.52v-.49h-.02c-.24.4-.71.73-1.39.73-1.08,0-1.85-.92-1.85-2.12,0-1.48.96-2.31,1.96-2.31.76,0,1.17.4,1.36.76h.02l.04-.66h.69ZM1197.99,335.67c0-.14,0-.25-.04-.36-.14-.46-.53-.84-1.11-.84-.76,0-1.3.64-1.3,1.65,0,.85.43,1.57,1.29,1.57.49,0,.93-.31,1.1-.81.04-.13.06-.29.06-.42v-.78Z"/>
                <path id="a-21" data-name="a" d="M1202.5,338.31l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1202.38,336.08c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="r-14" data-name="r" d="M1204.42,335.31c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="a-22" data-name="a" d="M1209.73,338.31l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1209.61,336.08c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="F" d="M1213.59,332.24h3.27v.66h-2.48v2.02h2.29v.65h-2.29v2.75h-.78v-6.07Z"/>
                <path id="a-23" data-name="a" d="M1219.96,338.31l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1219.84,336.08c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="l-8" data-name="l" d="M1221.88,331.92h.79v6.39h-.79v-6.39Z"/>
                <path id="l-9" data-name="l" d="M1224,331.92h.79v6.39h-.79v-6.39Z"/>
                <path d="M1226.02,337.5c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.22-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                </g>
                <g id="toronto-group">
                <path id="T-2" data-name="T" d="M1141.41,113.02h-3.28v-1.18h7.99v1.18h-3.3v9.6h-1.41v-9.6Z"/>
                <path id="o-15" data-name="o" d="M1153.14,118.69c0,2.87-1.99,4.11-3.86,4.11-2.1,0-3.71-1.54-3.71-3.99,0-2.59,1.7-4.11,3.84-4.11s3.73,1.62,3.73,3.99ZM1146.99,118.77c0,1.7.98,2.98,2.35,2.98s2.35-1.26,2.35-3.01c0-1.31-.66-2.98-2.32-2.98s-2.38,1.54-2.38,3.01Z"/>
                <path id="r-15" data-name="r" d="M1154.91,117.3c0-.91-.02-1.7-.06-2.42h1.23l.05,1.52h.06c.35-1.04,1.2-1.7,2.14-1.7.16,0,.27.02.4.05v1.33c-.14-.03-.29-.05-.48-.05-.99,0-1.7.75-1.89,1.81-.03.19-.06.42-.06.66v4.13h-1.39v-5.33Z"/>
                <path id="o-16" data-name="o" d="M1166.99,118.69c0,2.87-1.99,4.11-3.86,4.11-2.1,0-3.71-1.54-3.71-3.99,0-2.59,1.7-4.11,3.84-4.11s3.73,1.62,3.73,3.99ZM1160.85,118.77c0,1.7.98,2.98,2.35,2.98s2.35-1.26,2.35-3.01c0-1.31-.66-2.98-2.32-2.98s-2.38,1.54-2.38,3.01Z"/>
                <path id="n-16" data-name="n" d="M1168.77,116.98c0-.8-.02-1.46-.06-2.1h1.25l.08,1.28h.03c.38-.74,1.28-1.46,2.56-1.46,1.07,0,2.74.64,2.74,3.3v4.63h-1.41v-4.47c0-1.25-.46-2.29-1.79-2.29-.93,0-1.65.66-1.89,1.44-.06.18-.1.42-.1.66v4.66h-1.41v-5.65Z"/>
                <path id="t-15" data-name="t" d="M1179.28,112.66v2.23h2.02v1.07h-2.02v4.18c0,.96.27,1.5,1.06,1.5.37,0,.64-.05.82-.1l.06,1.06c-.27.11-.7.19-1.25.19-.66,0-1.18-.21-1.52-.59-.4-.42-.54-1.1-.54-2.02v-4.23h-1.2v-1.07h1.2v-1.86l1.38-.37Z"/>
                <path id="o-17" data-name="o" d="M1189.79,118.69c0,2.87-1.99,4.11-3.86,4.11-2.1,0-3.71-1.54-3.71-3.99,0-2.59,1.7-4.11,3.84-4.11s3.73,1.62,3.73,3.99ZM1183.65,118.77c0,1.7.98,2.98,2.35,2.98s2.35-1.26,2.35-3.01c0-1.31-.66-2.98-2.32-2.98s-2.38,1.54-2.38,3.01Z"/>
                </g>
                <g id="missisauga-group">
                <path id="M-2" data-name="M" d="M1057.23,162.2c-.06-1.13-.13-2.48-.12-3.49h-.04c-.28.95-.61,1.95-1.02,3.07l-1.43,3.92h-.79l-1.31-3.85c-.38-1.14-.71-2.18-.94-3.14h-.02c-.02,1.01-.08,2.36-.16,3.57l-.22,3.47h-1l.56-8.08h1.33l1.38,3.91c.34,1,.61,1.88.82,2.72h.04c.2-.82.49-1.7.85-2.72l1.44-3.91h1.33l.5,8.08h-1.02l-.2-3.55Z"/>
                <path id="i-16" data-name="i" d="M1061.35,158.31c.01.36-.25.65-.67.65-.37,0-.64-.29-.64-.65s.28-.66.66-.66.65.29.65.66ZM1060.17,165.75v-5.8h1.05v5.8h-1.05Z"/>
                <path id="s-5" data-name="s" d="M1062.84,164.67c.31.2.86.42,1.39.42.77,0,1.13-.38,1.13-.86,0-.5-.3-.78-1.08-1.07-1.04-.37-1.54-.95-1.54-1.64,0-.94.76-1.7,2-1.7.59,0,1.1.17,1.43.36l-.26.77c-.23-.14-.65-.34-1.19-.34-.62,0-.97.36-.97.79,0,.48.35.7,1.1.98,1.01.38,1.52.89,1.52,1.75,0,1.02-.79,1.74-2.17,1.74-.64,0-1.22-.16-1.63-.4l.26-.8Z"/>
                <path id="s-6" data-name="s" d="M1067.59,164.67c.31.2.86.42,1.39.42.77,0,1.13-.38,1.13-.86,0-.5-.3-.78-1.08-1.07-1.04-.37-1.54-.95-1.54-1.64,0-.94.76-1.7,2-1.7.59,0,1.1.17,1.43.36l-.26.77c-.23-.14-.65-.34-1.19-.34-.62,0-.97.36-.97.79,0,.48.35.7,1.1.98,1.01.38,1.52.89,1.52,1.75,0,1.02-.79,1.74-2.17,1.74-.64,0-1.22-.16-1.63-.4l.26-.8Z"/>
                <path id="i-17" data-name="i" d="M1073.66,158.31c.01.36-.25.65-.67.65-.37,0-.64-.29-.64-.65s.28-.66.66-.66.65.29.65.66ZM1072.48,165.75v-5.8h1.05v5.8h-1.05Z"/>
                <path id="s-7" data-name="s" d="M1075.15,164.67c.31.2.86.42,1.39.42.77,0,1.13-.38,1.13-.86,0-.5-.3-.78-1.08-1.07-1.04-.37-1.54-.95-1.54-1.64,0-.94.76-1.7,2-1.7.59,0,1.1.17,1.43.36l-.26.77c-.23-.14-.65-.34-1.19-.34-.62,0-.97.36-.97.79,0,.48.35.7,1.1.98,1.01.38,1.52.89,1.52,1.75,0,1.02-.79,1.74-2.17,1.74-.64,0-1.22-.16-1.63-.4l.26-.8Z"/>
                <path id="s-8" data-name="s" d="M1079.9,164.67c.31.2.86.42,1.39.42.77,0,1.13-.38,1.13-.86,0-.5-.3-.78-1.08-1.07-1.04-.37-1.54-.95-1.54-1.64,0-.94.76-1.7,2-1.7.59,0,1.1.17,1.43.36l-.26.77c-.23-.14-.65-.34-1.19-.34-.62,0-.97.36-.97.79,0,.48.35.7,1.1.98,1.01.38,1.52.89,1.52,1.75,0,1.02-.79,1.74-2.17,1.74-.64,0-1.22-.16-1.63-.4l.26-.8Z"/>
                <path id="a-24" data-name="a" d="M1088.01,165.75l-.08-.73h-.04c-.32.46-.95.86-1.78.86-1.17,0-1.77-.83-1.77-1.67,0-1.4,1.25-2.17,3.49-2.16v-.12c0-.48-.13-1.34-1.32-1.34-.54,0-1.1.17-1.51.43l-.24-.7c.48-.31,1.17-.52,1.91-.52,1.78,0,2.21,1.21,2.21,2.37v2.17c0,.5.02,1,.1,1.39h-.96ZM1087.85,162.78c-1.15-.02-2.46.18-2.46,1.31,0,.68.46,1.01,1,1.01.76,0,1.24-.48,1.4-.97.04-.11.06-.23.06-.34v-1.01Z"/>
                <path id="u-2" data-name="u" d="M1095.44,164.16c0,.6.01,1.13.05,1.58h-.94l-.06-.95h-.02c-.28.47-.89,1.08-1.92,1.08-.91,0-2-.5-2-2.54v-3.39h1.05v3.21c0,1.1.34,1.85,1.3,1.85.71,0,1.2-.49,1.39-.96.06-.16.1-.35.1-.54v-3.56h1.05v4.22Z"/>
                <path id="g-5" data-name="g" d="M1102.19,159.94c-.02.42-.05.89-.05,1.6v3.37c0,1.33-.26,2.15-.83,2.65-.56.53-1.38.7-2.11.7s-1.46-.17-1.93-.48l.26-.8c.38.24.98.46,1.7.46,1.08,0,1.87-.56,1.87-2.03v-.65h-.02c-.32.54-.95.97-1.85.97-1.44,0-2.47-1.22-2.47-2.83,0-1.97,1.28-3.08,2.61-3.08,1.01,0,1.56.53,1.81,1.01h.02l.05-.88h.92ZM1101.1,162.23c0-.18-.01-.34-.06-.48-.19-.61-.71-1.12-1.48-1.12-1.01,0-1.73.85-1.73,2.19,0,1.14.58,2.09,1.71,2.09.65,0,1.24-.41,1.46-1.08.06-.18.08-.38.08-.56v-1.04Z"/>
                <path id="a-25" data-name="a" d="M1107.11,165.75l-.08-.73h-.04c-.32.46-.95.86-1.78.86-1.17,0-1.77-.83-1.77-1.67,0-1.4,1.25-2.17,3.49-2.16v-.12c0-.48-.13-1.34-1.32-1.34-.54,0-1.1.17-1.51.43l-.24-.7c.48-.31,1.17-.52,1.91-.52,1.78,0,2.21,1.21,2.21,2.37v2.17c0,.5.02,1,.1,1.39h-.96ZM1106.96,162.78c-1.15-.02-2.46.18-2.46,1.31,0,.68.46,1.01,1,1.01.76,0,1.24-.48,1.4-.97.04-.11.06-.23.06-.34v-1.01Z"/>
                </g>
                <g id="guelph-group">
                <path id="G-2" data-name="G" d="M898.34,161.7c-.47.17-1.39.44-2.48.44-1.22,0-2.23-.31-3.02-1.07-.7-.67-1.13-1.75-1.13-3.01.01-2.41,1.67-4.17,4.38-4.17.94,0,1.67.2,2.01.37l-.25.85c-.43-.19-.97-.35-1.79-.35-1.97,0-3.25,1.22-3.25,3.25s1.24,3.26,3.12,3.26c.68,0,1.15-.1,1.39-.22v-2.41h-1.64v-.84h2.66v3.89Z"/>
                <path id="u-3" data-name="u" d="M904.76,160.47c0,.6.01,1.13.05,1.58h-.94l-.06-.95h-.02c-.28.47-.89,1.08-1.92,1.08-.91,0-2-.5-2-2.54v-3.39h1.06v3.21c0,1.1.34,1.85,1.3,1.85.71,0,1.2-.49,1.39-.96.06-.16.1-.35.1-.54v-3.56h1.06v4.22Z"/>
                <path id="e-15" data-name="e" d="M907.1,159.35c.02,1.43.94,2.01,1.99,2.01.76,0,1.21-.13,1.61-.3l.18.76c-.37.17-1.01.36-1.93.36-1.79,0-2.85-1.18-2.85-2.93s1.03-3.13,2.72-3.13c1.9,0,2.4,1.67,2.4,2.73,0,.22-.02.38-.04.49h-4.08ZM910.2,158.59c.01-.67-.28-1.71-1.46-1.71-1.07,0-1.54.98-1.62,1.71h3.08Z"/>
                <path id="l-10" data-name="l" d="M912.53,153.54h1.06v8.52h-1.06v-8.52Z"/>
                <path id="p" d="M915.36,158.15c0-.74-.02-1.34-.05-1.9h.95l.05,1h.02c.43-.71,1.12-1.13,2.06-1.13,1.4,0,2.46,1.19,2.46,2.95,0,2.09-1.27,3.12-2.64,3.12-.77,0-1.44-.34-1.79-.91h-.02v3.15h-1.04v-6.28ZM916.4,159.69c0,.16.02.3.05.43.19.73.83,1.24,1.58,1.24,1.12,0,1.76-.91,1.76-2.24,0-1.16-.61-2.16-1.73-2.16-.72,0-1.39.52-1.6,1.31-.04.13-.07.29-.07.43v1Z"/>
                <path id="h-9" data-name="h" d="M922.19,153.54h1.06v3.62h.02c.17-.3.43-.56.76-.74.31-.18.68-.3,1.08-.3.78,0,2.03.48,2.03,2.48v3.45h-1.06v-3.33c0-.94-.35-1.73-1.34-1.73-.68,0-1.22.48-1.42,1.06-.06.14-.07.3-.07.5v3.5h-1.06v-8.52Z"/>
                </g>
                <g id="brampton-group">
                <path id="B-4" data-name="B" d="M1027.05,88.58c.34-.07.88-.13,1.43-.13.78,0,1.29.13,1.67.44.32.23.5.59.5,1.07,0,.59-.39,1.1-1.03,1.33v.02c.58.14,1.25.62,1.25,1.52,0,.52-.21.92-.51,1.22-.42.39-1.11.57-2.1.57-.54,0-.95-.04-1.21-.07v-5.97ZM1027.84,91.06h.71c.83,0,1.31-.43,1.31-1.02,0-.71-.54-.99-1.33-.99-.36,0-.57.03-.69.05v1.95ZM1027.84,93.97c.15.03.38.04.66.04.81,0,1.56-.3,1.56-1.18,0-.83-.71-1.17-1.57-1.17h-.65v2.31Z"/>
                <path id="r-16" data-name="r" d="M1031.9,91.57c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="a-26" data-name="a" d="M1037.21,94.57l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1037.1,92.34c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="m-6" data-name="m" d="M1039.14,91.39c0-.45,0-.82-.04-1.18h.69l.04.7h.03c.24-.41.65-.8,1.37-.8.59,0,1.04.36,1.23.87h.02c.13-.24.31-.43.49-.57.26-.2.55-.31.96-.31.58,0,1.43.38,1.43,1.89v2.57h-.77v-2.47c0-.84-.31-1.34-.95-1.34-.45,0-.8.33-.94.72-.04.11-.06.25-.06.4v2.69h-.77v-2.61c0-.69-.31-1.2-.91-1.2-.5,0-.86.4-.98.79-.04.12-.06.25-.06.39v2.63h-.77v-3.18Z"/>
                <path id="p-2" data-name="p" d="M1046.64,91.63c0-.56-.02-1.01-.04-1.42h.71l.04.75h.02c.32-.53.84-.85,1.55-.85,1.05,0,1.85.89,1.85,2.21,0,1.57-.95,2.34-1.98,2.34-.58,0-1.08-.25-1.34-.68h-.02v2.37h-.78v-4.72ZM1047.43,92.79c0,.12.02.23.04.32.14.55.62.93,1.19.93.84,0,1.32-.68,1.32-1.68,0-.87-.46-1.62-1.3-1.62-.54,0-1.04.39-1.2.98-.03.1-.05.22-.05.32v.75Z"/>
                <path id="t-16" data-name="t" d="M1052.72,88.96v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.86-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.67v-.6h.67v-1.04l.77-.21Z"/>
                <path id="o-18" data-name="o" d="M1058.63,92.35c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.96-2.31,2.16-2.31s2.1.91,2.1,2.24ZM1055.18,92.4c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="n-17" data-name="n" d="M1059.63,91.39c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                </g>
                <g id="vaugh-group">
                <path id="V" d="M1083.78,64.06l-1.98-6.07h.85l.95,2.99c.26.82.49,1.56.65,2.27h.02c.17-.7.42-1.47.69-2.26l1.03-3h.84l-2.17,6.07h-.86Z"/>
                <path id="a-27" data-name="a" d="M1089.56,64.06l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1089.44,61.84c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="u-4" data-name="u" d="M1095.13,62.87c0,.45,0,.85.04,1.19h-.7l-.04-.71h-.02c-.21.35-.67.81-1.44.81-.68,0-1.5-.38-1.5-1.91v-2.55h.79v2.41c0,.83.25,1.39.97,1.39.53,0,.9-.37,1.04-.72.04-.12.07-.26.07-.41v-2.67h.79v3.17Z"/>
                <path id="g-6" data-name="g" d="M1100.2,59.7c-.02.32-.04.67-.04,1.2v2.53c0,1-.2,1.61-.62,1.99-.42.4-1.04.52-1.58.52s-1.1-.13-1.45-.36l.2-.6c.29.18.74.34,1.28.34.81,0,1.41-.42,1.41-1.52v-.49h-.02c-.24.4-.71.73-1.39.73-1.08,0-1.85-.92-1.85-2.12,0-1.48.96-2.31,1.96-2.31.76,0,1.17.4,1.36.76h.02l.04-.66h.69ZM1099.38,61.42c0-.14,0-.25-.04-.36-.14-.46-.53-.84-1.11-.84-.76,0-1.3.64-1.3,1.65,0,.85.43,1.57,1.29,1.57.49,0,.93-.31,1.1-.81.04-.13.06-.29.06-.42v-.78Z"/>
                <path id="h-10" data-name="h" d="M1101.48,57.67h.79v2.72h.02c.13-.22.32-.42.57-.56.23-.13.51-.23.81-.23.58,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.05.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="n-18" data-name="n" d="M1106.47,60.88c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                </g>
                <g id="whitby-group">
                <path id="W-2" data-name="W" d="M1256.29,40.95l-1.54-6.07h.83l.72,3.07c.18.76.34,1.51.45,2.1h.02c.1-.6.29-1.32.5-2.11l.81-3.06h.82l.74,3.08c.17.72.33,1.44.42,2.08h.02c.13-.67.3-1.34.49-2.1l.8-3.06h.8l-1.72,6.07h-.82l-.77-3.16c-.19-.77-.32-1.37-.4-1.98h-.02c-.11.6-.24,1.2-.47,1.98l-.86,3.16h-.82Z"/>
                <path id="h-11" data-name="h" d="M1262.85,34.56h.79v2.72h.02c.13-.22.32-.42.57-.56.23-.13.51-.23.81-.23.58,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.05.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="i-18" data-name="i" d="M1268.72,35.37c0,.27-.19.49-.5.49-.28,0-.48-.22-.48-.49s.21-.5.5-.5.49.22.49.5ZM1267.84,40.95v-4.36h.79v4.36h-.79Z"/>
                <path id="t-17" data-name="t" d="M1270.9,35.34v1.25h1.13v.6h-1.13v2.35c0,.54.15.85.59.85.21,0,.36-.03.46-.05l.04.59c-.15.06-.4.11-.7.11-.37,0-.67-.12-.86-.33-.23-.23-.31-.62-.31-1.13v-2.38h-.67v-.6h.67v-1.04l.77-.21Z"/>
                <path id="b-2" data-name="b" d="M1272.89,40.95c.02-.3.04-.74.04-1.13v-5.27h.78v2.74h.02c.28-.49.78-.8,1.49-.8,1.08,0,1.84.9,1.84,2.22,0,1.56-.98,2.33-1.95,2.33-.63,0-1.13-.24-1.46-.82h-.03l-.04.72h-.68ZM1273.71,39.2c0,.1.02.2.04.29.15.55.61.93,1.19.93.83,0,1.32-.68,1.32-1.67,0-.87-.45-1.62-1.3-1.62-.54,0-1.04.37-1.21.97-.02.09-.04.2-.04.32v.78Z"/>
                <path id="y-3" data-name="y" d="M1278.27,36.59l.95,2.57c.1.29.21.63.28.89h.02c.08-.26.17-.59.28-.91l.86-2.56h.84l-1.19,3.11c-.57,1.49-.96,2.26-1.5,2.73-.39.34-.77.48-.97.51l-.2-.67c.2-.06.46-.19.69-.39.22-.17.49-.48.67-.88.04-.08.06-.14.06-.19s-.02-.11-.05-.21l-1.61-4.02h.86Z"/>
                </g>
                <g id="oshawa-group">
                <path id="O-2" data-name="O" d="M1324.24,37.74c0,2.09-1.27,3.2-2.82,3.2s-2.73-1.24-2.73-3.08c0-1.93,1.2-3.19,2.82-3.19s2.73,1.27,2.73,3.07ZM1319.53,37.84c0,1.3.7,2.46,1.94,2.46s1.94-1.14,1.94-2.52c0-1.21-.63-2.47-1.94-2.47s-1.94,1.2-1.94,2.53Z"/>
                <path id="s-9" data-name="s" d="M1325.12,40.02c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.22-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                <path id="h-12" data-name="h" d="M1328.79,34.44h.79v2.72h.02c.13-.22.32-.42.57-.56.23-.13.51-.23.81-.23.58,0,1.52.36,1.52,1.86v2.59h-.79v-2.5c0-.7-.26-1.3-1.01-1.3-.51,0-.92.36-1.06.79-.05.11-.05.23-.05.38v2.63h-.79v-6.39Z"/>
                <path id="a-28" data-name="a" d="M1336.2,40.83l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1336.08,38.61c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                <path id="w" d="M1338.36,36.48l.58,2.21c.13.49.24.94.32,1.39h.03c.1-.44.24-.91.39-1.38l.71-2.22h.67l.67,2.18c.16.52.29.98.39,1.42h.03c.07-.44.19-.9.33-1.41l.62-2.19h.78l-1.4,4.36h-.72l-.67-2.08c-.15-.49-.28-.92-.39-1.43h-.02c-.11.52-.24.97-.4,1.44l-.7,2.07h-.72l-1.31-4.36h.81Z"/>
                <path id="a-29" data-name="a" d="M1347.05,40.83l-.06-.55h-.03c-.24.34-.71.65-1.33.65-.88,0-1.33-.62-1.33-1.25,0-1.05.94-1.63,2.62-1.62v-.09c0-.36-.1-1.01-.99-1.01-.41,0-.83.13-1.13.32l-.18-.52c.36-.23.88-.39,1.43-.39,1.33,0,1.66.91,1.66,1.78v1.63c0,.38.02.75.07,1.04h-.72ZM1346.93,38.61c-.86-.02-1.85.14-1.85.98,0,.51.34.76.75.76.57,0,.93-.36,1.05-.73.03-.08.04-.17.04-.25v-.76Z"/>
                </g>
                <g id="ingersol-group">
                <path id="I" d="M707.48,343.22v6.07h-.78v-6.07h.78Z"/>
                <path id="n-19" data-name="n" d="M708.91,346.11c0-.45,0-.82-.04-1.18h.7l.04.72h.02c.22-.41.72-.82,1.44-.82.6,0,1.54.36,1.54,1.85v2.6h-.79v-2.51c0-.7-.26-1.29-1.01-1.29-.52,0-.93.37-1.06.81-.04.1-.05.23-.05.37v2.62h-.79v-3.18Z"/>
                <path id="g-7" data-name="g" d="M717.66,344.93c-.02.32-.04.67-.04,1.2v2.53c0,1-.2,1.61-.62,1.99-.42.4-1.04.52-1.58.52s-1.1-.13-1.45-.36l.2-.6c.29.18.74.34,1.28.34.81,0,1.4-.42,1.4-1.52v-.49h-.02c-.24.4-.71.73-1.39.73-1.08,0-1.85-.92-1.85-2.12,0-1.48.96-2.31,1.96-2.31.76,0,1.17.4,1.36.76h.02l.04-.66h.69ZM716.84,346.65c0-.14,0-.25-.05-.36-.14-.46-.53-.84-1.11-.84-.76,0-1.3.64-1.3,1.65,0,.85.43,1.57,1.29,1.57.49,0,.93-.31,1.1-.81.05-.13.06-.29.06-.42v-.78Z"/>
                <path id="e-16" data-name="e" d="M719.38,347.26c.02,1.07.7,1.51,1.49,1.51.57,0,.91-.1,1.21-.23l.13.57c-.28.13-.76.27-1.45.27-1.34,0-2.14-.88-2.14-2.2s.77-2.35,2.04-2.35c1.42,0,1.8,1.25,1.8,2.05,0,.16-.02.29-.03.37h-3.06ZM721.7,346.69c0-.5-.21-1.29-1.1-1.29-.8,0-1.15.74-1.22,1.29h2.31Z"/>
                <path id="r-17" data-name="r" d="M723.45,346.29c0-.51,0-.95-.04-1.36h.69l.03.86h.04c.2-.59.68-.95,1.21-.95.09,0,.15,0,.22.03v.75c-.08-.02-.16-.03-.27-.03-.56,0-.95.42-1.06,1.02-.02.11-.04.23-.04.37v2.32h-.78v-3Z"/>
                <path id="s-10" data-name="s" d="M726.28,348.48c.23.15.65.31,1.04.31.58,0,.85-.29.85-.65s-.23-.58-.81-.8c-.78-.28-1.15-.71-1.15-1.23,0-.7.57-1.28,1.5-1.28.44,0,.83.13,1.07.27l-.2.58c-.17-.11-.49-.25-.89-.25-.47,0-.73.27-.73.59,0,.36.26.52.83.74.76.29,1.14.67,1.14,1.31,0,.77-.59,1.31-1.63,1.31-.48,0-.92-.12-1.22-.3l.2-.6Z"/>
                <path id="o-19" data-name="o" d="M733.9,347.08c0,1.61-1.12,2.31-2.17,2.31-1.18,0-2.09-.86-2.09-2.24,0-1.46.95-2.31,2.16-2.31s2.1.91,2.1,2.24ZM730.44,347.12c0,.95.55,1.67,1.32,1.67s1.32-.71,1.32-1.69c0-.74-.37-1.67-1.31-1.67s-1.34.86-1.34,1.69Z"/>
                <path id="l-11" data-name="l" d="M734.9,342.9h.79v6.39h-.79v-6.39Z"/>
                </g>
                <g id="kitchener-group">
                <path id="K-2" data-name="K" d="M817.89,220.89h1.04v3.9h.04c.22-.31.43-.6.64-.86l2.47-3.03h1.3l-2.93,3.43,3.15,4.65h-1.23l-2.66-3.97-.77.89v3.08h-1.04v-8.08Z"/>
                <path id="i-19" data-name="i" d="M825.66,221.54c.01.36-.25.65-.67.65-.37,0-.64-.29-.64-.65s.28-.66.66-.66.65.29.65.66ZM824.48,228.97v-5.8h1.06v5.8h-1.06Z"/>
                <path id="t-18" data-name="t" d="M828.56,221.5v1.67h1.51v.8h-1.51v3.13c0,.72.2,1.13.79,1.13.28,0,.48-.04.61-.07l.05.79c-.2.08-.53.14-.94.14-.49,0-.89-.16-1.14-.44-.3-.31-.41-.83-.41-1.51v-3.17h-.9v-.8h.9v-1.39l1.03-.28Z"/>
                <path id="c-4" data-name="c" d="M835.33,228.76c-.28.14-.89.34-1.67.34-1.75,0-2.89-1.19-2.89-2.96s1.22-3.08,3.12-3.08c.62,0,1.18.16,1.46.3l-.24.82c-.25-.14-.65-.28-1.22-.28-1.33,0-2.05.98-2.05,2.19,0,1.34.86,2.17,2.02,2.17.6,0,1-.16,1.3-.29l.18.79Z"/>
                <path id="h-13" data-name="h" d="M836.56,220.46h1.06v3.62h.02c.17-.3.43-.56.76-.74.31-.18.68-.3,1.08-.3.78,0,2.03.48,2.03,2.48v3.45h-1.06v-3.33c0-.94-.35-1.73-1.34-1.73-.68,0-1.22.48-1.42,1.06-.06.14-.07.3-.07.5v3.5h-1.06v-8.52Z"/>
                <path id="e-17" data-name="e" d="M843.81,226.26c.02,1.43.94,2.01,1.99,2.01.76,0,1.21-.13,1.61-.3l.18.76c-.37.17-1.01.36-1.93.36-1.79,0-2.85-1.18-2.85-2.93s1.03-3.13,2.72-3.13c1.9,0,2.4,1.67,2.4,2.73,0,.22-.02.38-.04.49h-4.08ZM846.91,225.51c.01-.67-.28-1.71-1.46-1.71-1.07,0-1.54.98-1.62,1.71h3.08Z"/>
                <path id="n-20" data-name="n" d="M849.24,224.74c0-.6-.01-1.09-.05-1.57h.94l.06.96h.02c.29-.55.96-1.09,1.92-1.09.8,0,2.05.48,2.05,2.47v3.47h-1.06v-3.35c0-.94-.35-1.71-1.34-1.71-.7,0-1.24.49-1.42,1.08-.05.13-.07.31-.07.49v3.49h-1.06v-4.23Z"/>
                <path id="e-18" data-name="e" d="M856.48,226.26c.02,1.43.94,2.01,1.99,2.01.76,0,1.21-.13,1.61-.3l.18.76c-.37.17-1.01.36-1.93.36-1.79,0-2.85-1.18-2.85-2.93s1.03-3.13,2.72-3.13c1.9,0,2.4,1.67,2.4,2.73,0,.22-.02.38-.04.49h-4.08ZM859.58,225.51c.01-.67-.28-1.71-1.46-1.71-1.07,0-1.54.98-1.62,1.71h3.08Z"/>
                <path id="r-18" data-name="r" d="M861.91,224.98c0-.68-.01-1.27-.05-1.81h.92l.04,1.14h.05c.26-.78.9-1.27,1.61-1.27.12,0,.2.01.3.04v1c-.11-.02-.22-.04-.36-.04-.74,0-1.27.56-1.42,1.36-.02.14-.05.31-.05.49v3.09h-1.04v-3.99Z"/>
                </g>
                <g id="waterloo-group">
                <path id="W-3" data-name="W" d="M810.03,192.68l-2.05-8.08h1.1l.96,4.09c.24,1.01.46,2.01.6,2.79h.02c.13-.8.38-1.76.66-2.81l1.08-4.08h1.09l.98,4.1c.23.96.44,1.92.56,2.77h.02c.17-.89.4-1.79.65-2.79l1.07-4.08h1.07l-2.29,8.08h-1.09l-1.02-4.21c-.25-1.03-.42-1.82-.53-2.64h-.02c-.14.8-.32,1.6-.62,2.64l-1.15,4.21h-1.09Z"/>
                <path id="a-30" data-name="a" d="M821.65,192.68l-.08-.73h-.04c-.32.46-.95.86-1.77.86-1.18,0-1.77-.83-1.77-1.67,0-1.4,1.25-2.17,3.49-2.16v-.12c0-.48-.13-1.34-1.32-1.34-.54,0-1.1.17-1.51.43l-.24-.7c.48-.31,1.18-.52,1.91-.52,1.77,0,2.21,1.21,2.21,2.37v2.17c0,.5.02,1,.1,1.39h-.96ZM821.49,189.72c-1.15-.02-2.46.18-2.46,1.31,0,.68.46,1.01,1,1.01.76,0,1.24-.48,1.4-.97.04-.11.06-.23.06-.34v-1.01Z"/>
                <path id="t-19" data-name="t" d="M825.44,185.21v1.67h1.51v.8h-1.51v3.13c0,.72.2,1.13.79,1.13.28,0,.48-.04.61-.07l.05.79c-.2.08-.53.14-.94.14-.49,0-.89-.16-1.14-.44-.3-.31-.41-.83-.41-1.51v-3.17h-.9v-.8h.9v-1.39l1.03-.28Z"/>
                <path id="e-19" data-name="e" d="M828.66,189.97c.02,1.43.94,2.01,1.99,2.01.76,0,1.21-.13,1.61-.3l.18.76c-.37.17-1.01.36-1.93.36-1.79,0-2.85-1.18-2.85-2.93s1.03-3.13,2.72-3.13c1.9,0,2.4,1.67,2.4,2.73,0,.22-.02.38-.04.49h-4.08ZM831.75,189.22c.01-.67-.28-1.71-1.46-1.71-1.07,0-1.54.98-1.62,1.71h3.08Z"/>
                <path id="r-19" data-name="r" d="M834.08,188.69c0-.68-.01-1.27-.05-1.81h.92l.04,1.14h.05c.26-.78.9-1.27,1.61-1.27.12,0,.2.01.3.04v1c-.11-.02-.22-.04-.36-.04-.74,0-1.27.56-1.42,1.36-.02.14-.05.31-.05.49v3.09h-1.04v-3.99Z"/>
                <path id="l-12" data-name="l" d="M838.05,184.17h1.06v8.52h-1.06v-8.52Z"/>
                <path id="o-20" data-name="o" d="M846.14,189.73c0,2.15-1.49,3.08-2.89,3.08-1.57,0-2.78-1.15-2.78-2.99,0-1.94,1.27-3.08,2.88-3.08s2.79,1.21,2.79,2.99ZM841.53,189.79c0,1.27.73,2.23,1.76,2.23s1.76-.95,1.76-2.25c0-.98-.49-2.23-1.74-2.23s-1.79,1.15-1.79,2.25Z"/>
                <path id="o-21" data-name="o" d="M852.72,189.73c0,2.15-1.49,3.08-2.89,3.08-1.57,0-2.78-1.15-2.78-2.99,0-1.94,1.27-3.08,2.88-3.08s2.79,1.21,2.79,2.99ZM848.12,189.79c0,1.27.73,2.23,1.76,2.23s1.76-.95,1.76-2.25c0-.98-.49-2.23-1.74-2.23s-1.79,1.15-1.79,2.25Z"/>
                </g>
            </g>
            <g id="numbers">
                <g id="_16-group" data-name="16-group">
                <path id="_1" data-name="1" d="M877.61,320.15h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_6" data-name="6" d="M894.48,319.66c-.44-.02-1,0-1.61.1-3.36.56-5.14,3.02-5.5,5.62h.07c.75-1,2.07-1.83,3.82-1.83,2.8,0,4.77,2.02,4.77,5.11,0,2.9-1.97,5.57-5.26,5.57s-5.6-2.63-5.6-6.74c0-3.12,1.12-5.57,2.68-7.13,1.31-1.29,3.07-2.09,5.06-2.34.63-.1,1.17-.12,1.56-.12v1.75ZM893.87,328.79c0-2.26-1.29-3.63-3.26-3.63-1.29,0-2.48.8-3.07,1.95-.15.24-.24.56-.24.95.05,2.6,1.24,4.53,3.48,4.53,1.85,0,3.09-1.53,3.09-3.8Z"/>
                </g>
                <g id="_15-group" data-name="15-group">
                <path id="_1-2" data-name="1" d="M1021.26,291.44h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_5" data-name="5" d="M1038.54,291.24h-6.04l-.61,4.06c.36-.05.71-.1,1.29-.1,1.22,0,2.43.27,3.41.85,1.24.71,2.26,2.07,2.26,4.06,0,3.09-2.46,5.4-5.89,5.4-1.73,0-3.19-.49-3.94-.97l.54-1.63c.66.39,1.95.88,3.38.88,2.02,0,3.75-1.31,3.75-3.43-.02-2.04-1.39-3.5-4.55-3.5-.9,0-1.61.1-2.19.17l1.02-7.59h7.57v1.8Z"/>
                </g>
                <g id="_14-group" data-name="14-group">
                <path id="_1-3" data-name="1" d="M1226.29,286.2h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_4" data-name="4" d="M1240.75,300.03v-4.31h-7.35v-1.41l7.06-10.1h2.31v9.83h2.21v1.68h-2.21v4.31h-2.02ZM1240.75,294.04v-5.28c0-.83.02-1.65.07-2.48h-.07c-.49.92-.88,1.61-1.31,2.34l-3.87,5.38v.05h5.18Z"/>
                </g>
                <g id="_13-group" data-name="13-group">
                <path id="_1-4" data-name="1" d="M1055.99,391.43h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_3" data-name="3" d="M1064.34,402.8c.61.39,2.02,1,3.5,1,2.75,0,3.6-1.75,3.58-3.07-.02-2.21-2.02-3.16-4.09-3.16h-1.19v-1.61h1.19c1.56,0,3.53-.8,3.53-2.68,0-1.27-.8-2.39-2.77-2.39-1.27,0-2.48.56-3.16,1.05l-.56-1.56c.83-.61,2.43-1.22,4.14-1.22,3.12,0,4.53,1.85,4.53,3.77,0,1.63-.97,3.02-2.92,3.72v.05c1.95.39,3.53,1.85,3.53,4.06,0,2.53-1.97,4.75-5.77,4.75-1.78,0-3.33-.56-4.11-1.07l.58-1.65Z"/>
                </g>
                <g id="_12-group" data-name="12-group">
                <path id="_1-5" data-name="1" d="M984.44,372.92h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_2" data-name="2" d="M992.28,386.74v-1.31l1.68-1.63c4.04-3.85,5.87-5.89,5.89-8.27,0-1.61-.78-3.09-3.14-3.09-1.44,0-2.63.73-3.36,1.34l-.68-1.51c1.09-.92,2.65-1.61,4.48-1.61,3.41,0,4.84,2.34,4.84,4.6,0,2.92-2.12,5.28-5.45,8.49l-1.27,1.17v.05h7.11v1.78h-10.1Z"/>
                </g>
                <g id="_11-group" data-name="11-group">
                <path id="_1-6" data-name="1" d="M911.79,399.34h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_1-7" data-name="1" d="M924.27,399.34h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                </g>
                <g id="_10-group" data-name="10-group">
                <path id="_1-8" data-name="1" d="M667.74,423.52h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                <path id="_0" data-name="0" d="M686.09,429.27c0,5.38-2,8.35-5.5,8.35-3.09,0-5.18-2.9-5.23-8.13,0-5.31,2.29-8.23,5.5-8.23s5.23,2.97,5.23,8.01ZM677.5,429.51c0,4.11,1.27,6.45,3.21,6.45,2.19,0,3.24-2.56,3.24-6.6s-1-6.45-3.21-6.45c-1.87,0-3.24,2.29-3.24,6.6Z"/>
                </g>
                <g id="_9-group" data-name="9-group">
                <path id="_9" data-name="9" d="M651.22,477.26c.46.05,1,0,1.73-.07,1.24-.17,2.41-.68,3.31-1.53,1.05-.95,1.8-2.34,2.09-4.21h-.07c-.88,1.07-2.14,1.7-3.72,1.7-2.85,0-4.67-2.14-4.67-4.84,0-2.99,2.17-5.62,5.4-5.62s5.23,2.63,5.23,6.67c0,3.48-1.17,5.91-2.73,7.42-1.22,1.19-2.9,1.92-4.6,2.12-.78.12-1.46.15-1.97.12v-1.75ZM652,468.16c0,1.97,1.19,3.36,3.04,3.36,1.44,0,2.56-.71,3.12-1.66.12-.19.19-.44.19-.78,0-2.7-1-4.77-3.24-4.77-1.83,0-3.12,1.61-3.12,3.85Z"/>
                </g>
                <g id="_8-group" data-name="8-group">
                <path id="_8" data-name="8" d="M568.05,477.54c0-2,1.19-3.41,3.14-4.23l-.02-.07c-1.75-.83-2.51-2.19-2.51-3.55,0-2.51,2.12-4.21,4.89-4.21,3.07,0,4.6,1.92,4.6,3.89,0,1.34-.66,2.77-2.6,3.7v.07c1.97.78,3.19,2.17,3.19,4.09,0,2.75-2.36,4.6-5.38,4.6-3.31,0-5.31-1.97-5.31-4.28ZM576.57,477.45c0-1.92-1.34-2.85-3.48-3.46-1.85.54-2.85,1.75-2.85,3.26-.07,1.61,1.14,3.02,3.16,3.02s3.16-1.19,3.16-2.82ZM570.68,469.54c0,1.58,1.19,2.43,3.02,2.92,1.36-.46,2.41-1.44,2.41-2.87,0-1.27-.75-2.58-2.68-2.58-1.78,0-2.75,1.17-2.75,2.53Z"/>
                </g>
                <g id="_7-group" data-name="7-group">
                <path id="_7" data-name="7" d="M89.4,625.87v1.41l-6.89,14.41h-2.21l6.86-13.99v-.05h-7.74v-1.78h9.98Z"/>
                </g>
                <g id="_6-group" data-name="6-group">
                <path id="_6-2" data-name="6" d="M668.25,346.53c-.44-.02-1,0-1.61.1-3.36.56-5.14,3.02-5.5,5.62h.07c.75-1,2.07-1.83,3.82-1.83,2.8,0,4.77,2.02,4.77,5.11,0,2.9-1.97,5.57-5.26,5.57s-5.6-2.63-5.6-6.74c0-3.12,1.12-5.57,2.68-7.13,1.31-1.29,3.07-2.09,5.06-2.34.63-.1,1.17-.12,1.56-.12v1.75ZM667.64,355.66c0-2.26-1.29-3.63-3.26-3.63-1.29,0-2.48.8-3.07,1.95-.15.24-.24.56-.24.95.05,2.6,1.24,4.53,3.48,4.53,1.85,0,3.09-1.53,3.09-3.8Z"/>
                </g>
                <g id="_5-group" data-name="5-group">
                <path id="_5-2" data-name="5" d="M885.48,166.45h-6.04l-.61,4.06c.37-.05.71-.1,1.29-.1,1.22,0,2.43.27,3.41.85,1.24.71,2.26,2.07,2.26,4.06,0,3.09-2.46,5.4-5.89,5.4-1.73,0-3.19-.49-3.94-.97l.54-1.63c.66.39,1.95.88,3.38.88,2.02,0,3.75-1.31,3.75-3.43-.02-2.04-1.39-3.5-4.55-3.5-.9,0-1.61.1-2.19.17l1.02-7.59h7.57v1.8Z"/>
                </g>
                <g id="_4-group" data-name="4-group">
                <path id="_4-2" data-name="4" d="M511.47,255.55v-4.31h-7.35v-1.41l7.06-10.1h2.31v9.83h2.21v1.68h-2.21v4.31h-2.02ZM511.47,249.56v-5.28c0-.83.02-1.65.07-2.48h-.07c-.49.92-.88,1.61-1.31,2.34l-3.87,5.38v.05h5.18Z"/>
                </g>
                <g id="_3-group" data-name="3-group">
                <path id="_3-2" data-name="3" d="M553.98,162.19c.61.39,2.02,1,3.5,1,2.75,0,3.6-1.75,3.58-3.07-.02-2.21-2.02-3.16-4.09-3.16h-1.19v-1.61h1.19c1.56,0,3.53-.8,3.53-2.68,0-1.27-.8-2.39-2.77-2.39-1.27,0-2.48.56-3.16,1.05l-.56-1.56c.83-.61,2.43-1.22,4.14-1.22,3.12,0,4.53,1.85,4.53,3.77,0,1.63-.97,3.02-2.92,3.72v.05c1.95.39,3.53,1.85,3.53,4.06,0,2.53-1.97,4.75-5.77,4.75-1.78,0-3.33-.56-4.11-1.07l.58-1.65Z"/>
                </g>
                <g id="_2-group" data-name="2-group">
                <path id="_2-2" data-name="2" d="M457.53,82.92v-1.31l1.68-1.63c4.04-3.85,5.87-5.89,5.89-8.27,0-1.61-.78-3.09-3.14-3.09-1.44,0-2.63.73-3.36,1.34l-.68-1.51c1.1-.92,2.65-1.61,4.48-1.61,3.41,0,4.84,2.34,4.84,4.6,0,2.92-2.12,5.28-5.45,8.49l-1.27,1.17v.05h7.11v1.78h-10.1Z"/>
                </g>
                <g id="_1-group" data-name="1-group">
                <path id="_1-9" data-name="1" d="M512.26,37.05h-.05l-2.75,1.48-.41-1.63,3.46-1.85h1.83v15.82h-2.07v-13.82Z"/>
                </g>
            </g>
            <g id="cityspots">
                <circle id="hamilton" class="cls-9" cx="1018.8" cy="277.11" r="2.5"/>
                <circle id="toronto" class="cls-9" cx="1160.15" cy="128.18" r="2.5"/>
                <circle id="waterloo" class="cls-9" cx="827.03" cy="198.34" r="2.5"/>
                <circle id="london" class="cls-9" cx="615.92" cy="372.72" r="2.5"/>
                <circle id="strathroy" class="cls-9" cx="504.69" cy="383.54" r="1.25"/>
                <circle id="lambtonshores" class="cls-9" cx="433.34" cy="287.32" r="1.25"/>
                <circle id="st.thomas" class="cls-9" cx="634.76" cy="447.82" r="1.25"/>
                <circle id="ingersol" class="cls-9" cx="720.28" cy="353.78" r="1.25"/>
                <circle id="chathamkent" class="cls-9" cx="338.77" cy="583.38" r="1.25"/>
                <circle id="kitchener" class="cls-9" cx="839.93" cy="216.64" r="2.5"/>
                <circle id="brampton" class="cls-9" cx="1048.07" cy="99.34" r="1.25"/>
                <circle id="oshawa" class="cls-9" cx="1311.82" cy="37.87" r="1.25"/>
                <circle id="mississauga" class="cls-9" cx="1083.82" cy="151.37" r="2.5"/>
                <circle id="burlington" class="cls-9" cx="1037.05" cy="248.19" r="1.25"/>
            </g>
            <g id="hotspots">
                <circle id="hs16" class="cls-6" cx="910.09" cy="316.4" r="6.95"/>
                <circle id="hs15" class="cls-6" cx="999.7" cy="297.48" r="6.95"/>
                <circle id="hs14" class="cls-6" cx="1207.02" cy="295.4" r="6.95"/>
                <circle id="hs13" class="cls-6" cx="1087.77" cy="399.78" r="6.95"/>
                <circle id="hs12" class="cls-6" cx="963.29" cy="383.07" r="6.95"/>
                <circle id="hs11" class="cls-6" cx="943.72" cy="411.26" r="6.95"/>
                <circle id="hs10" class="cls-6" cx="700.26" cy="440.22" r="6.95"/>
                <circle id="hs9" class="cls-6" cx="637.56" cy="459.6" r="6.95"/>
                <circle id="hs8" class="cls-6" cx="596.66" cy="474.67" r="6.95"/>
                <circle id="hs7" class="cls-6" cx="107.44" cy="633.2" r="6.95"/>
                <circle id="hs6" class="cls-6" cx="641.71" cy="354.11" r="6.95"/>
                <circle id="hs5" class="cls-6" cx="901.58" cy="173.79" r="6.95"/>
                <circle id="hs4" class="cls-6" cx="531.58" cy="247.64" r="6.95"/>
                <circle id="hs3" class="cls-6" cx="538.53" cy="157.97" r="6.95"/>
                <circle id="hs2" class="cls-6" cx="485.89" cy="75.97" r="6.95"/>
                <circle id="hs1" class="cls-6" cx="492.69" cy="50.87" r="6.95"/>
            </g>

        </svg>

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