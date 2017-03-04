<?php


function DansBase($login,$bdd) {
    $sql = "SELECT login FROM users WHERE login='$login'";
    $resultat = $bdd->query($sql);
    $info = $resultat->fetchAll(PDO::FETCH_ASSOC);
    if($info!=null) {
        return true;
    } else {
        return false;
    }
}

function GetUser($login,$bdd) {
    $sql = "SELECT * FROM users WHERE login='$login'";
    $resultat = $bdd->query($sql);
    $user = $resultat->fetch();
    if(!empty($user)) {
        return $user;
    } else {
        return null;
    }
}


function alertMsg($string){
    echo "<script type=\"text/javascript\">";
    echo "alert('$string');";
    echo "window.history.back();";
    echo "</script>";
}


/*
    addslashes : Ajoute des antislashs dans une chaîne
    htmlspecialchars : Convertit les caractères spéciaux en entités HTML    
*/

function securify($str){
    $invalid_characters = array("$", "%", "#", "<", ">", "|");
    $string = str_replace($invalid_characters, "", $str);
    return addslashes(htmlspecialchars($string));
}
