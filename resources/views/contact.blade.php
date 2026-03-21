<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
        <script type="importmap">
      {
        "imports": {
          "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
        }
      }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
</head>

<body data-page="contact">

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
                        <li><a class="button-text hover-item" href="{{ route('comm') }}">Commemoration</a></li>                     
                        <li><a class="button-text hover-item" href="{{ route('BOB') }}">Battle of Britain</a></li>
                        <li><a class="button-text hover-item" href="{{ route('events') }}">Events</a></li>
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

<article class="form-con" id="app">
  <form @submit.prevent="regForm" class="input-form" id="contactForm">
    <div>
      <label>Name:</label>
      <input  v-model="formData.name" 
              class="form-box"
              id="name"
              type="text" 
              name="name" 
              required />
    </div>
      <div>
        <label>Email:</label>
        <input  v-model="formData.email" 
                class="form-box"
                id="email"
                type="email" 
                name="email" 
                required />
      </div>
      <div>
        <label>Message:</label>
        <textarea   v-model="formData.message" 
                    class="form-box"
                    id="msg"
                    name="message" 
                    required></textarea>
      </div>
      <button type="submit">Send</button>
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