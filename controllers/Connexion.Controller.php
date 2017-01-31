<?php
require $_dir["views"]."back/Connexion.php";

//si le formulaire a été envoyé
if(isset($_POST['ok'])) {

// si le login et le mdp existent et ne sont pas vides
    if (isset($_POST['login']) && !empty($_POST['login'])
        && isset($_POST['password']) && !empty($_POST['password'])) {



        // on créé les variables $login et $mdp (que l'on crypte)
        $login = $_POST['login'];
        $mdp = md5($_POST['password']);



        // création de la requête qui sélectionne le login et le mdp dans la base de données
        $sql = "SELECT login, password FROM users WHERE login='$login' and password='$mdp'";



        //envoi de la requete
        $resultatRequete = $bdd->query($sql);


        // si le nombre de ligne de la requête est supérieur à 0, ça veut dire que l'utilisateur existe
        if($resultatRequete->rowCount() > 0) {

            // on démarre la session
            session_start();

            // on récupère dans la variable user (qui sera un tableau associatif), les noms de colonnes et les valeurs de l'utilisateur
            $user = $resultatRequete->fetchALL(PDO::FETCH_ASSOC);


            // pour chaque colonne de la table user, on crée une variable de session
            foreach ($user[0] as $key => $value){
                $_SESSION[$key] = $value;
            }

            // on déclare une variable booléenne de seesion "connect" qui vaut vrai si on est connecté
            $_SESSION["connect"]=true;

            // redirection vers l'accueil
            header("Location:../");


        // si on ne trouve pas de correspondance dans la BDD, un popup javascript nous fera revenir en arrière, et on déclarea une variable de session "erreur"
        }else {
            echo "<script type=\"text/javascript\">";
            echo "alert('Aucun utilisateur enregistré à ce login');";
            echo "window.history.back();";
            echo "</script>";
            $_SESSION["erreur"] = "Je me suis trompé";

        }


    // si le login et le mdp sont vides ou inexistants, -> popup javascript
    } else {

        echo "<script type=\"text/javascript\">";
        echo "alert('Erreur de pseudo ou de mot de passe');";
        echo "window.history.back();";
        echo "</script>";

    }

}