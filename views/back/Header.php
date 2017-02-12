<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Guillaume HANOTEL</title>
    
    
    <!-------- FICHIER CSS --------->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASE_URL."Site-Web-Perso/bootstrap/css/bootstrap.min.css " ?>" rel="stylesheet" type="text/css" />
    
    <!-- fullPage CSS -->
    <link href="<?= BASE_URL."Site-Web-Perso/js/fullPage.js-master/jquery.fullPage.css "; ?>" rel="stylesheet" type="text/css" />
    
    <!-- mon CSS -->
    <link href="<?= BASE_URL."Site-Web-Perso/css/style.css "; ?>" rel="stylesheet" type="text/css" />
    
    <!-------- FICHIER JS --------->
    
    <!-- Jquery -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso/bootstrap/js/jquery-3.1.1.min.js" ?>"></script>
    
    <!-- Jquery UI -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <!-- Bootstrap JS -->
    
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso/bootstrap/js/bootstrap.js" ?>"></script>
    
    <!-- fullPage JS -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso/js/fullPage.js-master/jquery.fullPage.js" ?>"></script>
    
    <!-- mon JS -->
    <script type="application/javascript" src="<?= BASE_URL."Site-Web-Perso/js/javascript.js" ?>"></script>
    
    
</head>
<body>

<header>
<?php

    print_r($_SESSION['connect']);
    //echo "hello ".$_SESSION["login"];
    echo "<br>";
    echo "<a href='".BASE_URL."Site-Web-Perso/deconnexion/'>Deconnexion</a>";
?>





