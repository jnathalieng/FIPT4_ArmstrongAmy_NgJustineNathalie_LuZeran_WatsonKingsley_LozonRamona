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
    const endScrollY = lastMarker.offsetTop + lastMarker.offsetHeight;
    
    const updateBar = () => {
        const current = window.scrollY;
        
        if (current <= startScrollY) {
            gsap.set(maskingBar, {
                "--scrollProgress": 0
            }); 
        } else if (current >= endScrollY) {
            gsap.set(maskingBar, {
                "--scrollProgress": 1
            });
        } else {
            const progress = (current - startScrollY) / (endScrollY - startScrollY);

            gsap.set(maskingBar, {
                "--scrollProgress": progress
            });
        }
    };
    
    updateBar();

    window.addEventListener("scroll", () => {
        updateBar();
    });

    markers.forEach((marker, i) => {
        marker.addEventListener("click", e => {
            gsap.to(maskingBar, {
                "--scrollProgress": marker.dataset.progress
            })
        });
    });
}