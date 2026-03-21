<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commemoration Page</title>
    @vite(['resources/css/main.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
</head>

<body id="commemoration-page" data-page="comm">
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
                    </ul>

                </div>
                <div class="m-l-nav-item">
                    <div></div>
                    <a class="button-text" href="{{ route('BOB') }}">Battle of Britain</a>
                </div>
                <div class="m-l-nav-item">
                    <div></div>
                    <a class="button-text" href="{{ route('events') }}">Events</a>
                </div>
                <div class="m-l-nav-item">
                    <div></div>
                    <a class="button-text" href="{{ route('contact') }}">Contact</a>
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
                        <li><a class="button-text hover-item" href="{{ route('BOB') }}">Battle of Britain</a></li>
                        <li><a class="button-text hover-item" href="{{ route('events') }}">Events</a></li>
                        <li><a class="button-text hover-item" href="{{ route('contact') }}">Contact</a></li>
                    </ul>

        </nav>
    </header>

    <h1 class="hidden">Commemoration Page</h1>

    <main>
       
<!-- COMMEMORATION HERO SECTION -->

        <section class="hero-section" id="comm-hero">
            <div class="hero-triangle"></div>
            <div class="hero-title-con">
                <div class="hero-title"><p>London's Air Age</p></div>
                <div class="hero-subtitle"><p>From Lambeth to Crumlin</p></div>
            </div>
        </section>

<!-- Commemoration Text Section -->

    <section class="text-con">
        
        <div>
            <h3>
                Honouring Those Connected to London's Aviation History
            </h3>

            <p>
                This section recognizes airmen connected to London, Ontario, including members of the 420 Snowy Owl Auxiliary Fighter Squadron, those who served in the Battle of Britain, and those who lost their lives during training under the British Commonwealth Air Training Plan. Their names are preserved through historical records and the Book of Remembrance.
            </p>
        </div>
    </section>

<!-- Commemoration Expandable Selection -->
    
    <section class="comm-selection-section">
        
        <div class="comm-alpha-con">
            
            <!-- BetaCon 1 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        420 Snowy Owl Auxiliary Fighter Squadron
                    </h2>

                    <h3>
                        (1948-1956)
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-john-allan-smith.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-john-allan-smith.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            Many Londoners see their first aircraft - a Curtiss Model E - flown by Beckwith Havens who took off from Carling Heights, near Wolseley Barracks (now the Royal Canadian Regiment Museum) for a 20-minute flight over the city.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>

                </div>

                <!-- GammaCon 420 Placeholder 1 -->
                <div class="comm-gamma-con">
                    <div class="comm-gamma-img-con">
                        <picture>
                            <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-grant-thomas-stewart.png">
                            <!-- NEEDS BOTH IMAGES -->
                            <img  class="comm-gamma-img" src="images/comm-images/mobile/m-comm-grant-thomas-stewart.png" alt="placeholder of pilots">
                        </picture>
                    </div>

                    <div class="comm-gamma-text-con">
                        <span class="title-span">FLYING OFFICER</span>
                        <h2>GRANT THOMAS STEWART</h2>

                        <p>
                            Killed when his P-51 Mustang broke up in mid-air and crashed near Walkerton, 25 October 1952.
                        </p>

                        <h3>MILITARY SERVICE</h3>
                        
                        <p class="service-number"><span class="label-span">SERVICE NUMBER: </span>130234</p>
                        <p class="age"><span class="label-span">AGE: </span>23</p>
                        <p class="rank"><span class="label-span">RANK: </span>FLYING OFFICER</p>
                        <p class="force"><span class="label-span">FORCE: </span>AIR FORCE</p>
                        <p class="unit-regiment"><span class="label-span">UNIT/REGIMENT: </span>420 "City of London" (Fighter) Squadron</p>
                        <p class="birth"><span class="label-span">BIRTH: </span>June 20, 1929 Kincardine, Ontario</p>
                        <p class="enlistment"><span class="label-span">ENLISTMENT: </span>January 1, 1949 London, Ontario</p>
                        <p class="death"><span class="label-span">DEATH: </span>October 25, 1952 Pinkerton, Ontario</p>

                        <p class="burial-info"><span class="label-span">BURIAL/MEMORIAL INFORMATION GRAVE REFERENCE: </span>Grave 3, Lot 59, Plot A,</p>
                    </div>
                </div>

                <div class="read-more">
                    <a class="read-more-button comm-CTA-button">Expand <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- BetaCon 2 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        Losses during Training
                    </h2>

                    <h3>
                        British Commonwealth Air Training Plan (BCATP)
                    </h3>

                    <h3>
                        (1940-1943)
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-robert-clinton-bailey.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-robert-clinton-bailey.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            Between 1940 and 1943, several airmen connected to training schools in and around London, Ontario, lost their lives while preparing for service under the British Commonwealth Air Training Plan. Accidents occurred during solo flights, mid-air collisions, navigation exercises, and routine training operations involving aircraft such as the Fleet Finch and Avro Anson. These losses form part of the historical record of Canada's wartime air training program.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>
                </div>

                <div class="comm-delta-con-wrapper">
                    <h2>NO.3 AIR OBSERVER SCHOOL</h2>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>
                </div>

                <div class="comm-delta-con-wrapper">
                    <h2>NO. 4  AIR OBSERVER SCHOOL</h2>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>

                    <!-- DeltaCon Placeholder 1 -->
                    <div class="comm-delta-con">
                        <div class="comm-delta-img-con">
                            <picture>
                                <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                                <!-- PLACEHOLDER CON -->
                                <img  class="comm-delta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="placeholder of pilots">
                            </picture>
                        </div>

                        <div class="comm-delta-text-con">
                            <span class="title-span">LEADING AIRCRAFTMAN</span>
                            <h2>LEWIS DUFF</h2>

                            <p>
                                Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.
                            </p>
                            
                            <p class="unit"><span class="label-span">UNIT: </span>No. 3 Air Observer School</p>
                            <p class="incident"><span class="label-span">INCIDENT: </span>Mid-air collision</p>
                            <p class="location"><span class="label-span">LOCATION: </span>One quarter mile southwest of London aerodrome</p>
                            <p class="details"><span class="label-span">DETAILS: </span>Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.</p>
                        </div>
                    </div>
                </div>

                <div class="read-more">
                    <a class="read-more-button comm-CTA-button">Expand <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- BetaCon 3 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        Five London Airmen in the Battle of Britain
                    </h2>

                    <h3>
                        (1940)
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/comm-images/desktop/d-comm-grant-thomas-stewart.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-grant-thomas-stewart.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            In 1940, five airmen connected to London served during the Battle of Britain, one of the most significant air campaigns of the Second World War. Their participation formed part of Canada's contribution to the defence of Britain during this critical period.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>
                </div>

                <div class="read-more">
                    <a href="BOB.html" class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>

            <!-- BetaCon 4 -->
            <div class="comm-beta-con">
                
                <div class="comm-beta-headers">
                    <h2>
                        The Book of Rememberance
                    </h2>

                    <h3>
                        (1940) CHANGE DATE
                    </h3>
                </div>

                <div class="comm-beta-img-box">
                    <picture>
                        <source media="(min-width: 768px)" srcset="images/comm-images/mobile/m-comm-420-badge.png">
                        <!-- NEEDS IMAGES -->
                        <img class="comm-beta-img" src="images/comm-images/mobile/m-comm-420-badge.png" alt="picture of John Allan Smith recieving a medal">
                        
                        <p class="comm-beta-p">
                            The Book of Remembrance preserves the names of those connected to London's aviation history whose service and sacrifice are recorded for future generations. It stands as a lasting record within the museum and 427 Wing.
                        </p>
                    </picture>

                    <div class="comm-beta-bg">
                    </div>
                </div>

                <div class="read-more">
                    <a class="read-more-button">Read More <span class="cta-arrow">&#8594</span></a>
                </div>
            </div>
        
        </div>
    </section>
</main>

    <footer>
</body>
</html>