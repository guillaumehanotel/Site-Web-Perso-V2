<?php
$_SESSION["erreur"] = "vous vous êtes bien déconnecté";

/*
if(isset($_SESSION["connect"])){
    session_unset();
    session_destroy();
}
*/

unset($_SESSION["connect"]);


header("Location:".BASE_URL."/");
