<?php

if (!empty($_POST)){ // si le formulaire a été envoyé

    if(isset($_POST['titre']) && !empty($_POST['titre']) &&
       isset($_POST['description']) && !empty($_POST['description']) &&
       isset($_POST['lien']) && !empty($_POST['lien'])){

        $id = securify((int)$_GET["id"]);


        if(isset($_FILES['avatar'])) {



            //chemin du dossier pour le move
            $path = "../" . PROJECT_NAME . "/images/";

            // chemin du dossier pour la BDD
            $dossier = BASE_URL . "/images/";

            // nom du fichier
            $fichier = basename($_FILES['avatar']['name']);

            var_dump($_FILES['avatar']['name']);


            //chemin du fichier pour la BDD
            $picture_path = $dossier . $fichier;


            $taille_maxi = 500000;
            $taille = filesize($_FILES['avatar']['tmp_name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['avatar']['name'], '.');

            if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
            {
                $_SESSION["erreur"] = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
            }
            if ($taille > $taille_maxi) {
                $_SESSION["erreur"] = 'Le fichier est trop gros...';
            }


            if (!isset($_SESSION["erreur"])) //S'il n'y a pas d'erreur, on upload
            {

                //On formate le nom du fichier ici...
                $fichier = strtr($fichier,
                    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

                move_uploaded_file($_FILES['avatar']['tmp_name'], $path . $fichier); //Si la fonction renvoie TRUE, c'est que ça a fonctionné...

            }


            // requete paramétrée si image

            $requete = $bdd->prepare("UPDATE realisation SET
            realisation_link        = :lien,
            realisation_titre       = :titre,
            realisation_desc       = :description,
            realisation_picture_path = :picture
            WHERE realisation_id = :id");

            $param = array(
                'id'          => $id,
                'lien' => securify($_POST['lien']),
                'titre' => securify($_POST['titre']),
                'description' => securify($_POST['description']),
                'picture' => $picture_path
            );



        } else { //si pas de modif d'image

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
        }


        


        $real=$bdd->query("select * from realisation where realisation_id='$id'");
        $real = $real->fetch();


        if(!empty($real)){


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

