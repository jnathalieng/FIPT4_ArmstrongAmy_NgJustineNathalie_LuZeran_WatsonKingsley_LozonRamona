export function navDropDown() {
    const dropDownWrap = document.querySelector(".drop-down-wrap");
    const dropDownMenu = document.querySelector(".dropdown-menu");
    const desktopNav = document.querySelector(".desktop-nav");

    desktopNav.addEventListener("mouseleave", () => {
        dropDownMenu.classList.remove("droppingDown");
    })

    dropDownWrap.addEventListener("mouseenter", () => {
        dropDownMenu.classList.add('droppingDown');
    });
}