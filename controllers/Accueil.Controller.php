<?php


/*** DESCRIPTION ***/

$requete_pres = "SELECT * from presentation";
$reponse_pres = $bdd->query($requete_pres);
$resultat_pres = $reponse_pres->fetchAll();




/*** EXPERIENCES ***/

$requete_expe = "SELECT * from experience";
$reponse_expe = $bdd->query($requete_expe);
$resultat_expe = $reponse_expe->fetchAll();





/*** REALISATIONS ***/

$requete_real = "SELECT * from realisation";
$reponse_real = $bdd->query($requete_real);
$resultat_real = $reponse_real->fetchAll();





/*** COMPETENCES ***/

/* très bien (1) */

$requete_comp1 = "SELECT * from competence WHERE competence_categorie = 1";
$reponse_comp1 = $bdd->query($requete_comp1);
$resultat_comp1 = $reponse_comp1->fetchAll();


/* correctement (2) */

$requete_comp2 = "SELECT * from competence WHERE competence_categorie = 2";
$reponse_comp2 = $bdd->query($requete_comp2);
$resultat_comp2 = $reponse_comp2->fetchAll();


/* moyennement (3) */

$requete_comp3 = "SELECT * from competence WHERE competence_categorie = 3";
$reponse_comp3 = $bdd->query($requete_comp3);
$resultat_comp3 = $reponse_comp3->fetchAll();


/*** FORMATIONS ***/


$requete_forma = "SELECT * from formation";
$reponse_forma = $bdd->query($requete_forma);
$resultat_forma = $reponse_forma->fetchAll();




if(isset($_POST['mail'])){
    
    //$token_error = true;
    
    if(isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['sujet']) && !empty($_POST['sujet']) &&
    isset($_POST['message']) && !empty($_POST['message'])){
        
        $nom = securify($_POST['nom']);
        $mail = securify($_POST['email']);
        $sujet = securify($_POST['sujet']);
        $message_txt = securify($_POST['message']);
        
        
        $message_html = "<html><head></head><body><p>".$message_txt."</p></body></html>";
        
        // on vérifie que l'email soumis est syntaxiquement correct
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            
            $cible = "guillaumehanotel@orange.fr";
            
                    
            
            if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $cible)) // On filtre les serveurs qui rencontrent des bogues.
            {
                $passage_ligne = "\r\n";
            }
            else
            {
                $passage_ligne = "\n";
            }
            
            
            
            //=====Création de la boundary
            $boundary = "-----=".md5(rand());
            //==========

                
            
            //=====Création du header de l'e-mail.
            $header = "From: \"$nom\"<".$mail.">".$passage_ligne;
            $header.= "Reply-to: \"$nom\"<".$mail.">".$passage_ligne;
            $header.= "MIME-Version: 1.0".$passage_ligne;
            $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
            //==========

            
            
            //=====Création du message.
            $message = $passage_ligne."--".$boundary.$passage_ligne;
            //=====Ajout du message au format texte.
            $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
            $message.= $passage_ligne.$message_txt.$passage_ligne;
            //==========
            $message.= $passage_ligne."--".$boundary.$passage_ligne;
            //=====Ajout du message au format HTML
            $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
            $message.= $passage_ligne.$message_html.$passage_ligne;
            //==========
            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
            //==========

            //=====Envoi de l'e-mail.
            if(mail($cible,$sujet,$message,$header)){
                echo "ca marche";
            } else {
                echo "marche pas";
            }
            //==========
            
            
           
            
            
            
        } else {
            $_SESSION["erreur"] = "Adresse Mail incorrect";
        }     
        
    } else {
        $_SESSION["erreur"] = "Champs invalides !";
    }
      
    
} else {
    //Formulaire pas envoyé
}



if(!empty($_SESSION["erreur"])){
	
	$token_error = true;
	
}
























require $_dir["views"]."Accueil.php";



