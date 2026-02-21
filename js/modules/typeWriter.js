export function typeWriter() {
    
    gsap.registerPlugin(SplitText);

    const typedText = new SplitText('.typewriter-quote', {
        type: 'chars'
    });

    gsap.from(typedText.chars, {
        duration: 0.5,
        opacity: 0,
        stagger: 0.5,
        ease: 'none'
    })
}