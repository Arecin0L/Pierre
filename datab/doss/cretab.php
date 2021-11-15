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
    $req = "CREATE TABLE shop(
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        desc TEXT NOT NULL,
        price DECIMAL 0.00 NOT NULL,
        quantity INT NOT NULL)";
    $pdo->exec($req);

        $req = $pdo->prepare("INSERT INTO shop (Id, name, desc, price, quantity) VALUES (:name, :desc, :price, quantity, NOW())");
        $req->bindParam(':name', $n);
        $req->bindParam(':desc', $d);
        $req->bindParam(':price', $p);
        $req->bindParam(':quantity', $q);

        $na = ''
}

?>