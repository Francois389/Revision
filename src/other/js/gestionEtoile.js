/* Script permettant de gérer la selection d'importance. */

$(function () {
    /* 'radio-group' est l'élément qui regroupe toutes les radios */
    const tabRadio = $("#radio-group").children();
    /* 'valeur-importance' est l'élément qui contient la valeur de l'importance pour la faire passer dans un formulaire */
    const valeurImportance = $("#valeur-importance");

    tabRadio.each(function (index, element) {
        $(this).on("click", function () {
            valeurImportance.val(index + 1);
            for (let i = 0; i < tabRadio.length; i++) {
                tabRadio[i].checked = i <= index;
            }
        });
    });

// Si une valeur d'importance est déjà présente, on déclenche le click sur la radio correspondante
// pour que le formulaire soit cohérent avec la valeur déjà présente
    if (valeurImportance.value !== "") {
        tabRadio[valeurImportance.val() - 1].click();
    }
});