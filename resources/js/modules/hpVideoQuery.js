export function videoQuery() {
    
    const heroVideos = document.querySelectorAll(".hero-card-video");
    const mediaQuery = window.matchMedia("(min-width: 768px)");

    function setHeroVideoSrc() {
        heroVideos.forEach(video => {
            const mobileSrc = video.querySelector("[data-mobile]").getAttribute("data-mobile");
            const desktopSrc = video.querySelector("[data-desktop]").getAttribute("data-desktop");

            
            if (mediaQuery.matches) {
                video.src = desktopSrc;
            } else {
                video.src = mobileSrc;
            }
            video.load();
        });
    };

    window.addEventListener("load", setHeroVideoSrc);
    mediaQuery.addEventListener("change", setHeroVideoSrc);
}