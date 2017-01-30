
<main id="accueil">


<p>ACCUEIL</p>


    <?php


        if(isset($_SESSION["connect"])){

            echo "hello ".$_SESSION["login"];

            echo "<a href='".BASE_URL."Site-Web-Perso/deconnexion/'>Deconnexion</a>";

        }

    ?>

</main>