// bouton suivant //
var marque= document.getElementById("menu_sel1");
var modele= document.getElementById("menu_sel2");
var option_etat= document.getElementById("menu_sel3");
var description=document.getElementById("descriptionM");
var partie2=document.getElementById("partie2");

//bouton de partie1 à partie2  du formulaire de crèation 
var bout_suivant = document.getElementById("mybouton1");


bout_suivant.addEventListener('click', function() {
alert("ok");
marque.style.visibility="hidden !important";
modele.style.visibility="hidden !important";
option_etat.style.visibility="hidden !important";
description.style.visibility="hidden !important";
partie2.style.visibility="visible !important";


})