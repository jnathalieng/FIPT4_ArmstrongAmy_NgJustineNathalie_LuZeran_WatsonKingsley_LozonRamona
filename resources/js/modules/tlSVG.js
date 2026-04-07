export function tlSVG() {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollTo);

    gsap.utils.toArray(".tl-content-break").forEach((section) => {
        
        const svgs = section.querySelectorAll("svg");

        tlSVG.fromTo(svgs, {
            clipPath: "inset(0 100% 0 0)",            
        },
        {
            clipPath: "inset(0 0 0 0)",
            duration: 1,
            ease: "power2.inOut",
        });
    });
}