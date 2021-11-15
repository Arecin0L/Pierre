<!--INSERTION AVEC bindValue
toujours connexion bdd préalable

VOIR CAHIER BLEU SESSION 2 DU 03/11/2021
-->
<?php

try{
    $ins = new PDO("mysql:host=$serv;dbname=$bdd",$user,$pass);
    $ins->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $ins->prepare("INSERT INTO clients'(nom, prenom)VALUES(:nom, :prenom)");
    $req->bindValue(':nom', $nom);
    $req->bindValue(':prenom', $prenom);

    $nom = 'Lepretre';
    $prenom = 'Fred';
    $req->execute();
}

    catch(PDOException $e){
        echo"Erreur;".$e->getMessage();
    }
    ?>

    <!-- version avec bindParam-->
    <?php
    try{
        $inp = new PDO("mysql:host=$serv;dbname=$bdd",$user,$pass);
        $inp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $req = $inp->prepare("INSERT INTO clients'(nom, prenom)VALUES(:nom, :prenom)");
        $req->bindParam('nom', $nom);
        $req->bindParam('prenom', $prenom);

        $nom = 'Lepretre';
        $prenom = 'Fred';
        $req->execute();

        $nom = 'zorg';
        $prenom = 'kalil';

        $req->execute();
    }


        catch (PDOException $e){

            echo'Erreur;'.$e->getMessage();
    }
    ?>
     
     <!-- INSERTION DES DONNEES AVEC LE SELECTEUR "?"-->
     <?php
     try{
     $pdo = new PDO("mysql:host =$serv;dbname=bdd", $user, $pass);
     $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $req->bindParam(1, $nom);
     $req->bindParam(2, $prenom);
     $req->execute();
     }

     catch(PDOException $e){
         echo'Erreur'; $e->getMessage();
     }

     $pdo = null;
     ?>


    <!--UPDATE DES DONNEES(mise à jour des données)-->
    <?php
    $nom=$_POST['faminame'];
    $prenom=$_POST['prenom'];

    $pdo = new PDO("mysql:host =$serv;dbname=bdd", $user, $pass);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $pdo->prepare("UPDATE clients SETnom = ?,prenom = ? WHERE id = ?");

    $req->bindParam(1, $nom);
    $req->bindParam(2, $prenom);
    $req->bindParam("id",$_POST['idselect']);

    $req->execute();
    

    /*catch(PDOException $e){
        echo'Erreur'; $e->getMessage();
    }*/

    $pdo = null;
    ?>







