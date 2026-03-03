export function dossierOpen() {
    const dossiers = document.querySelectorAll('.dossier');
    const dossierCon = document.querySelector('.dossier-con');
    let activeDossier = null;

    const originalPositions = {
        'july':      -80,
        'august':    -20,
        'september':  40,
        'october':   100
    };

    dossiers.forEach(dossier => {
        dossier.addEventListener('click', () => {

            // close if already open
            if (activeDossier === dossier) {
                gsap.to(dossier, {
                    top: originalPositions[dossier.id],
                    height: 200,
                    duration: 0.4,
                    ease: 'power2.inOut'
                });
                activeDossier = null;
                return;
            }

            // close previously open dossier
            if (activeDossier) {
                gsap.to(activeDossier, {
                    top: originalPositions[activeDossier.id],
                    height: 200,
                    duration: 0.4,
                    ease: 'power2.inOut'
                });
            }

            // measure the natural content height
            gsap.set(dossier, { height: 'auto' });
            const fullHeight = dossier.scrollHeight;
            gsap.set(dossier, { height: 200 }); // reset before animating

            // calculate how far up it needs to go so it doesn't overflow
            const conRect = dossierCon.getBoundingClientRect();
            const currentTop = originalPositions[dossier.id];
            const targetTop = currentTop - fullHeight + 200; // slide up by the extra height needed

            gsap.to(dossier, {
                top: targetTop,
                height: fullHeight,
                duration: 0.4,
                ease: 'power2.inOut'
            });

            activeDossier = dossier;
        });
    });

    // recalculate on resize if a dossier is open
    window.addEventListener('resize', () => {
        if (activeDossier) {
            gsap.set(activeDossier, { height: 'auto' });
            const fullHeight = activeDossier.scrollHeight;
            const currentTop = originalPositions[activeDossier.id];
            const targetTop = currentTop - fullHeight + 200;

            gsap.set(activeDossier, {
                height: fullHeight,
                top: targetTop
            });
        }
    });
}