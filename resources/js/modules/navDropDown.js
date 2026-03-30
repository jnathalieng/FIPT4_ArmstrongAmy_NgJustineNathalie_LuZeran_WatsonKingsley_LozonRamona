export function navDropDown() {
    const dropDownWrap = document.querySelector(".drop-down-wrap");
    const dropDownMenu = document.querySelector(".dropdown-menu");

    dropDownWrap.addEventListener("mouseenter", () => {
        dropDownMenu.classList.add('droppingDown');
    });

    dropDownWrap.addEventListener("mouseleave", () => {
        dropDownMenu.classList.remove("droppingDown");
    });
}