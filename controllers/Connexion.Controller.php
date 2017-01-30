<?php
require $_dir["views"]."Connexion.php";


if(isset($_POST['ok'])) {


    if (isset($_POST['login']) && !empty($_POST['login'])
        && isset($_POST['password']) && !empty($_POST['password'])
    ) {

        $login = $_POST['login'];
        $mdp = md5($_POST['password']);

        $sql = "SELECT login, password FROM users WHERE login='$login' and password='$mdp'";
        //envoi de la requete
        $resultatRequete = $bdd->query($sql);


        if($resultatRequete->rowCount() > 0) {

            session_start();
            $resultat2 = $resultatRequete->fetchALL(PDO::FETCH_ASSOC);
            foreach ($resultat2[0] as $key => $value){
                $_SESSION[$key] = $value;
            }
            $_SESSION["connect"]=true;
            header("Location:../");
        }else {
            echo "<script type=\"text/javascript\">";
            echo "alert('Aucun utilisateur enregistré à ce login');";
            echo "window.history.back();";
            echo "</script>";
            $_SESSION["erreur"] = "Je me suis trompé";

        }



    } else {

        echo "<script type=\"text/javascript\">";
        echo "alert('Erreur de pseudo ou de mot de passe');";
        echo "window.history.back();";
        echo "</script>";

    }

}