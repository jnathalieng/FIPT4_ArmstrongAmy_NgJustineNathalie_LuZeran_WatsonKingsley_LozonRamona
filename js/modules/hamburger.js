export function navbar_showhide() {

    const menu = document.querySelector("#menu");
    const hamburger = document.querySelector("#hamburger");
    const closeBtn = document.querySelector("#close");
    const menuLinks = document.querySelectorAll("#menu nav ul li a");

    function toggleMenu() {
        menu.classList.toggle("open");
        console.log("menu class toggled");
    };

    closeBtn.addEventListener("click", toggleMenu);
    hamburger.addEventListener("click", toggleMenu);

    menuLinks.forEach((link) => {
        link.addEventListener("click", toggleMenu);
        console.log("menu link clicked");
    });
}