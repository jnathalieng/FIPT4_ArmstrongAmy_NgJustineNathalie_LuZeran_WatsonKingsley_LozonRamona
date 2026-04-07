export function mapHotSpots() {

    console.log("hotspots!");

    const hotspots = document.querySelectorAll("#hotspots circle");
    console.log('circles found:', hotspots.length);

    let currentID = 0;

    hotspots.forEach((hotspot) => {
        const hsID = hotspot.id.replace('hs', '');
        const hsTarget = document.querySelector(`[data-target="base-${hsID}"]`);

        if (!hsTarget) return;

        hotspot.style.cursor = 'pointer';
        console.log(`hs${hsID} attached, target:`, hsTarget);

        hotspot.addEventListener('click', () => {
            console.log(`hs${hsID} clicked, scrolling to:`, hsTarget);

            if (hsID > currentID) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: hsTarget,
                        offsetY: -200
                    },
                    ease: "power2.inOut"
                });
            } else {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: hsTarget,
                        offsetY: 200
                    },
                    ease: "power2.inOut"
                });
            }
            
            currentID = hsID;
        });
    });
}