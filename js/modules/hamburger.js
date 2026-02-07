// export function navbar_showhide() {

//     const menu = document.querySelector(".hamburger-dropdown");
//     const hamburger = document.querySelector("#hamburger");
//     const closeBtn = document.querySelector("#close");
//     const menuLinks = document.querySelectorAll("#menu nav ul li a");

//     function toggleMenuOn() {
//         menu.classList.toggle("open");
//         menu.classList.add("opening");
//         console.log("menu opened");
//         hamburger.classList.add("hidden");
//         closeBtn.classList.remove("hidden");
//     };


//     function toggleMenuOff() {
//         console.log("menu closed");
//         menu.classList.remove("opening");
//         menu.classList.add("closing");
//         menu.addEventListener('animationEnd', () => {
//             menu.classList.remove("closing");
//             menu.classList.toggle("open");
//         }, {once:true});
//         hamburger.classList.remove("hidden");
//         closeBtn.classList.add("hidden");
//     };

//     closeBtn.addEventListener("click", toggleMenuOff);
//     hamburger.addEventListener("click", toggleMenuOn);

//     menuLinks.forEach((link) => {
//         link.addEventListener("click", toggleMenuoff);
//         console.log("menu link clicked");
//     });
// }

export function navbar_showhide() {
    const menu = document.querySelector(".hamburger-dropdown");
    const hamburger = document.querySelector("#hamburger");
    const closeBtn = document.querySelector("#close");
    const menuLinks = document.querySelectorAll(".hamburger-dropdown a");
    
    function toggleMenuOn() {
        menu.classList.add("open");
        menu.classList.add("opening");
        menu.classList.remove("closing");
        console.log("menu opened");
        hamburger.classList.add("hidden");
        closeBtn.classList.remove("hidden");
    }
    
    function toggleMenuOff() {
        console.log("menu closed");
        menu.classList.remove("opening");
        menu.classList.add("closing");
        menu.addEventListener('animationend', () => {
            menu.classList.remove("closing");
            menu.classList.remove("open");
        }, { once: true });
        hamburger.classList.remove("hidden");
        closeBtn.classList.add("hidden");
    }
    
    closeBtn.addEventListener("click", toggleMenuOff);
    hamburger.addEventListener("click", toggleMenuOn);
    menuLinks.forEach((link) => {
        link.addEventListener("click", toggleMenuOff);
    });
}