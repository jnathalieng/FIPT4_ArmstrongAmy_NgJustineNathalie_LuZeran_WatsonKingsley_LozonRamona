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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>

<body data-page="contact">

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

        <section class="hero-section" id="contact-hero">
            <div class="hero-triangle"></div>
            <div class="hero-title-con">
                <div class="hero-title"><p>Get in Touch</p></div>
                <div class="hero-subtitle"><p>We'd love to hear from you</p></div>
            </div>
        </section>

        <section class="contact-message">
            <div class="contact-mission">
                <p>We're here to help preserve the stories of London's Aviation
                <br>Legacy</p>
            </div>
            <div class="contact-question">
                <p>Whether you have and inquiry about research, events, commemorations, our team is ready to assist.</p>
            </div>
        </section>

        <section class="contact-addresses">
            <div class="phone-number">
                <p>
                    (519) 455-0430
                </p>
            </div>

            <div class="address">
                <p>
                    info@427wing.com
                    <br>
                    <br>2155 Crumlin Side Rd, London, ON N5V 3Z9, Canada.
                </p>
            </div>
        </section>


        <!-- CONTACT FORM -->
<article class="form-con" id="contact-form">
  <form @submit.prevent="regForm" class="input-form" id="contactForm">

        <label for="name" >Name:<span class="required">*</span></label>
        <p class="field-error" v-if="errors.name">@{{errors.name}}</p>
        <input  v-model="formData.name" 
                class="form-box"
                id="name"
                type="text" 
                name="name" 
                placeholder="i.e. John Doe"/>

        <label for="email" >Email:<span class="required">*</span></label>
        <p class="field-error" v-if="errors.email">@{{errors.email}}</p>
        <input  v-model="formData.email" 
                class="form-box"
                id="email"
                type="email" 
                name="email" 
                placeholder="JohnDoe@gmail.com"/>

        <label for="message">Message: <span class="required">*</span></label>
        <p class="field-error" v-if="errors.message">@{{errors.message}}</p>
        <textarea   v-model="formData.message" 
                    class="form-box"
                    id="msg"
                    name="message">
        </textarea>

        <label for="testAnswer">What is 4+4 (Type the number) <span class="required">*</span></label>
        <p class="field-error" v-if="errors.testAnswer">@{{errors.testAnswer}}</p>
        <input placeholder="0" type="number" id="testAnswer" v-model="formData.testAnswer">                    

        <input type="text" id="honeypot" v-model="formData.honeypot">

      </div>
      <button class="send-button" type="submit">Send</button>

        <p class="field-error" v-if="errors.general">@{{errors.general}}</p>
        <div v-if="responseMessage">
          @{{responseMessage}}
        </div>
    </form>
</article>


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