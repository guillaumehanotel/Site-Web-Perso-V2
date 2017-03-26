<?php
$id=securify((int)$_GET['id']);
$reponse = $bdd->query("DELETE FROM formation WHERE formation_id='$id'");

header("Location:".BASE_URL."/admin/");