export function tlScrollProgress() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.set("#tl-scroll-prog-mask", {
        transform: "scaleY(0)"
    });

    gsap.to("#tl-scroll-prog-mask", {
        transform: "scaleY(1)",
        ease: "none",
        scrollTrigger: {
            trigger: "#timeline-section",
            start: "top top",
            end: "bottom bottom",
            scrub: 2
        }
    })
} 