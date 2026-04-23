export function cardShowHide() {
    console.log("click on a card!");
    
    document.querySelectorAll(".comm-card-box").forEach(card => {
        card.addEventListener('click', function() {
            
            this.classList.toggle('active');

            const textContent = this.querySelector('.comm-p, .comm-text-section');

            if (textContent) {
                textContent.classList.toggle('active');
            }
        });
    });
}