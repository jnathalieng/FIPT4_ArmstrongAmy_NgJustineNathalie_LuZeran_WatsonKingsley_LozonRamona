export function tlShowSticky() {

    gsap.registerPlugin(ScrollTrigger);

    gsap.set("#tl-scroll-prog-con",
        {
            opacity: 0,
            yPercent: -100
        });

    gsap.to("#tl-scroll-prog-con",
        {
            opacity: 1,
            yPercent: 0,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#timeline-intro-con",
                start: "top 80%"
            }
        });
}