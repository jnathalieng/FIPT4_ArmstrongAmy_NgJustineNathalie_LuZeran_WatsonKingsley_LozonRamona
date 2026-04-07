export function navDropDown() {
    const dropDownWrappers = document.querySelectorAll(".drop-down-wrap");

    const desktopNav = document.querySelector(".desktop-nav");

    dropDownWrappers.forEach((wrapper) => {
        const dropDownMenu = wrapper.querySelector(".dropdown-menu");

        wrapper.addEventListener("mouseenter", () => {
            dropDownMenu.classList.add("droppingDown");
        });

        wrapper.addEventListener("mouseleave", () => {
            dropDownMenu.classList.remove("droppingDown");
        });
    });

    desktopNav.addEventListener("mouseleave", () => {
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
            menu.classList.remove("droppingDown");
        })
    });
}