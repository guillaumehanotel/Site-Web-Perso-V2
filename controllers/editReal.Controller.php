<?php

if (!empty($_POST)){ // si le formulaire a été envoyé

    if(isset($_POST['titre']) && !empty($_POST['titre']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['lien']) && !empty($_POST['lien'])){  



        $id = securify((int)$_GET["id"]);
        


        $real=$bdd->query("select * from realisation where realisation_id='$id'");
        $real = $real->fetch();

        

        if(!empty($real)){

            
            $requete = $bdd->prepare("UPDATE realisation SET
            realisation_link        = :lien,
            realisation_titre       = :titre,
            realisation_desc       = :description
            WHERE realisation_id = :id");
            
            $param = array(
                'id'          => $id,
                'lien' => securify($_POST['lien']),
                'titre' => securify($_POST['titre']),
                'description' => securify($_POST['description'])
            );
            
            //var_dump($param);

            
            $requete->execute($param);
               
            

            header('Location: '.BASE_URL.'/admin/');

        }   else {
            
            $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
            header('Location: ' . BASE_URL . '/admin/');
            
        }
    }


} elseif (!empty($_GET['id'])) { //sinon


    $id = securify((int)$_GET["id"]);
    
    $reponse = $bdd->query("SELECT * FROM realisation WHERE realisation_id='$id'");
    $real = $reponse->fetch();

    // si l'experience existe
    if (!empty($real)) {
        require $_dir["views"] . "back/editReal.php";
    } else {
        $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
        header('Location: ' . BASE_URL . '/admin/');
    }


} else {

}

