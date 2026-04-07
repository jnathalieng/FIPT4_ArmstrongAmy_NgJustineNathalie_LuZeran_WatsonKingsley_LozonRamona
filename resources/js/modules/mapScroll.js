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

// IntersectionOberserver watches the viewport and detects what "scroll-section" the user is on
// const observer = new IntersectionObserver((entries) => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             const targetId = entry.target.dataset.target;
            
//             if (targetId === 'full-view') {

//                 svg.classList.remove('active');

//                 // uses the GSAP attr: to animate SVG attributes with more control
                
//                 gsap.to(svg, {
//                     scale: 1,
//                     duration: 0.5,
//                     ease: "power2.inOut",
//                     attr: {
//                         viewBox: `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`
//                     }
//                 })

//                 // svg.setAttribute('viewBox', `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`);

//                 // svg.classList.remove('active');

//                 // // GSAP zooming out from base
//                 // gsap.to(svg, {
//                 //     scale: 1,
//                 //     duration: 0.5,
//                 //     ease: "power2.inOut"
//                 // });

//             } else {
//                 svg.classList.add('active');
//                 zoomToBase(targetId);

                

//                 // GSAP zooming in to base
//                 // gsap.to(svg, {
//                 //     scale: 2.5,
//                 //     duration: 0.5,
//                 //     ease: "power2.inOut"
//                 // });
//             } 
//         } else {
//             // GSAP zooming out generally
//             gsap.to(svg, {
//                 scale: 1,
//                 duration: 0.5,
//                 ease: "power2.inOut",
//                 attr: {
//                     viewBox: `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`
//                 }
//             });
//         }
//     });
// }); 
// 
//this means the detector is 'detects' when there the new "scroll-section" is 20% visible

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
    return `${viewBoxX.x} ${viewBoxY.y} ${viewWidth.w} ${viewHeight.h}`
}

const fullView = document.querySelector("#full-view");

ScrollTrigger.create({
    trigger: fullView,
    start: 'top top',
    end: 'bottom top',
    pin: true,
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

    gsap.to(svg, {
        scale: 2,
        duration: 0.5,
        ease: "power2.inOut",
        attr: {
            viewBox: `${viewBoxX} ${viewBoxY} ${viewWidth} ${viewHeight}`
        }
    })
    // svg.setAttribute('viewBox', `${viewBoxX} ${viewBoxY} ${viewWidth} ${viewHeight}`);
}

function resetMap() {
    svg.classList.remove('active');
    
    // stop observering
    document.querySelectorAll('.scroll-section').forEach(section => {
        observer.unobserve(section);
        console.log("stopped observing");
    });

    // zoom and start observing
    gsap.to(svg, {
        scale: 1,
        duration: 0.5,
        ease: "power2.inOut",
        attr: {
            viewBox: `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`
        },
        onComplete: () => {
            document.querySelectorAll('.scroll-section').forEach(section => {
                observer.observe(section);
            });
            console.log("observer reactivated!");
        }
    });
}

function resetScrollSection() {
    const fullViewSection = document.querySelector('#full-view');

    fullViewSection.scrollIntoView({
            behavior: 'instant'
        });
    }

const returnButton = document.querySelector("#return-map-button");

returnButton.addEventListener('click', () => {
    resetMap();
    console.log("map reset");
    resetScrollSection();
    console.log("reset section content");
});

window.addEventListener('load', () => {
    svg.setAttribute('viewBox', `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`);

    svg.classList.remove('active');

    document.querySelectorAll('.scroll-section').forEach(section => {
        observer.observe(section);
    })
});

}