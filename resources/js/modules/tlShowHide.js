export function tlShowHide() {

    document.querySelectorAll('.tl-toggle-btn').forEach(button => {
        
        button.addEventListener('click', function() {
            
            // apply the "closest" method to specify parent element of the "this"
            const betaCon = this.closest('.tl-beta-con');
            // select all gamma-con's (sibling elements of "this") inside the parent beta-con's ^^
            const gammaCons = betaCon.querySelectorAll('.tl-gamma-con');

            gammaCons.forEach(gammaCon => {
                gammaCon.classList.toggle('tlShowHide');

                if (gammaCon.classList.contains('tlShowHide')) {
                    window.scrollBy({
                        // static value right now, make dyanmic later
                        top: 400,
                        behavior: 'smooth'
                    })
                }
            });
            console.log("button clicked");
        })
    })
}
