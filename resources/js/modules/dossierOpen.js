export function dossierOpen() {

    console.log("click on dossier");

    const dossierContent = document.querySelectorAll('.dossier-content');

    dossierContent.forEach(dossierPage => {
        dossierPage.addEventListener('click', () => {
            const isOpen = dossierPage.classList.contains('expanded');

            dossierContent.forEach(d => d.classList.remove('expanded'));

            if (!isOpen) {
                dossierPage.classList.add('expanded');
            }
        });
    });
}