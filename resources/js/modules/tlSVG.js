export function tlSVG() {

    gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin);
    // gsap.registerPlugin(ScrollTo);

    gsap.utils.toArray(".tl-content-break").forEach((section) => {
        console.log("section found:", section);
        console.log("svgs found:", section.querySelectorAll("svg"));
        
        const svgs = section.querySelectorAll("svg");

        if (svgs.length === 0) return;

        const svgTL = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                end: "bottom 80%",
                toggleActions: "play reverse play reverse"
            }
        });

        svgTL.fromTo(svgs, {
            scale: 0,
            opacity: 0,            
        },
        {
            scale: 1,
            opacity: 1,
            duration: 1,
            ease: "power2.inOut",
            stagger: 0.3
        });

        // DRAW SVGs if there are any
        const strokedSVG = section.querySelectorAll("svg path[stroke]");

        if (strokedSVG.length > 0) {
            svgTL.fromTo(strokedSVG, {
                drawSVG: "50%"
            },
            {
                drawSVG: "100%",
                duration: 1,
                ease: "power2.inOut",
            }
        )};
    });
}