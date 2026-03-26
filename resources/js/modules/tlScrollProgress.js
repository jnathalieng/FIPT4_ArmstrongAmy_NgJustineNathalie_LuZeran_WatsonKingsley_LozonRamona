export function tlScrollProgress() {
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.to("#tl-scroll-prog-fill", {
        opacity: 1,
        ease: "none",
        scrollTrigger: {
            trigger: "#timeline-section",
            start: "top top",
            end: "bottom bottom",
            scrub: true,
            markers: true
        }
    })
} 