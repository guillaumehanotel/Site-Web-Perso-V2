<?php

if (!empty($_POST)){ // si le formulaire a été envoyé

    if(isset($_POST['date']) && !empty($_POST['date']) &&
       isset($_POST['duree']) && !empty($_POST['duree']) &&
       isset($_POST['ville']) && !empty($_POST['ville']) &&
       isset($_POST['cp']) && !empty($_POST['cp']) &&
       isset($_POST['intitule']) && !empty($_POST['intitule']) &&
       isset($_POST['entreprise']) && !empty($_POST['entreprise']) &&
       isset($_POST['type']) && !empty($_POST['type']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['ordre']) && !empty($_POST['ordre'])){   



        $id = securify((int)$_GET["id"]);
        


        $expe=$bdd->query("select * from experiences where experiences_id='$id'");
        $expe = $expe->fetch();

        

        if(!empty($expe)){

            //var_dump($expe);
            $requete = $bdd->prepare("UPDATE experiences SET 
            experiences_date        = :datea,
            experiences_duree       = :duree, 
            experiences_ville       = :ville, 
            experiences_codepostal  = :codepostal, 
            experiences_intitule    = :intitule, 
            experiences_entreprise  = :entreprise, 
            experiences_type        = :typea,
            experiences_description = :description, 
            experiences_ordre       = :ordre 
            WHERE experiences_id = :id");
            
            $param = array(
                'id'          => $id,
                'datea'        => securify($_POST['date']),
                'duree'       => securify($_POST['duree']),
                'ville'       => securify($_POST['ville']),
                'codepostal'  => securify($_POST['cp']),
                'intitule'    => securify($_POST['intitule']),
                'entreprise'  => securify($_POST['entreprise']),
                'typea'        => securify($_POST['type']),
                'description' => securify($_POST['description']),
                'ordre'       => securify($_POST['ordre'])
            );
             
            $requete->execute($param);
               
            
            
            
            //var_dump($requete);

            header('Location: '.BASE_URL.'Site-Web-Perso-V2/admin/');

        }   else {
            
            $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
            header('Location: ' . BASE_URL . 'Site-Web-Perso-V2/admin/');
            
        }
    }


} elseif (!empty($_GET['id'])) { //sinon


    $id = securify((int)$_GET["id"]);
    
    $reponse = $bdd->query("SELECT * FROM experiences WHERE experiences_id='$id'");
    $expe = $reponse->fetch();

    // si l'experience existe
    if (!empty($expe)) {
        require $_dir["views"] . "back/editExpe.php";
    } else {
        $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
        header('Location: ' . BASE_URL . 'Site-Web-Perso-V2/admin/');
    }


} else {

}

