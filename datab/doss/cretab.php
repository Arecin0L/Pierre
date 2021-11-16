<?php

$serv = 'localhost';
$user = 'root';
$pass = '';


try{
    $pdo = new PDO("mysql:host=$serv", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = "CREATE DATABASE truc";
    $pdo->exec($req);

    $creatable = "use truc";
    $pdo->exec($creatable);

    $reqct = "CREATE TABLE shopp(
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name TEXT NOT NULL,
        desc TEXT NOT NULL,
        price DECIMAL 0.00 NOT NULL,
        quantity INT NOT NULL)";
    $pdo->exec($req);

        $reqct = $pdo->prepare("INSERT INTO shopp (Id, name, desc, price, quantity) VALUES (:name, :desc, :price, quantity, NOW())");
        $reqct->bindParam(':name', $n);
        $reqct->bindParam(':desc', $d);
        $reqct->bindParam(':price', $p);
        $reqct->bindParam(':quantity', $q);

        $n = 'Fourchaine';
        $d = 'Pas besoin de mots, cette image parle d\'elle même, ce chef d\'oeuvre sera idéal pour tout amateur de gastronomie acrobatique.
        Un seul mot me vient à l\'esprit BONNE CHANCE aux amateurs de petits pois ou tout autres fans de riz!! une exclusivitée de l\'entreprise truC.';

        $p = '15.99';
        $q = '2';
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
$pdo = null;
?>