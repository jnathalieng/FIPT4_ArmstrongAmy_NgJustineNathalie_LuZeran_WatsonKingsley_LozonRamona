export function tlShowHide() {

    const tlToggleButton = document.querySelector('.tl-toggle-btn');
    const gammaCons = document.querySelectorAll('.tl-gamma-con');

    tlToggleButton.addEventListener('click', function() {
        gammaCons.forEach(gammaCon =>
            gammaCon.classList.toggle('tlShowHide'));
            console.log("button clicked");
        })
}