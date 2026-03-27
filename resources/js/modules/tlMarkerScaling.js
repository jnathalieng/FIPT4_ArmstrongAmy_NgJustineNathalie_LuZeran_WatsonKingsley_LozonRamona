export function tlMarkerScaling() {
    const markersPositionPercentage = [
        { id: "tl-1909-section", progress: 0.2 },
        { id: "tl-1918-section", progress: 0.34 },
        { id: "tl-1927-section", progress: 0.48 },
        { id: "tl-1928-section", progress: 0.62 },
        { id: "tl-1930-section", progress: 0.76 },
        { id: "tl-1940-section", progress: 0.90 }
    ];
    
    const firstSectionId = markersPositionPercentage[0].id;
    const firstSection = document.querySelector(`#${firstSectionId}`);

    const lastSectionId = markersPositionPercentage[markersPositionPercentage.length - 1].id;
    const lastSection = document.querySelector(`#${lastSectionId}`);

    const markers = document.querySelectorAll(".tl-marker");
    const maskingBar = document.querySelector("#tl-scroll-prog-mask");

    gsap.set(maskingBar, {
        "--scrollProgress": 0
    });

    const startScrollY = firstSection.offsetTop;
    const endScrollY = lastSection.offsetTop + lastSection.offsetHeight;
    
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

    markers.forEach((marker) => {
        marker.addEventListener("click", () => {
            gsap.to(maskingBar, {
                "--scrollProgress": parseFloat(marker.dataset.progress)
            })
        });
    });
}