export function mapContentSlide() {

    document.querySelectorAll('.scroll-section').forEach(section => {
        const baseHeading = section.querySelector('h2');
        const contentBox = section.querySelector('.map-content-box');
        const imageBox = section.querySelector('.map-image-box');

        if (baseHeading) {
            gsap.from(baseHeading, {
                x: -100,
                opacity: 0,
                duration: 0.2,
                ease: "power1.In",
                scrollTrigger: {
                    trigger: section,
                    start: 'top 5%',
                    end: 'bottom 5%',
                    toggleActions: 'play reverse play reverse',
                    pin: true,
                    toggleClass: {
                        targets: baseHeading,
                        className: 'activeHeading'
                    }
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
                    start: 'top 5%',
                    end: 'bottom 5%',
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
                    start: 'top 5%',
                    end: 'bottom 5%',
                    toggleActions: 'play reverse play reverse'
                }
            });
        }
    });
}