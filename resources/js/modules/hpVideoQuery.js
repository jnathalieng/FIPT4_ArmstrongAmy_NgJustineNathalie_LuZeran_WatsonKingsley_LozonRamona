export function videoQuery() {
    
    const mediaQuery = window.matchMedia("(min-width: 768px)");
    
    function setHeroVideoSrc() {
        const heroVideos = document.querySelectorAll(".hero-card-video");
        
        heroVideos.forEach(video => {
            const source = video.querySelector(".responsive-source");
            
            // Make sure source element exists before accessing it
            if (!source) {
                console.warn("No .responsive-source found in video", video);
                return;
            }
            
            const mobileSrc = source.getAttribute("data-mobile");
            const desktopSrc = source.getAttribute("data-desktop");
            
            if (mediaQuery.matches) {
                source.src = desktopSrc;
            } else {
                source.src = mobileSrc;
            }
            video.load();
        });
    }
    
    // Run after DOM is fully loaded
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", setHeroVideoSrc);
    } else {
        setHeroVideoSrc();
    }
    
    // Listen for viewport changes
    mediaQuery.addEventListener("change", setHeroVideoSrc);
}