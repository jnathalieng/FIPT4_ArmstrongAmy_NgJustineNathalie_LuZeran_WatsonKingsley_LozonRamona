export function dossierOpen() {
    const liftConfig = {
        july: {
            mobile:  -890,
            tablet:  -500,
            desktop: -340
        },
        august: {
            mobile:  -500,
            tablet:  -300,
            desktop: -240
        },
        september: {
            mobile:  -500,
            tablet:  -200,
            desktop: -140
        },
        october: {
            mobile:  -300,
            tablet:  -200,
            desktop: -140
        }
    };
    function getBreakpoint() {
        const w = window.innerWidth;
        if (w < 768)  return 'mobile';
        if (w < 1200) return 'tablet';
        return 'desktop';
    }

    function getLift(dossier) {
        const config = liftConfig[dossier.id];
        if (!config) return -400;
        return config[getBreakpoint()];
    }

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

            if (activeDossier) {
                gsap.to(activeDossier, {
                    top: originalPositions[activeDossier.id],
                    height: 200,
                    duration: 0.4,
                    ease: 'power2.inOut'
                });
            }

            gsap.set(dossier, { height: 'auto' });
            const contentHeight = dossier.scrollHeight;
            gsap.set(dossier, { height: 200 });

            const lastDossier = document.querySelector('#october');
            const lastRect = lastDossier.getBoundingClientRect();
            const conRect = dossierCon.getBoundingClientRect();
            const bottomEdge = lastRect.bottom - conRect.top;

            const targetTop = getLift(dossier);
            const totalHeight = bottomEdge - targetTop;

            gsap.to(dossier, {
                top: targetTop,
                height: totalHeight,
                duration: 0.4,
                ease: 'power2.inOut'
            });

            activeDossier = dossier;
        });
    });

    window.addEventListener('resize', () => {
        if (activeDossier) {
            const lastDossier = document.querySelector('#october');
            const lastRect = lastDossier.getBoundingClientRect();
            const conRect = dossierCon.getBoundingClientRect();
            const bottomEdge = lastRect.bottom - conRect.top;

            const targetTop = getLift(activeDossier);
            const totalHeight = bottomEdge - targetTop;

            gsap.set(activeDossier, {
                top: targetTop,
                height: totalHeight
            });
        }
    });
}