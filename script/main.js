/**
 * Created by Mamadou Faye on 17/01/2017.
 */
"use strict";
const MIN_NB_CAR = 1;
$ (function () {
    /*brancher l<ecoute au momment du submit*/
    var formulaire = ('#form');
    formulaire.on('submit',valider_formulaire);
    /*ecouter les changement*/
    formulaire.find(':input').on('change', gerer_changement);
    formulaire.find('select[name="ville"]').on('change', gerer_changement_ville);
});

/*gestionnairee des evenement pour eviter la soumission en cas de besoin*/


