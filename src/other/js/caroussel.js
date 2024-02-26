/**
 * FRANCAIS
 * En HTML, "display-area" a une largeur de 4 cartes = 880px. Chaque carte a une largeur de 200px et une marge de 10px.
 * .display-area a un "conteneur-carte" qui contient toutes les cartes. "conteneur-carte" est défini pour afficher flex.
 * .display-area a un débordement caché pour masquer la partie de "conteneur-carte" qui dépasse la largeur du conteneur.
 */


const carousselCollection = document.getElementsByClassName('caroussel');

for (let i = 0; i < carousselCollection.length; i++) {
    /* On récupère le conteneur de carte */
    carousselCollection[i]["cartes"] = carousselCollection[i].getElementsByClassName('conteneur-carte')[0];
    /* On récupère les points */
    carousselCollection[i]["dots"] = carousselCollection[i].getElementsByClassName('dot');
    carousselCollection[i]["activeDotNum"] = 0;
}

for (const caroussel of carousselCollection) {
    let cartes = caroussel.cartes;
    let dots = caroussel.dots;
    let activeDotNum = caroussel.activeDotNum;

    for (let i = 0; i < dots.length; i++) {
        dots[i].setAttribute('data-num', i + "");
        dots[i].addEventListener('click', (e) => {
            let clickedDotNum = e.target.dataset.num;

            /* Si le point cliqué n'est pas actif, alors on déplace le conteneur de carte */
            if (clickedDotNum !== activeDotNum) {
                let displayArea = cartes.parentElement.clientWidth;
                let pixels = -displayArea * clickedDotNum;
                cartes.style.transform = 'translateX(' + pixels + 'px)';
                dots[activeDotNum].classList.remove('active');
                dots[clickedDotNum].classList.add('active');
                activeDotNum = clickedDotNum;
            }
        });
    }
}