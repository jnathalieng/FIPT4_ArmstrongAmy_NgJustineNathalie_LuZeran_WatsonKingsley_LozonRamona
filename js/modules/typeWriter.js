export function typeWriter() {
    
    gsap.registerPlugin(SplitText);

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
        console.log("skipped");
    })

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            typeTL.progress(1);
        }
    })
}