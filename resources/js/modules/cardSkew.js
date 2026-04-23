export function cardSkew() {
    console.log("check out the cards");

    gsap.registerPlugin(ScrollTrigger);

    let proxy = {skew: 0};

    let skewSetter = gsap.quickSetter(".comm-card-box", "skewY", "deg");

    let clamp = gsap.utils.clamp(-10, 10);

    ScrollTrigger.create({
        onUpdate: (self) => {
            let skew = clamp(self.getVelocity() / -300);

            if (Math.abs(skew) > Math.abs(proxy.skew)) {
                proxy.skew = skew;
                gsap.to(proxy, {
                    skew: 0,
                    duration: 0.3,
                    ease: "power3",
                    overwrite: true,
                    onUpdate: () => skewSetter(proxy.skew)
                });
            }
        }
    });

    gsap.set(".comm-card-box", {
        transformOrigin: "right center",
        force3D: true
    });
    // gsap.to(".comm-card-box", {
    //     skewY: 5,
    //     scrollTrigger: {
    //         trigger: ".comm-card-box",
    //         start: "top bottom",
    //         end: "bottom top",
    //         scrub: true 
    //     }
    // });
}