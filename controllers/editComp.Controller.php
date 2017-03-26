<?php

if (!empty($_POST)){ // si le formulaire a été envoyé

    if(isset($_POST['intitule']) && !empty($_POST['intitule']) &&
       isset($_POST['categorie']) && !empty($_POST['categorie'])){   



        $id = securify((int)$_GET["id"]);
        


        $comp=$bdd->query("select * from competence where competence_id='$id'");
        $comp = $comp->fetch();

        

        if(!empty($comp)){

            
            $requete = $bdd->prepare("UPDATE competence SET
            competence_intitule        = :intitule,
            competence_categorie       = :categorie
            WHERE competence_id = :id");
            
            $param = array(
                'id'          => $id,
                'intitule' => securify($_POST['intitule']),
                'categorie' => securify($_POST['categorie'])
            );
            
            //var_dump($param);

            
            $requete->execute($param);
               
            

            header('Location: '.BASE_URL.'Site-Web-Perso-V2/admin/');

        }   else {
            
            $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
            header('Location: ' . BASE_URL . 'Site-Web-Perso-V2/admin/');
            
        }
    }


} elseif (!empty($_GET['id'])) { //sinon


    $id = securify((int)$_GET["id"]);
    
    $reponse = $bdd->query("SELECT * FROM competence WHERE competence_id='$id'");
    $comp = $reponse->fetch();

    // si l'experience existe
    if (!empty($comp)) {
        require $_dir["views"] . "back/editComp.php";
    } else {
        $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
        header('Location: ' . BASE_URL . 'Site-Web-Perso-V2/admin/');
    }


} else {

}

