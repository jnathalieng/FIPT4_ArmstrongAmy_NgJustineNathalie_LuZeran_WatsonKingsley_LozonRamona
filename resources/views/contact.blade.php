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