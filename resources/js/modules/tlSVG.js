export function tlSVG() {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollTo);

    gsap.utils.toArray(".tl-content-break").forEach((section) => {
        
        const svgs = section.querySelectorAll("svg");

        const svgTL = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                end: "bottom 80%",
                toggleActions: "play reverse play reverse"
            }
        });

        svgTL.fromTo(svgs, {
            clipPath: "inset(0 100% 0 0)",            
        },
        {
            clipPath: "inset(0 0 0 0)",
            duration: 1,
            ease: "power2.inOut",
        });
    });
}