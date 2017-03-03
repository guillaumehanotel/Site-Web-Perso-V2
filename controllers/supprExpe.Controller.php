<?php
//$id=securify((int)$_GET['id']);
$id = $_GET['id'];
$reponse = $bdd->query("DELETE FROM experiences WHERE experiences_id='$id'");

header("Location:".BASE_URL."Site-Web-Perso-V2/admin/");