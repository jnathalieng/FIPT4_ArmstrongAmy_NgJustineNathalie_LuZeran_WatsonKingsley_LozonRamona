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
        <p class="g-header-text">Dashboard / Commemoration Manager / <span class="page-path">Create a new Commemoration</span></p>
    </div>
        <div class="col-span-full">
            <p class="r-header-text">Create New Commemoration Entry</p>
        </div>

    <section class="add-form col-span-full">

        <article class="add-form-con" id="blog-form">


  <form @submit.prevent="regForm" class="add-input-form" id="blogForm">

    <div class="title-con">
        <span class="r-header-text">Post Details</span>
    </div>    

        <label for="name" class="r-body-text">Name</label>
        <!-- <p class="field-error" v-if="errors.title">@{{errors.title}}</p> -->
        <input  v-model="formData.name" 
                class="add-form-box title-input"
                id="name-input"
                type="text" 
                name="name" 
                placeholder="Name">


                    <!-- Featured Image with Drag & Drop -->
                    <div class="drag-and-drop-con">
                        <label for="image" class="r-header-text">Image</label>
                        <!-- <p class="field-error" v-if="errors.picture">{{ errors.picture }}</p> -->
                        
                        <div 
                            class="drag-and-drop-images"
                            @dragover.prevent="isDragging = true"
                            @dragleave.prevent="isDragging = false"
                            @drop.prevent="handleImageDrop"
                            :class="{ 'dragging': isDragging }">
                            <input 
                                ref="fileInput"
                                type="file" 
                                accept="image/*"
                                @change="handleImageSelect"
                                style="display: none;">
                            
                            <div v-if="!imagePreview" class="drop-zone-content">
                                <p>Drag and drop image here or <a href="#" @click.prevent="$refs.fileInput.click()">click to browse</a></p>
                            </div>

                            <div v-else class="image-preview">
                                <img :src="imagePreview" :alt="formData.name">
                                <button type="button" @click="removeImage" class="remove-image-btn">Remove</button>
                            </div>
                        </div>

                        <input 
                            v-if="picturePreview"
                            v-model="formData.picture_alt"
                            type="text"
                            placeholder="Image alt text (for accessibility)"
                            class="add-form-box"
                            style="margin-top: 10px;">
                    </div>


    <section class="add-form-inputs">
    <article class="twin-inputs left-box">

        <label for="service_number" class="r-body-text">Service Number</label>
        <!-- <p class="field-error" v-if="errors.service_number">@{{errors.title}}</p> -->
        <input  v-model="formData.service_number" 
                class="add-form-box title-input"
                id="service-number-input"
                type="text" 
                name="service-number" 
                placeholder="Service Number">


        <label for="rank" class="r-body-text">Rank</label>
        <!-- <p class="field-error" v-if="errors.rank">@{{errors.rank}}</p> -->
        <input  v-model="formData.rank" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="rank" 
                placeholder="Rank">

        <label for="corps" class="r-body-text">corps</label>
        <!-- <p class="field-error" v-if="errors.corps">@{{errors.corps}}</p> -->
        <input  v-model="formData.corps" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="corps" 
                placeholder="corps">

        <label for="unit" class="r-body-text">unit</label>
        <!-- <p class="field-error" v-if="errors.unit">@{{errors.unit}}</p> -->
        <input  v-model="formData.unit" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="unit" 
                placeholder="unit">
</article>
<article class="twin-inputs right-box">
        <label for="age" class="r-body-text">age</label>
        <!-- <p class="field-error" v-if="errors.age">@{{errors.age}}</p> -->
        <input  v-model="formData.age" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="age" 
                placeholder="age">


        <label for="birth" class="r-body-text">birth</label>
        <!-- <p class="field-error" v-if="errors.birth">@{{errors.birth}}</p> -->
        <input  v-model="formData.birth" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="birth" 
                placeholder="birth">
                
        <label for="death" class="r-body-text">death</label>
        <!-- <p class="field-error" v-if="errors.death">@{{errors.death}}</p> -->
        <input  v-model="formData.death" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="death" 
                placeholder="death">

        <label for="enlist" class="r-body-text">enlist</label>
        <!-- <p class="field-error" v-if="errors.enlist">@{{errors.enlist}}</p> -->
        <input  v-model="formData.enlist" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="enlist" 
                placeholder="enlist">
</article>
</section>
        <label for="info" class="r-body-text">info</label>
        <!-- <p class="field-error" v-if="errors.info">@{{errors.info}}</p> -->
        <input  v-model="formData.info" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="info" 
                placeholder="info">

        <label for="grave" class="r-body-text">grave</label>
        <!-- <p class="field-error" v-if="errors.grave">@{{errors.grave}}</p> -->
        <input  v-model="formData.grave" 
                class="add-form-box title-input"
                id="rank-input"
                type="text" 
                name="grave" 
                placeholder="grave">
            </article>

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