<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>   
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
</head>
<body data-page="dashboard">
    <header class="header">
        <!-- navbar -->
        <nav class="desktop-nav">
            <ul>
                <li class="desktop-logo-con m-l-nav-item">
                    <a class="desktop-logo" id="cms-logo" href="{{ route('home') }}">
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
            <a href="{{ route('home') }}" class="ham-logo-con" id="cms-logo-mobile">
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
                    <a class="mobile-nav-item" href="{{ route('dashboard') }}">Dashboard</a>
                </li> 
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('events-manager') }}">Events</a>
                </li>             
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('comm-manager') }}">Commemoration</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('gallery-manager') }}">Gallery</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('social-media-manager') }}">Social Media</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>

<section class="cms-page-top dashboard-page-con grid-con">
    <div class="col-span-full">
        <h2 class="r-title-text">
            Home/Dashboard
        </h2>
    </div>

    <div class="col-span-full">
        <h2 class="g-header-text">Welcome Back, Admin</h2>
        <h3 class="g-header-text">Manage Events, Blog Posts, and other Museum Contents</h3>
    </div>

    <section class="stat-bar cms-card col-span-full">
        
    <div class="stat-con">
            <img src="{{ asset('images\icons\calendar-solid-full.svg') }}">

            <div>
                <p class="r-body-text">TOTAL EVENTS</p>
                <p class="b-header-text">12</p>
            </div>
        </div>

    <div class="grey-divider"></div>

        <div class="stat-con">
            <img src="{{ asset('images\icons\file-lines-regular-full.svg') }}">
            
            <div>
                <p class="r-body-text">BLOG POSTS</p>
                <p class="b-header-text">28</p>
            </div>
        </div>

  <div class="grey-divider"></div>

        <div class="stat-con">
            <img src="{{ asset('images\icons\star-solid-full.svg') }}">

            <div>
                <p class="r-body-text">COMMEMORATION</p>
                <p class="b-header-text">28</p>
            </div>
        </div>

  <div class="grey-divider"></div>

        <div class="stat-con">
            <img src="{{ asset('images\icons\comment-dots-regular-full.svg') }}">
            <div>
                <p class="r-body-text">SOCIAL POSTS</p>
                <p class="b-header-text">28</p>
            </div>
        </div>
    </section>

    <section class="cms-card actions-and-content-con col-span-full">
        <div>
            <article class="card-title-bar">
                <h3>
                    Quick Actions
                </h3>
            <img src="{{ asset('images\icons\ellipsis-solid-full.svg') }}">
            </article>

            <article>
                <h3>
                    Latest Content
                </h3>
            </article>
        </div>

        <article>
            <h3>
                Upcoming Events
            </h3>
            <p>
                Google Calendar
            </p>
            <img src="{{ asset('images\icons\calendar-solid-full.svg') }}">
        </article>
    </section>

    <section>
        <div>
            <h3>
                Recent Activity
            </h3>

            <img src="{{ asset('images\icons\ellipsis-solid-full.svg') }}">
        </div>
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