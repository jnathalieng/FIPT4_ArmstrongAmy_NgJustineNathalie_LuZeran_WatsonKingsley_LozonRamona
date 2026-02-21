export function typeWriter() {
    
    gsap.registerPlugin(SplitText);
    gsap.registerPlugin(ScrollToPlugin);

    const typedText = new SplitText('.typewriter-quote', {
        type: 'chars'
    });

    const skipBtn = document.querySelector('#skipQuote');

    const typeTL = gsap.timeline();

    typeTL.from(typedText.chars, {
        duration: 0.1,
        opacity: 0,
        stagger: 0.05,
        y: -1,
        ease: 'back.inOut'
    })

    skipBtn.addEventListener('click', () => {
        typeTL.progress(1);

        gsap.to(window, {
            duration: 1,
            scrollTo: {
                y: '.dossier-con',
                offsetY: 100
            },
            ease: 'power2.inOut'
        })
        console.log("skipped");
    })

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            typeTL.progress(1);
        }
    })
}