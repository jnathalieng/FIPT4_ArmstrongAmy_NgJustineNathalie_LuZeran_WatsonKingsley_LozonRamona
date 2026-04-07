export function mapHotSpots() {

    console.log("hotspots!");

    const hotspots = document.querySelectorAll("#hotspots circle");
    console.log('circles found:', hotspots.length);

    hotspots.forEach((hotspot, index) => {
        const hsID = hotspot.id.replace('hs', '');
        const hsTarget = document.querySelector(`[data-target="base-${hsID}"]`);

        if (!hsTarget) return;

        hotspot.style.cursor = 'pointer';
        console.log(`hs${hsID} attached, target:`, hsTarget);

        hotspot.addEventListener('click', () => {
            console.log(`hs${hsID} clicked, scrolling to:`, hsTarget);

            gsap.to(window, {
                duration: 1,
                scrollTo: {
                    y: hsTarget,
                    offsetY: -100
                },
                ease: "power2.inOut"
            });
        });
    });
}