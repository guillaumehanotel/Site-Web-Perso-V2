<?php
$id=securify((int)$_GET['id']);
$reponse = $bdd->query("DELETE FROM experience WHERE experience_id='$id'");

header("Location:".BASE_URL."Site-Web-Perso-V2/admin/");