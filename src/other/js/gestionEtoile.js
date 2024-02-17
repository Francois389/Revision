const radioGroup = document.getElementById("radio-group");
const tabRadio = radioGroup.children;
const valeurImportance = document.getElementById("valeur-importance");

let cpt = 0;
for (const radio of tabRadio) {
    radio.addEventListener("click", (radio)=>{handleClick(radio);});
    cpt ++;
}

console.log(valeurImportance.value)
if (valeurImportance.value !== "") {
    tabRadio[valeurImportance.value - 1].click();
}

function handleClick(elementClick, indiceDansListe) {
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

function getIndiceFromList(liste, elementRecherche) {
    let resultat = -1;
    for (let i = 0; i < liste.length && resultat === -1; i++) {
        if (liste[i] === elementRecherche) {
            resultat = i;
        }
    }
    return resultat;
}