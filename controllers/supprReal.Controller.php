<?php
$id=securify((int)$_GET['id']);
$reponse = $bdd->query("DELETE FROM realisation WHERE realisation_id='$id'");

header("Location:".BASE_URL."/admin/");