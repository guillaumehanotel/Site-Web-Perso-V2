<?php
$_SESSION["erreur"] = "vous vous êtes bien déconnecté";
session_unset();
session_destroy();

header("Location:".BASE_URL."Site-Web-Perso-V2/");
