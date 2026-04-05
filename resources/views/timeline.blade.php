<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Reconstruction</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/ScrollToPlugin.min.js"></script>
</head>

<body data-page="timeline">

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

        <h1 class="hidden">Historic Timeline Page</h1>

        <!-- HERO -->
        <section class="hero-section" id="timeline-hero">
            
            <h2 class="hidden">Timeline hero section</h2>

            <div class="hero-title-con">
                <div class="hero-title">
                    <h3>
                        Remembrance
                    </h3>
                </div>
                <div class="hero-subtitle">
                    <p>
                        Legacy of the Fallen
                    </p>
                </div>
            </div>

            <video class="hero-card-video hero-section-video" muted loop playsinline preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                <source data-desktop="/videos/hero-videos/hero-gas-1920x1080.mp4" type="video/mp4">
                
                <source data-mobile="/videos/hero-videos/hero-gas-768x768.mp4" type="video/mp4">

                <p>Your browser does not support</p>
            </video>

        </section>

        <!-- TIMELINE -->
        <section id="timeline-section">
            <!-- TIMELINE PROGRESS -->
            <div id="tl-scroll-prog-con">
                <div id="tl-scroll-prog-fill">
                    
                </div>

                <div id="tl-scroll-prog-mask">

                </div>

                <div id="tl-scroll-markers-con">
                    <a href="#tl-1909-section" class="tl-marker" data-progress="0.20">1909</a>
                    <a href="#tl-1918-section" class="tl-marker" data-progress="0.34">1918</a>
                    <a href="#tl-1927-section" class="tl-marker" data-progress="0.48">1927</a>
                    <a href="#tl-1928-section" class="tl-marker" data-progress="0.62">1928</a>
                    <a href="#tl-1930-section" class="tl-marker" data-progress="0.76">1930</a>
                    <a href="#tl-1940-section" class="tl-marker" data-progress="0.90">1940</a>
                </div>
            </div>

            <!-- INTRO -->
            <div id="timeline-intro-con">
                <h2>
                    LONDON AVIATION
                </h2>
                <p>
                    Scroll to explore key moments in London's aviation history.
                </p>
            </div>

                <!-- TL CONTENT SECTION 1909 -->
                <article class="tl-time-period" id="tl-1909-section">
                    
                    <h2 class="hidden">1909 time seriod article</h2>

                    <!-- TLS STICKY BG -->
                    <div class="tls-sticky-bg">
                        1909
                    </div>

                    <!-- TLS CONTENT CON -->
                    <div class="tls-content-con">

                        <div class="text-grid-overlay">
                            <!-- TEXT CONTAINERS -->
                            <div class="parallax-con-text tbox-a1">
                                <p>
                                    Throughout the history of manned flight, civilian and military flying have advanced together, each one pushing the other to greater heights.
                                </p>
                            </div>

                            <div class="parallax-con-text tbox-a2">
                                <p>
                                    Successful flight in North America began with the Wright Brothers, two bicycle makers from Ohio, who made their first manned, powered flight in 1903. They were soon joined by Glenn Curtiss, a motorcycle builder and racer from Hammondsport, New York, who, in 1907, was invited to join the Aerial Experiment Association (AEA), a company started by Alexander Graham Bell and J.A.D. McCurdy to design and build aircraft.
                                </p>
                            </div>

                            <div class="parallax-con-text tbox-a3">
                                <p>
                                    Curtiss provided engines for the Association's aircraft including the Silver Dart, which flew for the first time in Canada at Baddeck, Nova Scotia, on February 23, 1909. McCurdy, who flew it that day, became the first man to fly in the British Empire. The Silver Dart, designed by McCurdy, a Canadian, was built at Hammondsport, and shipped to Baddeck. The AEA was disbanded in 1909 by mutual agreement.
                                </p>
                            </div>

                            <div class="parallax-con-text tbox-a4">
                                <p>
                                    Many Londoners saw their first aircraft on May 25, 1912 - a Curtiss Model E - flown by Beckwith Havens who had taken off from Carling Heights, near Wolseley Barracks (now the Royal Canadian Regiment Museum) on a 20-minute flight over the city. Two months later, thousands watched a Wright-Burgess hydroplane perform for several days over Port Stanley, flown by Walter Brookins.
                                </p>
                            </div>

                            <div class="parallax-con-text tbox-a5">
                                <p>
                                    Both were "pusher" style aircraft with propellers mounted at the back pushing it through the air. The Wright models used two, chain-driven, propellers while on the Curtiss aircraft, the propeller was connected directly to the engine.
                                </p>
                            </div>
                        </div>
                        
                        <div class="image-grid-overlay">
                            <!-- IMAGE CONTAINERS -->
                            <div class="parallax-con-img ibox-a1">

                                <div class="tl-ibox-img-con">
                                    <picture class="tl-ibox-pic-con">
                                        <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1912-may-25.png">
                                        <!-- NEEDS MOBILE IMAGES -->
                                        <img class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1912-may-25.png" alt="picture of Curtiss Model E training plane">
                                    </picture>

                                    <p class="tl-ibox-p">
                                        Many Londoners see their first aircraft - a Curtiss Model E - flown by Beckwith Havens who took off from Carling Heights, near Wolseley Barracks (now the Royal Canadian Regiment Museum) for a 20-minute flight over the city.
                                    </p>

                                    <div class="tl-ibox-bg">
                                    </div>
                                </div>

                                <div class="tl-ibox-text-con">
                                    <h3>1912</h3>
                                    <h4>MAY 25</h4>
                                </div>
                            </div>

                            <div class="parallax-con-img ibox-a2">

                                <div class="tl-ibox-img-con">
                                    <picture class="tl-ibox-pic-con">
                                        <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1912-july-20.png">
                                        <!-- NEEDS MOBILE IMAGES -->
                                        <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1912-july-20.png" alt="picture of Curtiss Model E training plane">
                                    </picture>

                                    <p class="tl-ibox-p">
                                        Thousands watch Walter Brookins take off in a Wright-Burgess hydroplane at Port Stanley with his passenger Miss Dora Labatt, daughter of the London brewer. It was the first flight in Canada by a seaplane.
                                    </p>

                                    <div class="tl-ibox-bg">
                                    </div>
                                </div>

                                <div class="tl-ibox-text-con">
                                    <h4>JULY 20</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <div class="tl-content-break">
                    CONTENT BREAK 1909
                </div>
                    <!-- TL CONTENT SECTION 1918 -->
                    <article class="tl-time-period" id="tl-1918-section">

                        <h2 class="hidden">1918 time period section</h2>
                        
                        <!-- TLS STICKY -->
                        <div class="tls-sticky-bg">
                            1918
                        </div>

                        <!-- TLS CONTENT CON -->
                        <div class="tls-content-con">
                            
                            <div class="text-grid-overlay">
                                <!-- TEXT CONTAINERS -->
                                <div class="parallax-con-text tbox-b1">
                                    <p>
                                        Unsuccessful at Petawawa, McCurdy took over a flying school in Toronto that had been opened by Glenn Curtiss. He also ran a Curtiss factory in Toronto that produced the Jenny. The JN-4, known as the "Jenny", became the standard training aircraft at the flying schools which the Royal Flying Corps (RFC) opened in Canada towards the end of the war. Many of the estimated 13,000 Canadians who served in the RFC or in the Royal Navy Air Service were trained on them.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b2">
                                    <p>
                                        A non-permanent (militia-style) Canadian Air Force (CAF) was created in 1920 to which a series of civilian duties were assigned in order to keep planes in the air and pilots in practice, including fire watches, coastal patrols, and mapping districts from the air
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b3">
                                    <p>
                                        The Department of National Defence was created in 1923 which took control of all flying in Canada. Then, in 1924, the Chief of the General Staff, Major-General J. H. MacBrien, created a separate air force which would have a unique military mission separate from the army and the navy. It would be a force modeled on the Royal Air Force (RAF), created in 1918 by merging the RFC with the Royal Navy Air Service. The new RCAF even adopted its motto per ardua ad astra (through adversity to the stars), thought it now uses the original CAF motto Sic Itur Ad Astra.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b4">
                                    <p>
                                        Many Londoners saw their first aircraft on May 25, 1912 - a Curtiss Model E - flown by Beckwith Havens who had taken off from Carling Heights, near Wolseley Barracks (now the Royal Canadian Regiment Museum) on a 20-minute flight over the city. Two months later, thousands watched a Wright-Burgess hydroplane perform for several days over Port Stanley, flown by Walter Brookins.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b5">
                                    <p>
                                        While the pioneers of flight soon began promoting the use of their inventions as potential weapons, it was the First World War that greatly accelerated the evolution of manned flight in that direction.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b6">
                                    <p>
                                        McCurdy brought the Silver Dart to Petawawa, just months after his successful flight at Baddeck, to demonstrate it for the Canadian militia.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b7">
                                    <p>
                                        The Wrights were demonstrating their Military Flyer to the US Army Signal Corps in 1908, and Curtiss sold his first military aircraft in 1911.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b8">
                                    <p>
                                        No other instances of aircraft appearing over London were recorded until 1918 when Capt. V. P. Cronyn flew what was likely a Curtiss JN-4 from a Royal Flying Corps training school in Beamsville to London, landing on the parade square at Wolseley Barracks on Carling Heights.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b9">
                                    <p>
                                        By the time Capt. Cronyn had been posted to Beamsville in 1918, he had already served on the Western Front where he had shot down at least 7 enemy aircraft making him one of the war's 171 Canadian "aces". (Fliers with five or more kills). Cronyn and his brother Richard were among the many World War One flyers who saw that flying would continue to evolve in Canada after the war ended.
                                    </p>
                                </div>

                                <div class="parallax-con-text tbox-b10">
                                    <p>
                                        Sic Itur Ad Astra | "such is the way to the stars"
                                    </p>
                                </div>
                            </div>

                            <div class="image-grid-overlay">

                                <div class="parallax-con-img ibox-b1">

                                    <div class="tl-ibox-img-con">
                                        <picture class="tl-ibox-pic-con">
                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1918-july-2.png">
                                            <!-- NEEDS MOBILE IMAGES -->
                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1918-july-2.png" alt="picture of Curtiss Model E training plane">
                                        </picture>

                                        <p class="tl-ibox-p">
                                            Capt. V. P. Cronyn becomes the first Londoner to land an aircraft in London when he flies a Curtiss Jenny from the Royal Flying Corps training school near Niagara to London, landing on the parade square at Wolseley Barracks on Carling Heights.
                                        </p>

                                        <div class="tl-ibox-bg">
                                        </div>
                                    </div>

                                    <div class="tl-ibox-text-con">
                                        
                                    </div>
                                </div>

                                <div class="parallax-con-img ibox-b2">

                                    <div class="tl-ibox-img-con">
                                        <picture class="tl-ibox-pic-con">
                                            <source media="(min-width: 768px)" srcset="images/timeline-images/timeline-placeholder.png">
                                            <!-- NEEDS BOTH IMAGES -->
                                            <img  class="tl-ibox-img" src="images/timeline-images/timeline-placeholder.png" alt="picture of Curtiss Model E training plane">
                                        </picture>

                                        <p class="tl-ibox-p">
                                            London photographer Arthur A. Gleason, aboard a Curtiss Jenny, takes the first aerial photographs of London.
                                        </p>

                                        <div class="tl-ibox-bg">
                                        </div>
                                    </div>

                                    <div class="tl-ibox-text-con">
                                        <h3>1919</h3>
                                        <h4>JUNE 15</h4>
                                    </div>
                                </div>
                                
                                <div class="parallax-con-img ibox-b3">

                                    <div class="tl-ibox-img-con">
                                        <picture class="tl-ibox-pic-con">
                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1926-october-26.png">
                                            <!-- NEEDS BOTH IMAGES -->
                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1926-october-26.png" alt="picture of Curtiss Model E training plane">
                                        </picture>

                                        <p class="tl-ibox-p">
                                            Members of London's Chamber of Commerce attend an aviation meeting in Pittsburgh and soon after begin promoting the idea of an airport for London. A field near Lambeth is selected and a company is set up to build the airport.
                                        </p>

                                        <div class="tl-ibox-bg">
                                        </div>
                                    </div>

                                    <div class="tl-ibox-text-con">
                                        <h3>1926</h3>
                                        <h4>OCTOBER 26</h4>
                                    </div>
                                </div>

                                <div class="parallax-con-img ibox-b4">

                                    <div class="tl-ibox-img-con">
                                        <picture class="tl-ibox-pic-con">
                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1918-july-1.png">
                                            <!-- NEEDS MOBILE IMAGES -->
                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1918-july-1.png" alt="picture of Curtiss Model E training plane">
                                        </picture>

                                        <p class="tl-ibox-p">
                                        </p>

                                        <div class="tl-ibox-bg">
                                        </div>
                                    </div>

                                    <div class="tl-ibox-text-con">
                                        <h4>JULY</h4>
                                    </div>
                                </div>

                                
                                                                
                            </div>
                            
                        </div>
                    </article>

                    <div class="tl-content-break">
                        CONTENT BREAK 1918
                    </div>
                        <!-- TL CONTENT SECTION 1927 -->
                        <article class="tl-time-period" id="tl-1927-section">

                            <h2 class="hidden">1927 time period section</h2>
                            
                            <!-- TLS STICKY -->
                            <div class="tls-sticky-bg">
                                1927
                            </div>

                            <!-- TLS CONTENT CON -->
                            <div class="tls-content-con">
                                
                                <div class="text-grid-overlay">
                                    <!-- TEXT CONTAINERS -->
                                    <div class="parallax-con-text tbox-c1">
                                        <p>
                                            Charles Lindbergh's flight across the Atlantic in the Spirit of St. Louis in May of 1927, ignited great public interest in aviation.
                                        </p>
                                    </div>

                                    <div class="parallax-con-text tbox-c2">
                                        <p>
                                            It was not long before a London-to-London flight was proposed by Carling Brewery, who offered a prize of $25,000 for a successful flight from London, Canada to London, England.
                                        </p>
                                    </div>

                                    <div class="parallax-con-text tbox-c3">
                                        <p>
                                            The men selected, Capt. Terrence Tully and Lieut. James Medcalf, were both veteran fliers of the Great War and had both been working as civilians, flying forest fire patrols in Ontario.
                                        </p>
                                    </div>

                                    <div class="parallax-con-text tbox-c4">
                                        <p>
                                            Thousands watched as they flew out of London in their Stinson Detroiter on September 1, 1927. After several stops and a final refuelling in Harbour Grace, Newfoundland, they took off for England but were never heard from again. The $25,000 was placed in a trust for the grieving families.
                                        </p>
                                    </div>

                                </div>

                                <div class="image-grid-overlay">
                                    <div class="parallax-con-img ibox-c1">
                                        <div class="tl-ibox-img-con">
                                            <picture class="tl-ibox-pic-con">
                                                <source media="(min-width: 768px)" srcset="images/timeline-images/mobile/m-timeline-hero.png">
                                                <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                <img  class="tl-ibox-img" src="images/timeline-images/mobile/m-timeline-hero.png" alt="picture of Curtiss Model E training plane">
                                            </picture>

                                            <p class="tl-ibox-p">
                                                Charles Lindbergh lands his plane, the Spirit of St. Louis, at Le Bourget Field in Paris, completing the first solo, nonstop transatlantic flight from New York in 33.5 hours. His flight inspires other long-distance endeavours including a London-to-London flight a few months later.
                                            </p>

                                            <div class="tl-ibox-bg">
                                            </div>
                                        </div>

                                        <div class="tl-ibox-text-con">
                                            <h4>MAY 21</h4>
                                        </div>
                                    </div>

                                    <div class="parallax-con-img ibox-c2">
                                        <div class="tl-ibox-img-con">
                                            <picture class="tl-ibox-pic-con">
                                                <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1927-september.png">
                                                <!-- NEEDS BOTH IMAGES -->
                                                <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1927-september.png" alt="picture of Curtiss Model E training plane">
                                            </picture>

                                            <p class="tl-ibox-p">
                                                Thousands watch as Capt. Terrence Tully and Lieut. James Medcalf lift off from a field near Clarke Road in a Stinson Detroiter in a bid to fly from London, Canada to London, England. Inspired by Lindbergh, the London-to-London flight was proposed by Carling Brewery, who offered a prize of $25,000. After several stops and a final refuelling in Harbour Grace, Newfoundland, they took off for England but were never heard from again. The $25,000 was placed in a trust for the grieving families.
                                            </p>

                                            <div class="tl-ibox-bg">
                                            </div>
                                        </div>

                                        <div class="tl-ibox-text-con">
                                            <h4>SEPTEMBER 01</h4>
                                        </div>
                                    </div>

                                    <div class="parallax-con-img ibox-c3">
                                        <div class="tl-ibox-img-con">
                                            <picture class="tl-ibox-pic-con">
                                                <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-november-25.png">
                                                <!-- NEEDS BOTH IMAGES -->
                                                <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-november-25.png" alt="picture of Curtiss Model E training plane">
                                            </picture>

                                            <p class="tl-ibox-p">
                                                John A. Wilson, Controller of Civil Aviation for Canada, visits London to support the proposed airport.
                                            </p>

                                            <div class="tl-ibox-bg">
                                            </div>
                                        </div>

                                        <div class="tl-ibox-text-con">
                                            <h4>SEPTEMBER 01</h4>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </article>

                        <div class="tl-content-break">
                            CONTENT BREAK 1927
                        </div>
                            <!-- TL CONTENT SECTION 1928 -->
                            <article class="tl-time-period" id="tl-1928-section">

                                <h2 class="hidden">1928 time period section</h2>
                                
                                <!-- TLS STICKY -->
                                <div class="tls-sticky-bg">
                                    1928
                                </div>

                                <!-- TLS CONTENT CON -->
                                <div class="tls-content-con">
                                    
                                    <div class="text-grid-overlay">
                                        <!-- TEXT CONTAINERS -->
                                        <div class="parallax-con-text tbox-d1">
                                            <p>
                                                The road to a permanent airport in London lay through Pittsburgh. In 1926, London was one of a number of Chambers of Commerce that sent delegates to a special meeting there on the future of aviation.
                                            </p>
                                        </div>

                                        <div class="parallax-con-text tbox-d2">
                                            <p>
                                                When they returned, the London Chamber immediately set up a committee chaired by Ernest Moore, an investment broker. The committee started looking for possible locations in the London area, finally selecting a farm just off Wharncliffe Road, then Highway 4, on the way to Lambeth.
                                            </p>
                                        </div>

                                        <div class="parallax-con-text tbox-d3">
                                            <p>
                                                The city's assistance was solicited, and Council put a By-law on the December, 1927 ballot asking the voters to approve the purchase of the site at a cost of $20,000.
                                            </p>
                                        </div>

                                        <div class="parallax-con-text tbox-d4">
                                            <p>
                                                Both J. A. Wilson, the Controller of Civil Aviation, and General MacBrien came to London in November of 1927 to bolster support for the By-law. Wilson spoke to the founding meeting of the London Flying Club where he offered the club two De Havilland Moths for their use.
                                            </p>
                                        </div>

                                        <div class="parallax-con-text tbox-d5">
                                            <p>
                                                The club, which was incorporated the following March, would be the airport's main tenant. Established by a group of fliers, many of whom were war veterans, it would offer flying lessons to interested parties, men and women. Richard Cronyn was its founding president.
                                            </p>
                                        </div>

                                        <div class="parallax-con-text tbox-d6">
                                            <p>
                                                Days later, General McBrien addressed the Rotary Club. Both talks were well covered by the press, but they failed to convince a majority of the electorate, and the By-law was defeated.
                                            </p>
                                        </div>

                                        <div class="parallax-con-text tbox-d7">
                                            <p>
                                                Undaunted, Moore set up the London Airfield Company which raised the funds needed to buy the farm and build the airfield. London's first airport officially opened on August 24, 1928. J. A. Wilson was on hand to formally present the two Moth aircraft to the flying club and General MacBrien also attended. Now retired, he was representing International Airways Limited.
                                            </p>
                                        </div>

                                    </div>

                                    <div class="image-grid-overlay">
                                        <div class="parallax-con-img ibox-d1">
                                            <div class="tl-ibox-img-con">
                                                <picture class="tl-ibox-pic-con">
                                                    <source media="(min-width: 768px)" srcset="images/timeline-images/mobile/m-timeline-hero.png">
                                                    <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                    <img  class="tl-ibox-img" src="images/timeline-images/mobile/m-timeline-hero.png" alt="picture of Curtiss Model E training plane">
                                                </picture>

                                                <p class="tl-ibox-p">
                                                    Letters Patent received by London Airport Company. Proceed to purchase a 140-acre farm near Lambeth.
                                                </p>

                                                <div class="tl-ibox-bg">
                                                </div>
                                            </div>

                                            <div class="tl-ibox-text-con">
                                                <h4>JANUARY 28</h4>
                                            </div>
                                        </div>

                                        <div class="parallax-con-img ibox-d2">
                                            <div class="tl-ibox-img-con">
                                                <picture class="tl-ibox-pic-con">
                                                    <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1929-july-15.png">
                                                    <!-- NEEDS BOTH IMAGES -->
                                                    <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1929-july-15.png" alt="picture of Curtiss Model E training plane">
                                                </picture>

                                                <p class="tl-ibox-p">
                                                    London Flying Club is incorporated.
                                                </p>

                                                <div class="tl-ibox-bg">
                                                </div>
                                            </div>

                                            <div class="tl-ibox-text-con">
                                                <h4>MARCH</h4>
                                            </div>
                                        </div>

                                        <div class="parallax-con-img ibox-d3">
                                            <div class="tl-ibox-img-con">
                                                <picture class="tl-ibox-pic-con">
                                                    <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1928-july-11.png">
                                                    <!-- NEEDS BOTH IMAGES -->
                                                    <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1928-july-11.png" alt="picture of Curtiss Model E training plane">
                                                </picture>

                                                <p class="tl-ibox-p">
                                                    The first of two De Havilland Moths are brought to London from the factory in Toronto by the London Flying Club. Hundreds of students would learn to fly in these aircraft.
                                                </p>

                                                <div class="tl-ibox-bg">
                                                </div>
                                            </div>

                                            <div class="tl-ibox-text-con">
                                                <h4>JULY 11</h4>
                                            </div>
                                        </div>

                                        <div class="parallax-con-img ibox-d4">
                                            <div class="tl-ibox-img-con">
                                                <picture class="tl-ibox-pic-con">
                                                    <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1928-august-24.png">
                                                    <!-- NEEDS BOTH IMAGES -->
                                                    <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1928-august-24.png" alt="picture of Curtiss Model E training plane">
                                                </picture>

                                                <p class="tl-ibox-p">
                                                    London's first airport officially opens. One of the events was arrival of an airmail flight sponsored by the CNE. Here, Capt. Earl Hand (centre) accepts a letter from the Hon. P. J. Veniot, Postmaster General of Canada in front of a Buhl Airsedan, observed by J. A. Wilson (left), Controller of Civil Aviation.
                                                </p>

                                                <div class="tl-ibox-bg">
                                                </div>
                                            </div>

                                            <div class="tl-ibox-text-con">
                                                <h4>AUGUST 24</h4>
                                            </div>
                                        </div>

                                        <div class="parallax-con-img ibox-d5">
                                            <div class="tl-ibox-img-con">
                                                <picture class="tl-ibox-pic-con">
                                                    <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1929-july-15.png">
                                                    <!-- NEEDS BOTH IMAGES -->
                                                    <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1929-july-15.png" alt="picture of Curtiss Model E training plane">
                                                </picture>

                                                <p class="tl-ibox-p">
                                                    The first regular airmail flight leaves London.
                                                </p>

                                                <div class="tl-ibox-bg">
                                                </div>
                                            </div>

                                            <div class="tl-ibox-text-con">
                                                <h3>1929</h3>
                                                <h4>JULY 15</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </article>

                            <div class="tl-content-break">
                                CONTENT BREAK 1928
                            </div>
                                <!-- TL CONTENT SECTION 1930 -->
                                <article class="tl-time-period" id="tl-1930-section">

                                    <h2 class="hidden">1930 time period section</h2>
                                    
                                    <!-- TLS STICKY -->
                                    <div class="tls-sticky-bg">
                                        1930
                                    </div>

                                    <!-- TLS CONTENT CON -->
                                    <div class="tls-content-con">
                                        
                                        <div class="text-grid-overlay">
                                            <!-- TEXT CONTAINERS -->
                                            <div class="parallax-con-text tbox-e1">
                                                <p>
                                                    The airfield at Lambeth remained in use even after a new London Airport opened at its present location in 1940. It closed for good in 1942, when a “listening station” was established beside the air strip to intercept communications between German submarines in the Gulf of St. Lawrence. In 1949, after it sold the land, the London Airfield Company was dissolved and its shareholders paid.
                                                </p>
                                            </div>

                                        </div>

                                        <div class="image-grid-overlay">
                                            <div class="parallax-con-img ibox-e1">
                                                <div class="tl-ibox-img-con">
                                                    <picture class="tl-ibox-pic-con">
                                                        <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1931-september.png">
                                                        <!-- NEEDS BOTH IMAGES -->
                                                        <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1931-september.png" alt="picture of Curtiss Model E training plane">
                                                    </picture>

                                                    <p class="tl-ibox-p">
                                                        Thousands attend the final stop of the Trans-Canada Air Pageant at the London airport. Highlights include formation flying by the RCAF Siskin fighters, an autogyro and a flying demonstration by Florence E. Spencer, Southwestern Ontario's only commercial woman pilot.
                                                    </p>

                                                    <div class="tl-ibox-bg">
                                                    </div>
                                                </div>

                                                <div class="tl-ibox-text-con">
                                                    <h3>1931</h3>
                                                    <h4>SEPTEMBER 12</h4>
                                                </div>
                                            </div>

                                            <div class="parallax-con-img ibox-e2">
                                                <div class="tl-ibox-img-con">
                                                    <picture class="tl-ibox-pic-con">
                                                        <source media="(min-width: 768px)" srcset="images/timeline-images/mobile/m-timeline-hero.png">
                                                        <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                        <img  class="tl-ibox-img" src="images/timeline-images/mobile/m-timeline-hero.png" alt="picture of Curtiss Model E training plane">
                                                    </picture>

                                                    <p class="tl-ibox-p">
                                                        A large crowd visits the airport to watch five RAF Hawker Fury fighters put on a flying demonstration.
                                                    </p>

                                                    <div class="tl-ibox-bg">
                                                    </div>
                                                </div>

                                                <div class="tl-ibox-text-con">
                                                    <h3>1934</h3>
                                                    <h4>JULY 06</h4>
                                                </div>
                                            </div>

                                            <div class="parallax-con-img ibox-e3">
                                                <div class="tl-ibox-img-con">
                                                    <picture class="tl-ibox-pic-con">
                                                        <source media="(min-width: 768px)" srcset="images/timeline-images/mobile/m-timeline-hero.png">
                                                        <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                        <img  class="tl-ibox-img" src="images/timeline-images/mobile/m-timeline-hero.png" alt="picture of Curtiss Model E training plane">
                                                    </picture>

                                                    <p class="tl-ibox-p">
                                                        Council votes to accept Federal support for a new airport.
                                                    </p>

                                                    <div class="tl-ibox-bg">
                                                    </div>
                                                </div>

                                                <div class="tl-ibox-text-con">
                                                    <h3>1939</h3>
                                                    <h4>JULY 24</h4>
                                                </div>
                                            </div>

                                            <div class="parallax-con-img ibox-e4">
                                                <div class="tl-ibox-img-con">
                                                    <picture class="tl-ibox-pic-con">
                                                        <source media="(min-width: 768px)" srcset="images/timeline-images/mobile/m-timeline-hero.png">
                                                        <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                        <img  class="tl-ibox-img" src="images/timeline-images/mobile/m-timeline-hero.png" alt="picture of Curtiss Model E training plane">
                                                    </picture>

                                                    <p class="tl-ibox-p">
                                                        Work commences on the construction of a new airport on the Crumlin sideroad. The Lambeth airport will continue in use until 1942. The Crumlin site is now part of the present London International Airport. The site was soon added to a list of over 100 locations where training schools were to be built as part of the British Commonwealth Air Training Plan. The schools would train men from throughout the Commonwealth in preparation for service as either air or groundcrew wherever they were needed during the war.
                                                    </p>

                                                    <div class="tl-ibox-bg">
                                                    </div>
                                                </div>

                                                <div class="tl-ibox-text-con">
                                                    <h4>SEPTEMBER 09</h4>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </article>

                                <div class="tl-content-break">
                                    CONTENT BREAK 1930
                                </div>
                                    <!-- TL CONTENT SECTION 1930 -->
                                    <article class="tl-time-period" id="tl-1940-section">

                                        <h2 class="hidden">1930 time period section</h2>
                                        
                                        <!-- TLS STICKY -->
                                        <div class="tls-sticky-bg">
                                            1940
                                        </div>

                                        <!-- TLS CONTENT CON -->
                                        <div class="tls-content-con">
                                            
                                            <div class="text-grid-overlay">
                                                <!-- TEXT CONTAINERS -->
                                                <div class="parallax-con-text tbox-f1">
                                                    <p>
                                                        In 1929, J. A. Wilson, as head of civil aviation, began the creation of a Trans-Canada airway, selecting sites and planning airports. A Department of Transport, created in 1936 with C. D. Howe as minister, took over civil aviation. Trans-Canada Airlines (TCA) was created in 1937 to link the airports along the air route.
                                                    </p>
                                                </div>

                                                <div class="parallax-con-text tbox-f2">
                                                    <p>
                                                        In London, City Council took up the offer of assistance from the Federal Government to build a new airport large enough for the aircraft to be used by the TCA.
                                                    </p>
                                                </div>

                                                <div class="parallax-con-text tbox-f3">
                                                    <p>
                                                        A site on the Crumlin sideroad was selected for its flat terrain and easy access to the city. Work on the airport began on September 9, 1939, the day before war was declared.
                                                    </p>
                                                </div>

                                                <div class="parallax-con-text tbox-f4">
                                                    <p>
                                                        The site was soon added to a list of over 100 locations where training schools were to be built as part of the British Commonwealth Air Training Plan. The schools would train men from throughout the Commonwealth in preparation for service as either air or groundcrew wherever they were needed.
                                                    </p>
                                                </div>

                                                <div class="parallax-con-text tbox-f5">
                                                    <p>
                                                        The RCAF would rely on Canada's flying clubs to provide basic training for each prospective pilot. In London, members of the flying club operated the #3 Elementary Flying Training School which opened at Crumlin Airport on June 24, 1940.
                                                    </p>
                                                </div>

                                                <div class="parallax-con-text tbox-f6">
                                                    <p>
                                                        The new airport itself was officially opened on July 27th, 1940, by Minister Howe. TCA service began on August 1st.
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="image-grid-overlay">
                                                <div class="parallax-con-img ibox-f1">
                                                    <div class="tl-ibox-img-con">
                                                        <picture class="tl-ibox-pic-con">
                                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1940-january-19.png">
                                                            <!-- NEEDS BOTH IMAGES -->
                                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1940-january-19.png" alt="picture of Curtiss Model E training plane">
                                                        </picture>

                                                        <p class="tl-ibox-p">
                                                            George Durand, London Flying Club president, pilots the first plane to land at the new airport at Crumlin, a light Taylor Cub monoplane. He was accompanied by Howard Wright, the club's instructor. They are pictured here just after landing. From left to right: Alex Farquhar, chief engineer of airport construction; James Peever, one of the directors of the airport; Howard Wright, George Durand, and London Mayor Allan Johnson.
                                                        </p>

                                                        <div class="tl-ibox-bg">
                                                        </div>
                                                    </div>

                                                    <div class="tl-ibox-text-con">
                                                        <h4>JANUARY 19</h4>
                                                    </div>
                                                </div>

                                                <div class="parallax-con-img ibox-f2">
                                                    <div class="tl-ibox-img-con">
                                                        <picture class="tl-ibox-pic-con">
                                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1940-june-24.png">
                                                            <!-- NEEDS BOTH IMAGES -->
                                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1940-june-24.png" alt="picture of Curtiss Model E training plane">
                                                        </picture>

                                                        <p class="tl-ibox-p">
                                                            #3 Elementary Flying Training School opens. Operated by the London Flying Club, it will train 681 flyers for service in WWII over the next two years.
                                                        </p>

                                                        <div class="tl-ibox-bg">
                                                        </div>
                                                    </div>

                                                    <div class="tl-ibox-text-con">
                                                        <h4>JUNE 24</h4>
                                                    </div>
                                                </div>

                                                <div class="parallax-con-img ibox-f3">
                                                    <div class="tl-ibox-img-con">
                                                        <picture class="tl-ibox-pic-con">
                                                            <source media="(min-width: 768px)" srcset="images/timeline-images/mobile/m-timeline-hero.png">
                                                            <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                            <img  class="tl-ibox-img" src="images/timeline-images/mobile/m-timeline-hero.png" alt="picture of Curtiss Model E training plane">
                                                        </picture>

                                                        <p class="tl-ibox-p">
                                                            C. D. Howe, Minister of Munitions, Supply and Transport officially opens the Crumlin airport, then inspects the pilots training at #3 Elementary Flying Training School.
                                                        </p>

                                                        <div class="tl-ibox-bg">
                                                        </div>
                                                    </div>

                                                    <div class="tl-ibox-text-con">
                                                        <h4>JUNE 27</h4>
                                                    </div>
                                                </div>

                                                <div class="parallax-con-img ibox-f4">
                                                    <div class="tl-ibox-img-con">
                                                        <picture class="tl-ibox-pic-con">
                                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-august.png">
                                                            <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-august.png" alt="picture of Curtiss Model E training plane">
                                                        </picture>

                                                        <p class="tl-ibox-p">
                                                            Trans-Canada Airlines begins passenger service from the London airport.
                                                        </p>

                                                        <div class="tl-ibox-bg">
                                                        </div>
                                                    </div>

                                                    <div class="tl-ibox-text-con">
                                                        <h4>AUGUST 01</h4>
                                                    </div>
                                                </div>

                                                <div class="parallax-con-img ibox-f5">
                                                    <div class="tl-ibox-img-con">
                                                        <picture class="tl-ibox-pic-con">
                                                            <source media="(min-width: 768px)" srcset="images/timeline-images/desktop/d-timeline-1940-december-17.png">
                                                            <!-- NEEDS BOTH IMAGES / PLACEHOLDER -->
                                                            <img  class="tl-ibox-img" src="images/timeline-images/desktop/d-timeline-1940-december-17.png" alt="picture of Curtiss Model E training plane">
                                                        </picture>

                                                        <p class="tl-ibox-p">
                                                            #4 Air Observers School opens. Eventually expanding to occupy most of the airport, #4 will train a total of 4439 navigators and air bomber over the next four years.
                                                        </p>

                                                        <div class="tl-ibox-bg">
                                                        </div>
                                                    </div>

                                                    <div class="tl-ibox-text-con">
                                                        <h4>DECEMBER 17</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </article>

                                    <div class="tl-content-break">
                                        CONTENT BREAK 1940
                                    </div>
                                    
             
            <!-- END OF TIMELINE SECTION -->
        </section>
    </main>

</body>

</html>