export function tlScrollTo() {
    gsap.registerPlugin(ScrollToPlugin);

    const markers = document.querySelectorAll(".tl-marker");

    markers.forEach(marker => {
        marker.addEventListener("click", (e) => {
            e.preventDefault();

            const target = marker.getAttribute("href");

            gsap.to(window, {
                duration: 1,
                scrollTo: {
                    y: target,
                    offsetY: 100
                },
                ease: "power2.inOut"
            });
        });
    });
}