<?php
session_start(); //La session commence
session_unset(); //Détruit les variables de la session
session_destroy(); //Détruit la session
header('location:../index.php');

?>