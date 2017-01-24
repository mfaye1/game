/**
 * Created by Mamadou Faye on 17/01/2017.
 */
"use strict";
var validation = document.getElementById('submit');
// recupere les element et le span pour au cas ou sa manque
var prenom = document.getElementById('saisi_prenom'); console.log(prenom);
var prenom_m= document.getElementById('prenom_manquant');
var prenom_reg = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;//ecrire ici le regex du prenom
validation.addEventListener('click',f_valide);
function f_valide(e) {
    if (prenom.validity.valueMissing){
        e.preventDefault();
        prenom_m.textContent="ce champ est requis veuillez le remplir";
        prenom_m.style.color = "red";
    }else if (prenom_reg.test(prenom.value)==false){
        event.preventDefault();
        prenom_m.textContent="format non valide";
        prenom_m.style.color = "orange"
    }else {

    }
}