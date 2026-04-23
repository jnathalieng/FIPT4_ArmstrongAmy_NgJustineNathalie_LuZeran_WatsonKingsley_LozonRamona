export function typeWriter() {
    
    gsap.registerPlugin(SplitText);
    gsap.registerPlugin(ScrollToPlugin);
    gsap.registerPlugin(ScrollTrigger); 

    const typedText = new SplitText('.typewriter-quote', {
        type: 'chars, words'
    });

    const skipBtn = document.querySelector('#skipQuote');

    const typeTL = gsap.timeline({
        scrollTrigger: {
            trigger: '.typewriter-quote',
            start: 'top 80%',
            once: true
        }
    });

    typeTL.from(typedText.chars, {
        duration: 0.1,
        opacity: 0,
        stagger: 0.06,
        y: -1,
        ease: 'back.inOut'
    });

    skipBtn.addEventListener('click', () => {
        typeTL.progress(1);

        gsap.to(window, {
            duration: 1,
            scrollTo: {
                y: '.dossier-con',
                offsetY: 200
            },
            ease: 'power2.inOut'
        })
        console.log("skipped");
    })

    window.addEventListener('scroll', () => {
        if (window.scrollY > 750) {
            typeTL.progress(1);
        }
    })
}