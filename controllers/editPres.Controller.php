<?php

if (!empty($_POST)){ // si le formulaire a été envoyé

    if(isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['apropos']) && !empty($_POST['apropos'])){  



        $id = securify((int)$_GET["id"]);
        


        $pres=$bdd->query("select * from presentation where presentation_id='$id'");
        $pres = $pres->fetch();

        

        if(!empty($pres)){

            
            $requete = $bdd->prepare("UPDATE presentation SET 
            presentation_description        = :description,
            presentation_apropos       = :apropos
            WHERE presentation_id = :id");
            
            $param = array(
                'id'          => $id,
                'apropos' => $_POST['apropos'],
                'description' => $_POST['description']
            );

            
            $requete->execute($param);
               
            

            header('Location: '.BASE_URL.'/admin/');

        }   else {
            
            $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
            header('Location: ' . BASE_URL . '/admin/');
            
        }
    }


} elseif (!empty($_GET['id'])) { //sinon


    $id = securify((int)$_GET["id"]);
    
    $reponse = $bdd->query("SELECT * FROM presentation WHERE presentation_id='$id'");
    $pres = $reponse->fetch();

    // si l'experience existe
    if (!empty($pres)) {
        require $_dir["views"] . "back/editPres.php";
    } else {
        $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
        header('Location: ' . BASE_URL . '/admin/');
    }


} else {

}

