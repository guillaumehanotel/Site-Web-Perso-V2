<?php


//si le formulaire a été envoyé
if(isset($_POST['login'])) {

// si le login et le mdp existent et ne sont pas vides
    if (isset($_POST['login']) && !empty($_POST['login'])
        && isset($_POST['password']) && !empty($_POST['password'])) {


        $login = $_POST['login'];


        if(DansBase($login,$bdd) == true){
            $user = GetUser($login, $bdd);
            
            if(password_verify($_POST["password"], $user["password"])){
                
                if(!isset($_SESSION)){
                    session_start();
                }
                
                $_SESSION["connect"] = true;
                $_SESSION["user"] = $user["login"];
                header('Location:' . BASE_URL . 'Site-Web-Perso-V2/admin/');
                
                
                
            } else {
                $_SESSION["erreur"] = "Mot de passe incorrect !";
            }
          
        } else {
		  $_SESSION["erreur"] = "Login incorrect !";
        }
          
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




require $_dir["views"]."back/Connexion.php";