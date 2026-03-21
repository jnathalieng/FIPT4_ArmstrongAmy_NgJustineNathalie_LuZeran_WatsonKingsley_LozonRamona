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
                trigger: "#tl-1909-section",
                start: "top 50%",
                toggleActions: "play reverse play reverse"
            }
        });
}