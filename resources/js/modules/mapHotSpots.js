export function mapHotSpots() {


    const hotspots = document.querySelectorAll("#hotspots circle");

    hotspots.forEach((hotspot, index) => {
        const hsID = index + 1;
        const hsTarget = document.querySelector(`[data-target="base-${hsID}"]`);

        if (!hsTarget) return;

        hotspot.style.cursor = 'pointer';

        hotspot.addEventListener('click', () => {

            hsTarget.scrollIntoView({
                behavior: 'smooth'
            });
        })
    })
}