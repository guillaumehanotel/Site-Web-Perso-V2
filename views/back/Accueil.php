<!-- Page accueil modifiable par l'administrateur -->

<?php


if(isset($_SESSION["connect"])){

    echo "hello ".$_SESSION["login"];
    echo "<br>";
    echo "<a href='".BASE_URL."Site-Web-Perso/deconnexion/'>Deconnexion</a>";

}

?>

</header>




<main id="accueil">


<h2>ACCUEIL</h2>


</main>