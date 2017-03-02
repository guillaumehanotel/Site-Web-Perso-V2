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


$requete_comp = "SELECT * from competences";
$reponse_comp = $bdd->query($requete_comp);
$resultat_comp = $reponse_comp->fetchAll();



/*** FORMATIONS ***/

$requete_forma = "SELECT * from formations";
$reponse_forma = $bdd->query($requete_forma);
$resultat_forma = $reponse_forma->fetchAll();

























require $_dir["views"]."back/Administration.php";