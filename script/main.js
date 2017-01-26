/**
 * Created by Mamadou Faye on 17/01/2017.
 */
"use strict";

var tableau=document.getElementById('#table');
console.log(tableau);

var caption=tableau.firstElementChild;
console.log(caption);

var le_bouton=document.getElementById('#ajouter');
le_bouton.addEventListener('click',ajouterligne);

calculer_et_afficher_total();//afficher dans la console cette fonction la c ce qu'on appel faire un appel de fonction

function ajouterligne() {
    console.log('ajouter ligne');
}

// maintenant allons chercher les inputs

var input_elems=document.getElementById('fld1').getElementsByTagName('input');
console.log(input_elems);
var nouv_tr= document.createElement('tr');

//nom jeu dans un th

var nouv_th_jeu = document.createElement('th');
nouv_th_jeu.textContent= input_elems[0].value;

nouv_tr.appendChild(nouv_th_jeu);


//nom categorie dans un th
var nouv_td_categorie = document.createElement('td');
console.log(nouv_td_categorie);
nouv_td_categorie.textContent= input_elems[1].value;

//ajout du td en fin  du tr
nouv_tr.appendChild(nouv_td_categorie);

//nom montant dans un th
var nouv_td_montant = document.createElement('td');
console.log(nouv_td_montant);
nouv_td_montant.textContent= parseFloat(input_elems[2].value).toFixed(2)+ '$';

nouv_tr.appendChild(nouv_td_montant);

// ajout du tr a la table
tableau.appendChild(nouv_tr);


function calculer_et_afficher_total() {
    console.log('calculer total');
    var total=0;
    var prix_article;
    var les_tr=tableau.getElementsByTagName('tr');
    for(var i = 1; i<les_tr.length; i++){
        console.log(les_tr[i].lastElementChild); // dernier element du tr : c'est le dernier td, celui du prix
        prix_article= parseFloat(les_tr[i].lastElementChild.textContent);// le contenu text du td sans le symbole $
        total=total+prix_article;
    }
    console.log(total);
    caption.firstElementChild.textContent= total + "$";
}