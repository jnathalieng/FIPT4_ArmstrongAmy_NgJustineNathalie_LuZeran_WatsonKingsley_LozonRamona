export function parallaxObj() {
    gsap.registerPlugin(ScrollTrigger);

    // function to get y translation values based on container height
    const getY = (element) => {
        const height = element.clientHeight;
        const maxScrollSpeed = -500;
        const minScrollSpeed = -10;
        const referenceHeight = 500;

        // function to adjust velocities based on heights relative to reference height
        const speedFactor = maxScrollSpeed + (height / referenceHeight) * (minScrollSpeed - maxScrollSpeed);

        console.log({height, speedFactor});
        return speedFactor;
    };

    // Text Containers
    document.querySelectorAll(".parallax-con-text").forEach((textBox) => {
        gsap.to(textBox, {
            y: getY(textBox),
            ease: "none",
            scrollTrigger: {
                trigger: textBox,
                start: "top bottom",
                end: "bottom top",
                scrub: 1
            }
        });
    });

    // Image containers
    document.querySelectorAll(".parallax-con-img").forEach((imageBox) => {
        gsap.to(imageBox, {
            y: getY(imageBox),
            ease: "power2.out",
            scrollTrigger: {
                trigger: imageBox,
                start: "top bottom",
                end: "bottom top",
                scrub: 1.5
            }
        });
    });
}