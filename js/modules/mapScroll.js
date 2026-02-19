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
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const targetId = entry.target.dataset.target;
            zoomToBase(targetId);

            svg.classList.add('active');
            // "isIntersecting is a property that is set by "IntersectionObserver", this property tells the watcher what and when it is watching something
        }
    });
}, {threshold: 0.5}); //this means the detector is 'detects' when there the new "scroll-section" is 50% visible

// tells the browser to watch all the "scroll-sections" created by forEach loop, this variable is being created for each of the new created "entry" in the list of "entries", this information tells the browser to scroll to the appropriate sections based on the appropriate bases in sequence.

let observerActive = false;
window.addEventListener('scroll', () => {
    if (!observerActive) {
        observerActive = true;
        document.querySelectorAll('.scroll-section').forEach(section => {
            observer.observe(section);
        });
        console.log("observer activated");
    }
}, {once: true});

function zoomToBase(targetId) {
    const target = baseCoordinates[targetId];

    const zoomLevel = 0.25;
    const viewWidth = initialViewBox.w * zoomLevel;
    const viewHeight = initialViewBox.h * zoomLevel;

    const viewBoxX = target.x - (viewWidth / 2);
    const viewBoxY = target.y - (viewHeight / 2);

    svg.setAttribute('viewBox', `${viewBoxX} ${viewBoxY} ${viewWidth} ${viewHeight}`);
}

function resetMap() {
    svg.setAttribute('viewBox', `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`);

    svg.classList.remove('active');

    observerActive = false;
}

const returnButton = document.querySelector("#return-map-button");

returnButton.addEventListener('click', () => {
    resetMap();
    console.log("map reset");
})

window.addEventListener('load', () => {
    svg.setAttribute('viewBox', `${initialViewBox.x} ${initialViewBox.y} ${initialViewBox.w} ${initialViewBox.h}`);

    svg.classList.remove('active');
});

}