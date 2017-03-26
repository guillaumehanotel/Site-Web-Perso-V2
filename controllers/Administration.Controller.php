<?php

if(!isset($_SESSION["connect"])){

    $_SESSION["erreur"]="Vous devez vous connecter pour accéder a cette page ";
    
    //$token_error = true;
    header('Location: '.BASE_URL.'/login/');
}



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


$requete_comp = "SELECT * from competence";
$reponse_comp = $bdd->query($requete_comp);
$resultat_comp = $reponse_comp->fetchAll();



/*** FORMATIONS ***/

$requete_forma = "SELECT * from formation";
$reponse_forma = $bdd->query($requete_forma);
$resultat_forma = $reponse_forma->fetchAll();




if(isset($_POST['experience'])){
    
    if(isset($_POST['date']) && !empty($_POST['date']) &&
       isset($_POST['duree']) && !empty($_POST['duree']) &&
       isset($_POST['ville']) && !empty($_POST['ville']) &&
       isset($_POST['cp']) && !empty($_POST['cp']) &&
       isset($_POST['intitule']) && !empty($_POST['intitule']) &&
       isset($_POST['entreprise']) && !empty($_POST['entreprise']) &&
       isset($_POST['type']) && !empty($_POST['type']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['ordre']) && !empty($_POST['ordre'])){   
        
        $reload = true;
        
        $requete = $bdd -> prepare("INSERT INTO experience(
                                                experience_date,
                                                experience_duree,
                                                experience_ville,
                                                experience_codepostal,
                                                experience_intitule,
                                                experience_entreprise,
                                                experience_type,
                                                experience_description,
                                                experience_ordre
                                            )
                                            VALUES
                                            (
                                                :date,
                                                :duree,
                                                :ville,
                                                :cp,
                                                :intitule,
                                                :entreprise,
                                                :type,
                                                :description,
                                                :ordre
                                            )"
                                  );
        
        
        $param = array(
            'date' => securify($_POST['date']),
            'duree' => securify($_POST['duree']),
            'ville' => securify($_POST['ville']),
            'cp' => securify($_POST['cp']),
            'intitule' => securify($_POST['intitule']),
            'entreprise' => securify($_POST['entreprise']),
            'type' => securify($_POST['type']),
            'description' => securify($_POST['description']),
            'ordre' => securify($_POST['ordre'])
        );
        
        
        $requete->execute($param);   
        
    } else {
        $_SESSION["erreur"] = "Champs invalides !";
    }
    
} else {
    // formulaire pas envoyé
}












if(isset($_POST['realisation'])){
    
    if(isset($_POST['titre']) && !empty($_POST['titre']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['lien']) && !empty($_POST['lien'])){   
        
        $reload = true;
        
        $requete = $bdd -> prepare("INSERT INTO realisation(
                                                realisation_link,
                                                realisation_titre,
                                                realisation_desc
                                            )
                                            VALUES
                                            (
                                                :lien,
                                                :titre,
                                                :description
                                            )"
                                  );
        
        
        $param = array(
            'lien' => securify($_POST['lien']),
            'titre' => securify($_POST['titre']),
            'description' => securify($_POST['description'])
        );
        
        
        $requete->execute($param);   
        
    } else {
        $_SESSION["erreur"] = "Champs invalides !";
    }
    
} else {
    // formulaire pas envoyé
}










if(isset($_POST['competence'])){
    
    if(isset($_POST['intitule']) && !empty($_POST['intitule']) &&
       isset($_POST['categorie']) && !empty($_POST['categorie'])){   
        
        $reload = true;
        
        $requete = $bdd -> prepare("INSERT INTO competence(
                                                competence_intitule,
                                                competence_categorie
                                            )
                                            VALUES
                                            (
                                                :intitule,
                                                :categorie
                                            )"
                                  );
        
        
        $param = array(
            'intitule' => securify($_POST['intitule']),
            'categorie' => $_POST['categorie']
        );
        
        
        $requete->execute($param);   
        
    } else {
        $_SESSION["erreur"] = "Champs invalides !";
    }
    
} else {
    // formulaire pas envoyé
}







if(isset($_POST['formation'])){
    
    if(isset($_POST['anneedebut']) && !empty($_POST['anneedebut']) &&
       isset($_POST['anneefin']) && !empty($_POST['anneefin']) &&
       isset($_POST['anneecourante']) && !empty($_POST['anneecourante']) &&
       isset($_POST['intitule']) && !empty($_POST['intitule']) &&
       isset($_POST['ecole']) && !empty($_POST['ecole']) &&
       isset($_POST['ville']) && !empty($_POST['ville']) &&
       isset($_POST['cp']) && !empty($_POST['cp']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['lien']) && !empty($_POST['lien'])){   
        
        $reload = true;
        
        $requete = $bdd -> prepare("INSERT INTO formation(
                                                formation_annee_debut,
                                                formation_annee_fin,
                                                formation_annee_courante,
                                                formation_intitule,
                                                formation_ecole,
                                                formation_ville,
                                                formation_ville_code_postal,
                                                formation_description,
                                                formation_lien
                                            )
                                            VALUES
                                            (
                                                :anneedebut,
                                                :anneefin,
                                                :anneecourante,
                                                :intitule,
                                                :ecole,
                                                :ville,
                                                :cp,
                                                :description,
                                                :lien
                                            )"
                                  );
        
        
        $param = array(
            'anneedebut' => securify($_POST['anneedebut']),
            'anneefin' => securify($_POST['anneefin']),
            'anneecourante' => securify($_POST['anneecourante']),
            'intitule' => securify($_POST['intitule']),
            'ecole' => securify($_POST['ecole']),
            'ville' => securify($_POST['ville']),
            'cp' => securify($_POST['cp']),
            'description' => securify($_POST['description']),
            'lien' => securify($_POST['lien'])
        );
        
        
        $requete->execute($param);   
        
    } else {
        $_SESSION["erreur"] = "Champs invalides !";
    }
    
} else {
    // formulaire pas envoyé
}



if(!empty($_SESSION["erreur"]))
{
	
	$token_error = true;
	
}
























require $_dir["views"]."back/Administration.php";