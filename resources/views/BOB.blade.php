<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battle of Britain</title>
    @vite(['resources/css/main.css', 'resources/css/grid.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <!-- GSAP LINKING -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollToPlugin.min.js"></script>
</head>
<body data-page="BOB" id="BOB-page">

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

    <h1 class="hidden">The Battle of Britain Page</h1>

    <main>

        <!-- HERO -->
        <section class="hero-video-section" id="BOB-hero">
            
            <h2 class="hidden">Battle of Britain hero section</h2>

            <div class="hero-title-con">
                <div class="hero-title">
                    <h3>
                        The Battle of Britain
                    </h3>
                </div>
                <div class="hero-subtitle">
                    <p>
                        London's unheard involvement
                    </p>
                </div>
            </div>

            <video class="hero-card-video hero-section-video" muted loop playsinline preload="metadata" onmouseover="this.play()" onmouseout="this.pause()">
                            
                <source data-desktop="/videos/hero-videos/hero-canteen-1920x1080.mp4" type="video/mp4">
                
                <source data-mobile="/videos/hero-videos/hero-canteen-768x768.mp4" type="video/mp4">

                <p>Your browser does not support</p>
            </video>

        </section>
        
        <section class="BOB-intro-section">
            
            <h3>THE BATTLE OF BRITAIN</h3>

            <p class="typewriter-quote">
                "...the Battle of France is over. I expect that the Battle of Britain is about to begin...The whole fury and might of the enemy must very soon be turned on us.
            </p>

            <p class="typewriter-quote">
                Let us therefore brace ourselves to our duties, and so bear ourselves that if the British Empire and its Commonwealth last for a thousand years, men will still say, 'This was their finest hour.' "
            </p>

            <p class="typewriter-quote">
                Winston Churchill, in the House of Commons, June 18, 1940
            </p>

            <button id="skipQuote">
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#FFF"><path d="M480-200 240-440l42-42 198 198 198-198 42 42-240 240Zm0-253L240-693l42-42 198 198 198-198 42 42-240 240Z"/></svg>
            </button>
        </section>

        <div class="dossier-con">
            
            <div class="dossier" id="cover">
                <img src="images/BOB-images/folder-texture.png">
            </div>

            <div class="dossier" id="july" data-lift="500">
                
                <h3 class="dossier-tag" id="july-tag">JULY</h3>

                <p class="dossier-content">
                    The Battle of Britain (July 10 - October 31, 1940)
                    
                    The Battle of Britain was the first major military campaign fought entirely in the air. Over 82 days, the Royal Air Force defended the skies over southern England against sustained attacks by the German Luftwaffe. Germany's objective was to gain air superiority in preparation for Operation Sea Lion, the planned invasion of Britain. Despite being outnumbered, RAF Fighter Command successfully resisted the assault, preventing invasion and marking a major turning point in World War II.
                    “Never in the field of human conflict was so much owed by so many to so few.”
                    — Winston Churchill, House of Commons, August 15, 1940
                </p>

                <p class="dossier-content">
                    Phase 1 — Channel Battles (July to early August)
                    German attacks focused on shipping convoys and fighter sweeps over southern England to disrupt supplies and draw RAF fighters into combat.
                </p>

                <p class="dossier-content">
                    July 10, 1940
                    Recognized as the start of the Battle of Britain. The Luftwaffe launched major attacks on English Channel shipping convoys. Over 100 aircraft clashed in large air battles over Dover.
                </p>

            </div>

            <div class="dossier" id="august"  data-lift="300">
                
                <h3 class="dossier-tag" id="aug-tag">AUGUST</h3>

                <p class="dossier-content">
                    Phase 2 — Airfields & Radar (Mid-August)
                    Luftwaffe targeted radar stations and RAF airfields to cripple Fighter Command. This was the most dangerous period for the RAF.
                </p>

                <p class="dossier-content">
                    August 12, 1940
                    First focused German attacks on Britain’s coastal radar stations. Most installations remained operational.
                    August 13, 1940 — Adler Tag (Eagle Day)
                    Large-scale attacks targeted RAF airfields. Germany lost 39 aircraft and 66 men, while Britain lost 15 aircraft and 4 pilots.
                    August 15, 1940
                    The Luftwaffe launched its most widespread assault, attacking airfields and factories across southern and northeastern England. Nearly 1,800 German sorties were flown. Despite heavy damage, RAF Fighter Command remained operational.
                    August 18, 1940 — The Hardest Day
                    Over 850 German sorties were flown. Intense air battles involved up to 300 aircraft at once. Despite heavy attacks, no RAF sector stations were destroyed.
                </p>

            </div>

            <div class="dossier" id="september"  data-lift="350">
                
                <h3 class="dossier-tag" id="sept-tag">SEPTEMBER</h3>

                <p class="dossier-content">
                    Phase 3 — London Blitz (From September 7)
                    Attacks shifted to London and major cities. Daylight raids were combined with heavy night bombing, reducing pressure on RAF airfields.
                </p>

                <p class="dossier-content">
                    September 7, 1940 — Start of the London Blitz
                    Nearly 1,000 German aircraft attacked London's docks and East End. Over 400 civilians were killed. Attacks on RAF airfields decreased, allowing squadrons time to recover.
                    September 15, 1940 — Battle of Britain Day
                    Two massive German attacks were repelled over London. Losses were so severe that Germany's belief the RAF was near collapse was proven wrong. Plans for invasion were postponed indefinitely.
                </p>

            </div>

            <div class="dossier" id="october"  data-lift="400">
                
                <h3 class="dossier-tag" id="oct-tag">OCTOBER</h3>
                
                <p class="dossier-content">
                    Phase 4 — Night Bombing Campaign (Late September onward)
                    After invasion plans were cancelled, Germany focused mainly on night raids, with fewer daytime operations.
                </p>

                <p class="dossier-content">
                    October 31, 1940

                    Later designated as the official end of the Battle of Britain. German forces failed to achieve air superiority.
                </p>

                <p class="dossier-content">
                    WHY THE BATTLE MATTERED
                    Germany needed control of the skies before launching a ground invasion of Britain. Achieving air superiority would have allowed German forces to cross the English Channel safely. When the Luftwaffe failed to destroy RAF Fighter Command, invasion plans were postponed and eventually abandoned.
                    This victory was not only due to pilots in the air, but also to radar operators, ground crews, controllers, engineers, and commanders who coordinated Britain’s air defence network.
                </p>

            </div>
        </div>

        <section class="big-red">
            <h3 class="big-red-text">Cumulative Battle of Britain Losses 
        (July - October 1940)</h3>
        </section>

        <div class="deaths-section">
            <h2>Cumulative Battle of Britain Losses</h2>
            <p>(July - October 1940)</p>

            <div class="deaths-info-con">

                <div class="deaths-info">
                    <h3>RAF FIGHTER COMMAND:</h3>

                    <p>
                        RAF Fighter Command:
                        544 pilots killed
                        422 wounded
                        1,547 aircraft destroyed
                    </p>

                    <h3>Luftwaffe:</h3>

                    <p>
                        2,698 aircrew killed
                        1,887 aircraft lost
                        Foreign pilots in RAF service:
                        595 non-British pilots flew in the Battle, including:
                        145 from Poland
                        127 from New Zealand
                    </p>
                </div>

                <div class="deaths-info">

                    <p>
                        112 from Canada
                        88 from Czechoslovakia
                        32 from Australia
                        28 from Belgium
                        25 from South Africa
                        13 from France
                        10 from Ireland
                        7 from United States
                        1 each from Jamaica, Palestine, and Rhodesia
                    </p>

                </div>
            </div>

            <div class="deaths-info-bot">
                <p class="appear-text">
                    “The gratitude of every home in our Island, in our Empire, and indeed throughout the world, except in the abodes of the guilty, goes out to the British airmen who, undaunted by odds, unwearied in their constant challenge and mortal danger, are turning the tide of world war by their prowess and by their devotion. Never in the field of human conflict was so much owed by so many to so few.”
                </p>

                <p class="appear-text">
                    Prime Minister Churchill in the House of Commons, August 15, 1940
                </p>

                <p class="appear-text">
                    Of the nearly 3000 names on the Battle of Britain monument, 112 are those of Canadians. Among them are five airmen from this region. Many other Canadians had a part in the battle as well including ground crew and nurses.
                </p>
            </div>
        </div>

        <div class="canadian-pilots-section  color-content-box white-background">

            <h3 class="content-box-title">Five London Airmen in the Battle of Britain</h3>

            <p class="content-box-text">Commemorating those from our city who served in 1940.</p>


            <div class="canadian-pilots-card">



                <div class="pilots-card-content">
                    <h2 class="pilot-card-rank-mobile">FLYING OFFICER</h2>
                    <h2 class="pilot-card-name-mobile">ROSS SMITHER</h2>
                    <div class="pilots-card-img-con" ID="ross-smither"></div>
                    <div class="pilots-card-text-con">

                    <h2 class="pilot-card-rank-desk">FLYING OFFICER</h2>
                    <h2 class="pilot-card-name-desk">ROSS SMITHER</h2>

                        <p>
                            Born London, Nov. 12, 1912.
                        </p>

                        <p>
                            Smither served two years in the militia before joining the RCAF as a fitter. He later   qualified as an air gunner before applying to enter a pilot's course.
                            He was serving with No. 1 (RCAF) Squadron when it arrived in the UK on June 21, 1940.
                            Smither claimed a Me109 damaged on August 31st and a Me110 destroyed and another damaged on September 4th.
                            He was shot down and killed by Me109s over Tunbridge Wells on September 15th, in Hurricane P3876.
                            He is buried in Brookwood Military Cemetery.
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="canadian-pilots-card">
                <div class="pilots-card-content">
                <h2 class="pilot-card-rank-mobile">PILOT OFFICER</h2>
                <h2 class="pilot-card-name-mobile">HUGH RILEY</h2>

                    <div class="pilots-card-img-con" id="hugh-riley"></div>
                    <div class="pilots-card-text-con">
                    <h2 class="pilot-card-rank-desk">PILOTOFFICER</h2>
                    <h2 class="pilot-card-name-desk">HUGH RILEY</h2>
                        <p>
                            Born London, May 26, 1918.
                        </p>

                        <p>
                            After finishing his schooling in 1938 he worked at the Highland Golf Club and the London Winery before leaving for England in May 1939 with a friend to enlist in the RAF.

                            He was awarded a short service commission (five years) qualifying in August, 1940.

                            Conversion to Spitfires at 7 OTU Hawarden was followed by a posting to 64 Squadron at Leconfield in early September. His last move was on September 15th to 66 Squadron at Gravesend. On September 27th, he claimed a Me109 destroyed and this was confirmed.
                            He was shot down near Crockham Hill, Sevenoaks, on October 17th, flying Spitfire R6800 and died in the ensuing crash.

                            He is buried in Gravesend Cemetery.
                        </p>
                    </div>
                </div>
            </div>
            <div class="canadian-pilots-card">
                <div class="pilots-card-content">
                <h2 class="pilot-card-rank-mobile">FLYING OFFICER</h2>
                <h2 class="pilot-card-name-mobile">ROBERT GRASSICK</h2>

                <div class="pilots-card-img-con" id="robert-grassik"></div>
                <div class="pilots-card-text-con">

                    <h2 class="pilot-card-rank-desk">FLYING OFFICER</h2>
                    <h2 class="pilot-card-name-desk">ROBERT GRASSICK</h2>
                        <p>
                            Born London, May 22, 1917.
                        </p>

                        <p>
                            He joined the RAF on a short service commission in November, 1938. Following training, he joined 242 Squadron, then reforming at Church Fenton, on November 5th, 1939.

                            Grassick went to France on May 14th, 1940, on attachment to 607 Squadron.

                            Whilst in France he destroyed two Me109's and a Ju88 on 15th and 16th May. He destroyed two Me109's over Dunkirk. 242 was posted to France on the 8th of June to reinforce 1, 73 and 501 Squadrons and returned on the 16th.

                            While no actions from the Battle of Britain period appear in his record, Ted Barris mentions him while describing the action the men from 242 Squadron saw in France:

                            “During the climax of the Dunkirk air battle, Stan Turner shot down two more enemy fighters. His fellow No. 242 P/O's Robert Grassick, Willie McKnight and John Latta also turned in remarkable combat records. Grassick chased and fired at an Me109 until it crashed and then claimed a second enemy fighter.”

                            He survived the war.
                        </p>
                    </div>
                </div>
            </div>

            <div class="canadian-pilots-card">
                <div class="pilots-card-content">
                <h2 class="pilot-card-rank-mobile">PILOT OFFICER</h2>
                <h2 class="pilot-card-name-mobile">NIEL CAMPBELL</h2>

                <div class="pilots-card-img-con" id="niel-campbell"></div>
                <div class="pilots-card-text-con">
                    <h2 class="pilot-card-rank-desk">PILOT OFFICER</h2>
                    <h2 class="pilot-card-name-desk">NIEL CAMPBELL</h2>
                        <p>
                            Born St. Thomas, June 24, 1916.
                        </p>

                        <p>
                            AIn 1938 Campbell began flying at the London, Ontario Flying Club and obtained his civil pilot's licence. He applied for a short service commission in the RAF in late 1938.

                            Following training, he was posted to 32 Squadron at Wittering, arriving on May 24th. On June 3rd, he moved to 242 Squadron at Biggin Hill. Five days later he flew to France with the squadron; to help cover the rearguard actions being fought by the British Army as it retreated to the Atlantic coast.

                            By mid-July, 242 was operational again and on September 15th, Campbell damaged a Do17 and on the 18th he claimed two Ju88s destroyed, shared in shooting down another, and damaged a fourth.
                            On 17th October 1940 Campbell was in Hurricane V6575 which crashed into the sea after possibly being hit by return fire from a Do17 engaged off Yarmouth.

                            His body was later recovered, and buried on October 31st in Scottow Cemetery, Norfolk.
                        </p>
                    </div>
                </div>
            </div>

            <div class="canadian-pilots-card">
                <div class="pilots-card-content">
                <h2 class="pilot-card-rank-mobile">FLYING OFFICER</h2>
                <h2 class="pilot-card-name-mobile">ROBERT R. SMITH, DFC</h2>

                <div class="pilots-card-img-con" id="robert-smith"></div>
                <div class="pilots-card-text-con">
                <h2 class="pilot-card-rank-desk">FLYING OFFICER</h2>
                <h2 class="pilot-card-name-desk">ROBERT R. SMITH, DFC</h2>
                        <p>
                            Born London, August 17, 1915.
                        </p>

                        <p>
                            Smith joined the RAF on a short service commission in May, 1938.

                            He joined 229 Squadron when it was reformed at Digby on October 6th, 1939. Over Dunkirk, on May 29th, 1940, Smith probably destroyed a Me109 and, on June 1st, one Ju87 and probably a second.
                            
                            On September 11th, he claimed a He111 probably destroyed. On the 15th, he was shot down in an attack on Do17s and Me110s over Sevenoaks and baled out, with leg wounds, from Hurricane V6616.
                            On this day he damaged a Me109.
                            
                            Smith later flew a Kittyhawk with 112 Squadron in the Western Desert campaign in North Africa where he was shot down, becoming a Prisoner of War.

                            He survived the war.
                        </p>
                    </div>
                </div>
            </div>
        
        </div>

        <div class="read-more">
            <a class="read-more-button" id="view-remembrance">View The Remembrance Page<span class="cta-arrow">&#8594</span></a>
        </div>

        <section class="color-content-box white-background" id="discover-aircraft-cta">
            <h3 class="content-box-title">The Skies of 1940</h3>
            <p class="content-box-text">Discover the aircraft used during the Battle of Britain</p>
        </section>

        <section class="card-carousel" id="events-photo-gallery-1">

            <div class="carousel" id="aircraft-carousel">
                <div class="event-card" id="photo-1"></div>
                <div class="event-card" id="photo-2"></div>
                <div class="event-card" id="photo-3"></div>
                <div class="event-card" id="photo-4"></div>
                <div class="event-card" id="photo-5"></div>
                <div class="event-card" id="photo-6"></div>
                <div class="event-card" id="photo-7"></div>
                <div class="event-card" id="photo-8"></div>
                <div class="event-card" id="photo-9"></div>
                <div class="event-card" id="photo-10"></div>
                <div class="event-card" id="photo-11"></div>
                <div class="event-card" id="photo-12"></div>
            <div class="carousel-background"></div>
            </div>
        </section>

                <div class="read-more">
            <a class="read-more-button" id="explore-aircraft-button">Explore the Aircraft<span class="cta-arrow">&#8594</span></a>
        </div>



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