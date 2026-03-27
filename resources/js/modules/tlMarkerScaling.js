export function tlMarkerScaling() {
    // const markersPositionPercentage = [
    //     0.23, 0.37, 0.51, 0.65, 0.79, 0.93
    // ];

    const markers = document.querySelectorAll(".tl-marker");
    const maskingBar = document.querySelector("#tl-scroll-prog-mask");

    gsap.set(maskingBar, {
        "--scrollProgress": 0
    });

    // variables to calculate scrolling range (custome 0-1 scroll progress)
    const firstMarker = document.querySelector("#tl-1909-section");
    const lastMarker = document.querySelector("#tl-1940-section");

    const startScrollY = firstMarker.offsetTop;
    const endScrollY = lastMarker.offsetTop;
    
    const updateBar = () => {
        const current = window.scrollY;
        
        
    }
    


    markers.forEach((marker, i) => {
        marker.addEventListener("click", e => {
            gsap.to(maskingBar, {
                "--scrollProgress": marker.dataset.progress
            })
        });
    });
}