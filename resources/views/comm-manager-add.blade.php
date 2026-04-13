<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Commemoration</title>   
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
</head>
<body data-page="comm-add">
    <header class="header">
        <!-- navbar -->
        <nav class="desktop-nav">
            <ul>
                <li class="desktop-logo-con m-l-nav-item">
                    <a class="desktop-logo" href="{{ route('home') }}">
                        <img src="{{ asset('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="image of logo">
                    </a>
                </li>
                <li class="m-l-nav-item" id="dashboard-nav">
                    <a class="nav-anchor" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="m-l-nav-item" id="events-manager-nav">
                    <a class="nav-anchor" href="{{ route('events-manager') }}">Events</a>
                </li>
                <li class="m-l-nav-item" id="blog-manager-nav">
                    <a class="nav-anchor" href="{{ route('blog-manager') }}">Blog</a>
                </li>
                <li class="m-l-nav-item" id="blog-manager-nav">
                    <a class="nav-anchor" href="{{ route('comm-manager') }}">Commemoration</a>
                </li>
                <li class="m-l-nav-item" id="blog-manager-nav">
                    <a class="nav-anchor" href="{{ route('gallery-manager') }}">Gallery</a>
                </li>
                <li class="m-l-nav-item" id="blog-manager-nav">
                    <a class="nav-anchor" href="{{ route('social-media-manager') }}">Social Media</a>
                </li>
                <li class="m-l-nav-item" id="blog-manager-nav">
                    <a class="nav-anchor" href="{{ route('logout') }}">Logout</a>
                </li>


                <li class="m-l-nav-item drop-down-wrap hidden" id="history-nav">
                    <a class="nav-anchor">Website</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('about') }}">About</a>
                        </li>
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
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('events') }}">Events</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('blog') }}">Blog</a>
                        </li>     
                        <li class="dropdown-item">
                            <a class="dropdown-anchor" href="{{ route('contact') }}">Contact</a>
                        </li>                    
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- mobile hamburger menu -->
        <div class="hamburger-bar">
            <a href="{{ route('home') }}" class="ham-logo-con">
                <img src="{{ asset('images/icons/logos/SVG_FILES_WHITE/FINAL_LOGOWHITE.svg') }}" alt="image of logo">
            </a>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
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
                    <a class="mobile-nav-item" href="{{ route('home') }}">Home</a>
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
                    <a class="mobile-nav-item" href="{{ route('blog') }}">Blogs</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

<main style="min-height: 100vh;">

<section class="cms-page-top dashboard-page-con grid-con">
    <div class="col-span-full">
        <p class="g-header-text">Dashboard / Events Manager / <span class="page-path">Create New Event</span></p>
    </div>
        <div class="col-span-full">
            <p class="r-header-text">Create New Event</p>
        </div>

    <section class="create-form">
        <p>Event Details</p>

        <article class="form-con" id="contact-form">
  <form @submit.prevent="regForm" class="input-form" id="contactForm">

        <label for="name" >Name:<span class="required">*</span></label>
        <p class="field-error" v-if="errors.name">@{{errors.name}}</p>
        <input  v-model="formData.title" 
                class="form-box"
                id="event-title-input"
                type="text" 
                name="Event-Title" 
                placeholder="Event Title"/>

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
    </section>
</section>
</main>

<!-- FOOTER SECTION -->

<footer id="main-footer">
    <!-- FOOTER BOTTOM BAR -->
    <div id="footer-bottom">
        <p>Copyright &copy;2026 LONDON AVIATION MUSEUM | <a href="#">Privacy Policy</a> | <a href="#">Terms</a></p>
    </div>

</footer>
</body>
</html>