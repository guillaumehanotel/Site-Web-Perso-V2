<?php
require('config.php');
require('function.php');


if(isset($_SESSION["connect"])){
    require('views/back/Header.php');
} else {
    require('views/front/Header.php');
}



$bdd = new PDO("mysql:host=localhost;dbname=".$config["base"].";charset=utf8", 
$config["loginBDD"], $config["mdpBDD"]);
