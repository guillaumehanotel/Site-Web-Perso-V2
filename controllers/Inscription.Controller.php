<?php
/*

if(!empty($_POST)){

    // on vérifie si les champs ont été rempli et ne sont pas vides
    if(isset($_POST["password"]) && !empty($_POST["password"]) &&
        isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){



            $pseudo = $_POST["pseudo"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $requete = "INSERT INTO user (login, password) VALUES ('$pseudo','$password')";
            $bdd->query($requete);

        echo $requete;
            //header('Location: ' . BASE_URL . '/login/');






    } else {
        alertMsg("Veuillez compléter tous les champs");
    }

} else {
//formulaire pas envoyé
}



require $_dir["views"]."Inscription.php";
*/