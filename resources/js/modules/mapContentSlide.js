export function mapContentSlide() {

    document.querySelectorAll('.scroll-section').forEach(section => {
        const baseHeading = section.querySelector('h2');
        const contentBox = section.querySelector('.map-content-box');
        const imageBox = section.querySelector('.map-image-box');

        if (baseHeading) {
            gsap.from(baseHeading, {
                x: -100,
                opacity: 0,
                duration: 1,
                ease: "bounce.out",
                scrollTrigger: {
                    trigger: section,
                    start: 'top 10%',
                    end: 'bottom 60%',
                    toggleActions: 'play none none none',
                    pin: true
                }
            })
        }

        if (contentBox) {
            gsap.from(contentBox, {
                x: -100,
                opacity: 0,
                duration: 0.2,
                ease: "power2.inOut",
                scrollTrigger: {
                    trigger: section,
                    start: 'top 60%',
                    end: 'bottom 60%',
                    toggleActions: 'play reverse play reverse'
                }
            });
        }

        if (imageBox) {
            gsap.from(imageBox, {
                x: 100,
                opacity: 0,
                duration: 0.2,
                ease: "power2.inOut",
                scrollTrigger: {
                    trigger: section,
                    start: 'top 60%',
                    end: 'bottom 60%',
                    toggleActions: 'play reverse play reverse'
                }
            });
        }
    });
}