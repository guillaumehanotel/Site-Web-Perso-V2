<?php
$id=securify((int)$_GET['id']);
$reponse = $bdd->query("DELETE FROM competence WHERE competence_id='$id'");

header("Location:".BASE_URL."Site-Web-Perso-V2/admin/");