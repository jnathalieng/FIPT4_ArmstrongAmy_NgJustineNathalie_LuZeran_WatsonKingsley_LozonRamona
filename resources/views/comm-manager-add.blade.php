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
                    <a class="nav-anchor" href="{{ route('logout') }}">Logout</a>
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
                    <a class="mobile-nav-item" href="{{ route('dashboard') }}">Dashboard</a>
                </li> 
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('events-manager') }}">Events</a>
                </li>             
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('blog-manager') }}">Blog</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('comm-manager') }}">Commemoration</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('gallery-manager') }}">Gallery</a>
                </li>
                <li class="mobile-nav-li">
                    <a class="mobile-nav-item" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

<main style="min-height: 100vh;">

<section class="cms-page-top dashboard-page-con grid-con">
    <div class="col-span-full">
        <p class="g-header-text">Dashboard / Blog Manager / <span class="page-path">Create New Blog Post</span></p>
    </div>
        <div class="col-span-full">
            <p class="r-header-text">Create New Blog Post</p>
        </div>

    <section class="add-form col-span-full">

        <article class="add-form-con" id="blog-form">
  <form @submit.prevent="regForm" class="add-input-form" id="blogForm">

    <div class="title-con">
        <span class="r-header-text">Post Details</span>
    </div>    
        <!-- <p class="field-error" v-if="errors.title">@{{errors.title}}</p> -->
        <input  v-model="formData.title" 
                class="add-form-box title-input"
                id="title-input"
                type="text" 
                name="Post-Title" 
                placeholder="Post Title">

        <section class="add-form-inputs">

            <article class="twin-inputs">

            <!-- category drop down -->
             <div class="drop-down-box">
                <span class="r-header-text">Category</span>
                <!-- <p class="field-error" v-if="errors.category">@{{errors.category}}</p> -->
                <div class="drop-down-menu">
                    <!-- i want to make a drop down menu here that pulls info from the database for what category options are available -->
                </div>
            </div>
            <!-- draft/published indicator -->
             <div class="indicators">

                <span class="r-header-text">Category</span>

                <div class="indicator-box">
                    <div class="indicator-con">    
                        <div class="checkbox-dot" id="draft-dot"></div>
                        <p class="body-text">Draft</p>
                    </div>

                        <!-- one of these dots will have a red background when active -->
                    <div class="indicator-con">
                        <div class="checkbox-dot" id="published-dot"></div>
                        <p class="body-text">Published</p>
                    </div>
                </div>
            </div>

            </article>

            <article class="twin-inputs">

            <!-- location input -->
             <div class="location-box">
                <label for="location" class="r-header-text">Location</label>
                <!-- <p class="field-error" v-if="errors.location">@{{errors.location}}</p> -->
                <input  v-model="formData.location" 
                        class="add-form-box"
                        id="location-input"
                        type="text" 
                        name="location" 
                        placeholder="Location">
            </div>
            <!-- date input -->
             <div class="date-box">
                <label for="date" class="r-header-text">Date</label>
                <!-- <p class="field-error" v-if="errors.date">@{{errors.date}}</p> -->
                <input  v-model="formData.date" 
                            class="add-form-box"
                            id="date"
                            type="text"
                            name="date">
            </article>
        </section>

        <!-- content input -->
            <label for="content" class="r-header-text content-title">Content</label>
            <!-- <p class="field-error" v-if="errors.content">@{{errors.content}}</p> -->
            <input  v-model="formData.content" 
                        class="add-content-box"
                        id="content"
                        type="text"
                        name="Content">
            </div>
                  
        <!-- drag and drop box for images -->
        <div class="drag-and-drop-images">
            <!-- here will be an area where user's creating the blog posts can drag and drop images onto the page that they want included in the blog post -->
        </div>
      </div>

      <div class="button-con">
            <button class="add-button cancel-button" type="submit">Cancel</button>
            <button class="add-button save-button" type="submit">Save as Draft</button>
            <button class="add-button publish-button" type="submit">Publish Post</button>
        </div>
        <!-- <p class="field-error" v-if="errors.general">@{{errors.general}}</p> -->
        <!-- <div v-if="responseMessage"> -->
          <!-- @{{responseMessage}} -->
        <!-- </div> -->
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