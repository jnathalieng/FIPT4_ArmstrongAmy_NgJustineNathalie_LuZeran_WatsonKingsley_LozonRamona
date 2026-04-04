export function tlScrollProgress() {
    gsap.registerPlugin(ScrollTrigger);
    
    const maskingBar = document.querySelector("#tl-scroll-prog-mask");

    gsap.set(maskingBar, {
        "--scrollProgress": 0
    });

    gsap.to(maskingBar, {
        "--scrollProgress": 1,
        ease: "none",
        scrollTrigger: {
            trigger: "#timeline-section",
            start: "top top",
            end: "bottom bottom",
            scrub: 2,
            markers: true
        }
    })
} 