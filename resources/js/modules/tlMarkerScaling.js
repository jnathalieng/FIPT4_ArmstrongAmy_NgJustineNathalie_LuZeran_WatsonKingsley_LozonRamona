export function tlMarkerScaling() {
    const markersPositionPercentage = [
        { id: "tl-1909-section", progress: 0.2 },
        { id: "tl-1918-section", progress: 0.34 },
        { id: "tl-1927-section", progress: 0.48 },
        { id: "tl-1928-section", progress: 0.62 },
        { id: "tl-1930-section", progress: 0.76 },
        { id: "tl-1940-section", progress: 0.90 }
    ];

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
            console.log("Progress Value:", progress);
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