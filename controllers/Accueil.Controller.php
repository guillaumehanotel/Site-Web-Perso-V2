<?php

if (isset($_SESSION["connect"])){
    require $_dir["views"]."back/Accueil.php";
} else {
    require $_dir["views"]."front/Accueil.php";
}


//echo "<a href=/test/supprUser?id=".$user['id'].">supprimer</a>";