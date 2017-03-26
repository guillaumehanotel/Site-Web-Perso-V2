<?php

if (!empty($_POST)){ // si le formulaire a été envoyé

    if(isset($_POST['anneedebut']) && !empty($_POST['anneedebut']) &&
       isset($_POST['anneefin']) && !empty($_POST['anneefin']) &&
       isset($_POST['anneecourante']) && !empty($_POST['anneecourante']) &&
       isset($_POST['intitule']) && !empty($_POST['intitule']) &&
       isset($_POST['ecole']) && !empty($_POST['ecole']) &&
       isset($_POST['ville']) && !empty($_POST['ville']) &&
       isset($_POST['cp']) && !empty($_POST['cp']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['lien']) && !empty($_POST['lien'])){    



        $id = securify((int)$_GET["id"]);
        


        $forma=$bdd->query("select * from formation where formation_id='$id'");
        $forma = $forma->fetch();

        

        if(!empty($forma)){

            
            $requete = $bdd->prepare("UPDATE formation SET
            formation_annee_debut                 = :anneedebut,
            formation_annee_fin                   = :anneefin,
            formation_annee_courante              = :anneecourante,
            formation_intitule          = :intitule,
            formation_ecole             = :ecole, 
            formation_ville             = :ville,
            formation_ville_code_postal           = :cp,
            formation_description       = :description, 
            formation_lien              = :lien
            WHERE formation_id = :id");
            
            $param = array(
                'id'          => $id,
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
    
    $reponse = $bdd->query("SELECT * FROM formation WHERE formation_id='$id'");
    $forma = $reponse->fetch();

    // si l'experience existe
    if (!empty($forma)) {
        require $_dir["views"] . "back/editForma.php";
    } else {
        $_SESSION["erreur"] = "l'id fourni n'est pas un utilisateur";
        header('Location: ' . BASE_URL . '/admin/');
    }


} else {

}

