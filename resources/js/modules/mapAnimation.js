export function mapAnimation() {
    const hotspots = document.querySelectorAll("#hotspots circle");
    const scrollContainer = document.querySelector('.scroll-container');

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: scrollContainer,
            start: 'top bottom',
            end: 'bottom top',
            toggleActions: 'play reverse play reverse'
        }
    });

    tl.fromTo(hotspots, {
        scale: 0,
    },
    {
        scale: 1,
        duration: 1,
        ease: "back.out(1.5)",
        transformOrigin: "center center",
        stagger: 0.1
    });
};