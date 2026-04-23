export function navbar_showhide() {
  const hamburger = document.querySelector('.hamburger');
  const menu = document.querySelector(".hamburger-nav");
  const header = document.querySelector(".header");
  const desktopNav = document.querySelector(".desktop-nav");

function closeMenu() {
    if (menu.classList.contains('open')) {
        menu.classList.remove('slide-out');
        menu.classList.add('slide-back');
        hamburger.classList.remove('X');
        document.removeEventListener('click', docClick);

        menu.addEventListener('animationend', function() {
            menu.classList.remove('open');
            menu.classList.remove('slide-back');
        }, { once: true });
    } 
}

    function docClick(e) {
        if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
            closeMenu();
        }
    }

    function toggleMenu(e) {
        e.stopPropagation();
        
        if (menu.classList.contains('open')) {
            closeMenu();
        } else {
        menu.classList.add("open");
        menu.classList.add("slide-out");
        hamburger.classList.add('X');
        slideDown();

        menu.addEventListener('animationend', function() {
            document.addEventListener('click', docClick);
        }, {once: true});
    }
}
    hamburger.addEventListener('click', toggleMenu);

    let lastScroll = 0;

    function slideUp() {
        header.classList.add('slideUp');
        desktopNav.classList.add('slideUp');
    }

    function slideDown() {
        header.classList.remove('slideUp');
        desktopNav.classList.remove('slideUp');
    }

    window.addEventListener('scroll', () => {
        const current = window.scrollY;

        if (current > lastScroll && current > 80 && !menu.classList.contains('open')) {
            slideUp();
        } else if (current < lastScroll) {
            slideDown();
        }

        lastScroll = current;
    });

    document.addEventListener('mousemove', (e) => {
        if (e.clientY < 80) {
            slideDown();
        }
    });
}
