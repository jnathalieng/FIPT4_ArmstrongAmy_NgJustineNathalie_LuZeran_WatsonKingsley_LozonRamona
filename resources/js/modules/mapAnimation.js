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
        scale: 3,
    },
    {
        scale: 1,
        duration: 1,
        ease: "back.out(1.5)",
        transformOrigin: "center center",
        stagger: 0.2
    });

    hotspots.forEach((hotspot) => {
        hotspot.addEventListener('mouseenter', () => {
            gsap.to(hotspot, {
                scale: 2,
                duration: 0.3,
                ease: "power2.out",
                transformOrigin: "center center"
            });
        });

        hotspot.addEventListener('mouseleave', () => {
            gsap.to(hotspot, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out",
                transformOrigin: "center center"
            });
        });
    });
};