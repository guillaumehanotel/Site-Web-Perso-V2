<?php


/*** DESCRIPTION ***/

$requete_pres = "SELECT * from presentation";
$reponse_pres = $bdd->query($requete_pres);
$resultat_pres = $reponse_pres->fetchAll();




/*** EXPERIENCES ***/

$requete_expe = "SELECT * from experiences";
$reponse_expe = $bdd->query($requete_expe);
$resultat_expe = $reponse_expe->fetchAll();





/*** REALISATIONS ***/

$requete_real = "SELECT * from realisations";
$reponse_real = $bdd->query($requete_real);
$resultat_real = $reponse_real->fetchAll();





/*** COMPETENCES ***/

/* très bien (1) */

$requete_comp1 = "SELECT * from competences WHERE competences_categorie = 1";
$reponse_comp1 = $bdd->query($requete_comp1);
$resultat_comp1 = $reponse_comp1->fetchAll();


/* correctement (2) */

$requete_comp2 = "SELECT * from competences WHERE competences_categorie = 2";
$reponse_comp2 = $bdd->query($requete_comp2);
$resultat_comp2 = $reponse_comp2->fetchAll();


/* moyennement (3) */

$requete_comp3 = "SELECT * from competences WHERE competences_categorie = 3";
$reponse_comp3 = $bdd->query($requete_comp3);
$resultat_comp3 = $reponse_comp3->fetchAll();


/*** FORMATIONS ***/


$requete_forma = "SELECT * from formations";
$reponse_forma = $bdd->query($requete_forma);
$resultat_forma = $reponse_forma->fetchAll();










require $_dir["views"]."Accueil.php";



