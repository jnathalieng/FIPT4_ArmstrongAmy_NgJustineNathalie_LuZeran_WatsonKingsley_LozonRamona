export function tlMarkerScaling() {
    const markersPositionPercentage = [
        0.2, 0.34, 0.48, 0.62, 0.76, 0.9
    ];

    const markers = document.querySelectorAll(".tl-marker");
    const maskingBar = document.querySelector("#tl-scroll-prog-mask");

    markers.forEach((marker, i) => {
        marker.addEventListener("click", e => {
            gsap.to(maskingBar, {
                scaleY: markersPositionPercentage[i],
            })
        });
    });
}