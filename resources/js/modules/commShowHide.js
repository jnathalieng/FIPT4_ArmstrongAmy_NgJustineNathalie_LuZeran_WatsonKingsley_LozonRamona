export function commShowHide() {
    
    document.querySelectorAll('.comm-CTA-button').forEach(button => {
        button.addEventListener('click', function() {
            
            // applying "closest" method again
            const commBeta = this.closest('.comm-card-section');

            // reference closest parent ^^ again
            const commGammaCons = commBeta.querySelectorAll('.comm-card-con, .comm-delta-con-wrapper');

            commGammaCons.forEach(commGamma => {
                commGamma.classList.toggle('commShowHide');

                if (commGamma.classList.contains('commShowHide')) {
                    window.scrollBy({
                        top: 200,
                        behavior: 'smooth'
                    })
                }
            });
            console.log("expanding content")
        })
    })
}