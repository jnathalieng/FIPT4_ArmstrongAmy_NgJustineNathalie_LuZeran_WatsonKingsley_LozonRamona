export function mapScroll() {

const baseCoordinates = {
    'base-1': {x: 492.69, y: 50.87},
    'base-2': {x: 485.89, y: 75.97},
    'base-3': {x: 538.53, y: 157.97},
    'base-4': {x: 531.58, y: 247.64},
    'base-5': {x: 901.58, y: 173.79},
    'base-6': {x: 641.71, y: 354.11},
    'base-7': {x: 107.44, y: 633.2},
    'base-8': {x: 596.66, y: 474.67},
    'base-9': {x: 637.56, y: 459.6},
    'base-10': {x: 700.26, y: 440.22},
    'base-11': {x: 943.72, y: 411.26},
    'base-12': {x: 963.29, y: 383.07},
    'base-13': {x: 1087.77, y: 399.78},
    'base-14': {x: 1207.02, y: 295.4},
    'base-15': {x: 999.7, y: 297.48},
    'base-16': {x: 910.09, y: 316.4}
}

const svg = document.querySelector("#map");
const initialViewBox = {x: 0, y: 0, w: 1200, h: 800};

// VARAIBLES AND FUNCTIONS DEFINING VIEW STATES OF THE MAP
function getZoomedViewBox(targetId) {
    const target = baseCoordinates[targetId];
    const zoomLevel = 0.25;

    const viewWidth = initialViewBox.w * zoomLevel;
    const viewHeight = initialViewBox.h * zoomLevel;

    const viewBoxX = target.x - (viewWidth / 2);
    const viewBoxY = target.y - (viewHeight / 2);

    return `${viewBoxX} ${viewBoxY} ${viewWidth} ${viewHeight}`;
}

function resetViewBox() {
    return `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`
}

const fullView = document.querySelector("#full-view");

ScrollTrigger.create({
    trigger: fullView,
    start: 'top top',
    end: 'bottom top',
    pin: true,
    pinSpacing: false,
    onEnter: () => {
        gsap.to(svg, {
            duration: 0.5,
            ease: "power2.inOut",
            attr: {
                viewBox: resetViewBox()
            }
        });
    },
    onEnterBack: () => {
        gsap.to(svg, {
            duration: 0.5,
            ease: "power2.inOut",
            attr: {
                viewBox: resetViewBox()
            }
        });
    }
});

// CONTROLLING CONTENT SLIDE MIGRATION
    document.querySelectorAll('.scroll-section').forEach(section => {

        if (section.dataset.target === 'full-view') return;

        const baseHeading = section.querySelector('h2');
        const contentBox = section.querySelector('.map-content-box');
        const imageBox = section.querySelector('.map-image-box');

        if (baseHeading) {
            gsap.fromTo(baseHeading, {
                x: -100,
                opacity: 0
            },
            {
                x: 0,
                opacity: 1,
                duration: 0.2,
                ease: "power1.In",
                scrollTrigger: {
                    trigger: section,
                    start: 'top top',
                    end: 'bottom top',
                    toggleActions: 'play reverse play reverse',
                    pin: true,
                    pinSpacing: false,
                    toggleClass: {
                        targets: baseHeading,
                        className: 'activeHeading'
                    },
                    onEnter: () => {
                        gsap.to(svg, {
                            duration: 0.5,
                            ease: "power2.inOut",
                            attr: {
                                viewBox: getZoomedViewBox(section.dataset.target)
                            }
                        });
                    },
                    onEnterBack: () => {
                        gsap.to(svg, {
                            duration: 0.5,
                            ease: "power2.inOut",
                            attr: {
                                viewBox: getZoomedViewBox(section.dataset.target)
                            }
                        });
                    },
                    onLeave: () => {
                        gsap.to(svg, {
                            duration: 0.5,
                            ease: "power2.inOut",
                            attr: {
                                viewBox: resetViewBox()
                            }
                        });
                    },
                    onLeaveBack: () => {
                        gsap.to(svg, {
                            duration: 0.5,
                            ease: "power2.inOut",
                            attr: {
                                viewBox: resetViewBox()
                            }
                        });
                    }
                }
            });
        }

        if (contentBox) {
            gsap.fromTo(contentBox, {
                x: -100,
                opacity: 0
            },
            {
                x: 0,
                opacity: 1,
                duration: 0.2,
                ease: "power2.inOut",
                scrollTrigger: {
                    trigger: section,
                    start: 'top top',
                    end: 'bottom top',
                    toggleActions: 'play reverse play reverse'
                }
            });
        }

        if (imageBox) {
            gsap.fromTo(imageBox, {
                x: 100,
                opacity: 0
            },
            {
                x: 0,
                opacity: 1,
                duration: 0.2,
                ease: "power2.inOut",
                scrollTrigger: {
                    trigger: section,
                    start: 'top top',
                    end: 'bottom top',
                    toggleActions: 'play reverse play reverse'
                }
            });
        }
    });

    // RETURN BUTTON
    const returnButton = document.querySelector("#return-map-button");

    returnButton.addEventListener('click', () => {
        gsap.to(svg, {
            duration: 1,
            ease: "power2.inOut",
            attr: {
                viewBox: resetViewBox()
            }
        });
        gsap.to(window, {
            duration: 1,
            scrollTo: {
                y: "#full-view",
                ease: "power2.inOut"
            }
        });
    });

    window.addEventListener('load', () => {
        svg.setAttribute('viewBox', resetViewBox());
    });

}