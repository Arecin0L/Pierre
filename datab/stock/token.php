<?php
function token($length){
    $alph = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
    $token = substr(str_shuffle(str_repeat($alph, $length)),0, $length);
    return $token; //On crypte le mot de passe avec hash et un token 

}

function logged_only(){
    if (session_status() == PHP_SESSION_NONE){
        session_start();
        header('location:../login.php');
    }

    if(!isset($_SESSION['auth'])){
        $_SESSION['flash']['danger'] = "Vous n'avez pas les droits suffisants pour accèder à cette page";
        header('location:../login.php');
        exit();
    }
}
?>