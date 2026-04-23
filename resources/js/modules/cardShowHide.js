export function cardShowHide() {
    console.log("click on a card!");
    
    document.querySelectorAll(".comm-card-box").forEach(card => {

        card.addEventListener('click', function() {

        document.querySelectorAll(".comm-card-box").forEach(cards => {
            if (cards !== this) {
                cards.classList.remove('active');

                const textContents = cards.querySelector('.comm-p, .comm-text-section');

                if (textContents) {
                    textContents.classList.remove('active');
                }
            }
        });
            
            this.classList.toggle('active');

            const textContent = this.querySelector('.comm-p, .comm-text-section');

            if (textContent) {
                textContent.classList.toggle('active');
            }
        });

    });
}