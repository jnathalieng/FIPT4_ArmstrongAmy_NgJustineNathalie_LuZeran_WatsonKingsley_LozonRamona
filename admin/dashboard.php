<?php
spl_autoload_register(function ($class) {
    $class = str_replace('LAM\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);
    
    require_once $filepath;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Aviation Museum Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link type="text/css" href="../css/main.css" rel="stylesheet">
    <link type="text/css" href="../css/grid.css" rel="stylesheet">
    <script type="module" defer src="../js/main.js"></script>
</head>
<body 
data-page="dashboard"
style="
background-color: rgb(48, 48, 48);
height: 100vh;">

    <header class="header">
    <!-- navbar -->
        <nav>
                <div id="logo"><a href="index.html" class="hover-item"></a></div>
                
                <div class="m-l-nav-item">
                <!-- <div></div> -->
                    <a class="button-text" href="">Events Manager</a>
                </div>
                <div class="button-text m-l-nav-item">
                    <!-- <div></div> -->
                    <a class="button-text" href="">Blog<br>Manager</a>
                </div>
                <div class="m-l-nav-item">
                    <!-- <div></div> -->
                    <a class="button-text" href="">Commemoration<br>Manager</a>
                </div>
                <div class="m-l-nav-item">
                    <!-- <div></div> -->
                    <a class="button-text" href="">Gallery<br>Manager</a>
                </div>
                <div class="m-l-nav-item">
                    <!-- <div></div> -->
                    <a class="button-text" href="">Social Media<br>Manager</a>
                </div>
                <div class="m-l-nav-item">
                    <!-- <div></div> -->
                    <a class="button-text" href="">Logout</a>
                </div>

            <!-- mobile hamburger menu -->
                    <div class="hamburger hover-item">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <ul class="hamburger-dropdown">
                        <li><a class="button-text hover-item" href="index.html">Events</a></li>
                        <li><a class="button-text hover-item" href="about.html">Blog</a></li>             
                        <li><a class="button-text hover-item" href="timeline.html">Commemmoration</a></li>
                        <li><a class="button-text hover-item" href="wartime_experience.html">Gallery</a></li>
                        <li><a class="button-text hover-item" href="training_bases.html">Social Media</a></li>
                        <li><a class="button-text hover-item" href="canteen.html">Logout</a></li>
                    </ul>

        </nav>
    </header>

    <main>

    <section>
        <div>
            <h3>Dashboard</h3>
        </div>
        <div>
            <h3>Welcome Back, Admin</h3>
        </div>
        <div>
            <p>Manage Events, Blog Posts, and other Museum Contents.
        </div>
    </section>

    <section class="tally-bar-con">
        <article class="tally-bar">
            <div></div>
            <div class="tall-bar-card">
                <h3 class="tally-bar-title">Total Events</h3>
                <p class="tally-bar-number">12</p>               
            <div class="tall-bar-card">
            <hr class="dash-vert">
            <div>
                <h3 class="tally-bar-title">Blog Posts</h3>
                <p class="tally-bar-number">28</p>               
            <div class="tall-bar-card">        
            <hr class="dash-vert">
            <div class="tall-bar-card">
                <h3 class="tally-bar-title">commemmoration</h3>
                <p class="tally-bar-number">9</p>               
            </div>
            <hr class="dash-vert">
            <div class="tall-bar-card">
                <h3 class="tally-bar-title">Social Posts</h3>
                <p class="tally-bar-number">34</p>               
            </div>    
        </article>
    </section>

    <section>
        <article>

        </article>
    </section>
        

    </main>

</body>
</html>