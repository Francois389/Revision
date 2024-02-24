/* Script permettant de gérer la selection d'importance. */

/* 'radio-group' est l'élément qui regroupe toutes les radios */
const radioGroup = document.getElementById("radio-group");
const tabRadio = radioGroup.children;
/* 'valeur-importance' est l'élément qui contient la valeur de l'importance pour la faire passer dans un formulaire */
const valeurImportance = document.getElementById("valeur-importance");

for (const radio of tabRadio) {
    radio.addEventListener("click", (radio)=>{handleClick(radio);});
}

// Si une valeur d'importance est déjà présente, on déclenche le click sur la radio correspondante
// pour que le formulaire soit cohérent avec la valeur déjà présente
if (valeurImportance.value !== "") {
    tabRadio[valeurImportance.value - 1].click();
}

/**
 * Fonction permettant de gérer le click sur un élément radio.
 * Quand on clique sur un élément radio, on met à jour la valeur d'importance et on coche les éléments radios inférieurs
 * @param elementClick élément sur lequel on a cliqué
 */
function handleClick(elementClick) {
    elementClick = elementClick.target;
    valeurImportance.value = elementClick.value;
    const indice = getIndiceFromList(tabRadio, elementClick);
    for (let i = 0; i <= indice; i++) {
        tabRadio[i].checked = true;
    }
    for (let i = indice + 1; i < tabRadio.length; i++) {
        tabRadio[i].checked = false;
    }
}

/**
 * Récupérer l'indice d'un élément dans une liste
 * @param liste liste dans laquelle on recherche
 * @param elementRecherche élément que l'on recherche
 * @returns {number} l'indice de l'élément dans la liste, -1 si l'élément n'est pas dans la liste
 */
function getIndiceFromList(liste, elementRecherche) {
    let resultat = -1;
    for (let i = 0; i < liste.length && resultat === -1; i++) {
        if (liste[i] === elementRecherche) {
            resultat = i;
        }
    }
    return resultat;
}