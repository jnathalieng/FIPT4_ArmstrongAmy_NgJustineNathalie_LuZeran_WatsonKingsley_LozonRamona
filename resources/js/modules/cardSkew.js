export function cardSkew() {
    console.log("check out the cards");

    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".comm-card-box", {
        skewY: 5,
        scrollTrigger: {
            trigger: ".comm-card-box",
            start: "top bottom",
            end: "bottom top",
            scrub: true 
        }
    });
}