export function typeWriter() {
    
    gsap.registerPlugin(SplitText);

    const typedText = new SplitText('.typewriter-quote', {
        type: 'chars'
    });

    gsap.from(typedText.chars, {
        duration: 0.1,
        opacity: 0,
        stagger: 0.05,
        y: -1,
        ease: 'back.inOut'
    })
}