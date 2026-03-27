export function tlMarkerScaling() {
    // const markersPositionPercentage = [
    //     0.23, 0.37, 0.51, 0.65, 0.79, 0.93
    // ];

    const markers = document.querySelectorAll(".tl-marker");
    const maskingBar = document.querySelector("#tl-scroll-prog-mask");

    gsap.set(maskingBar, {
        "--scrollProgress": 0
    });

    markers.forEach((marker, i) => {
        marker.addEventListener("click", e => {
            gsap.to(maskingBar, {
                "--scrollProgress": marker.dataset.progress
            })
        });
    });
}