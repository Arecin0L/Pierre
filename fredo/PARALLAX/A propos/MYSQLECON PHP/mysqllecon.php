<!-- connexion bdd avec pdo

Voir commentaires sur cahier bleu 1 SESSION 2 en date du 02/11/2021-->
<?php
$serv = 'localhost';
$user = 'root';
$pass = '';
$bdd = 'newdb';

try{
    $pdo = new PDO("mysql:host =$serv;dbname=bddtest ", $user, $pass);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connexion réussie';
}
catch(PDOException $e){
    echo"Erreur :" .$e->getMessage();
}
$pdo= null;
?>


<!--connexion bdd mysqli en procédural -->
<?php 
$connect= mysqli_connect($serv, $user, $pass);
if(!$connect){
    die('Erreur:' .mysqli_connect_error());
}
echo'connexion réussie';
mysqli_close($connect);
?>


 <!--créer une base de données PDO-->
 <?php
 try{
     $cdb = new PDO("mysql:host=$serv" , $user, $pass);
     $cdb ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $req = "CREATE DATABASE newdb";
     $cdb->exec($req);

     echo'base de données créee!';
 }

 catch(PDOException $e){

    echo "Erreur:" .$e->getMessage();

 }
 ?>


<!--Créer une table de données-->
<?php

try{
    $ct = new PDO("mysql:host=$serv, dbname=$dbname", $user, $pass);
    $ct->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE clients(
        Id Int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Nom VARCHAR(30) NOT NULL,
        Prenom VARCHAR(30) NOT NULL,
        DateInscription TIMESTAMP)";

        $ct->exec($sql);

        echo 'table créee!';

}

catch(PDOException $e){
    echo "Erreur:".$e->getMessage();
}
?>

<!--Insertion des données, principe, insertion avec tableau-->

<?php

  try{
      $ins = new PDO("mysql:host=$serv;dbname=$bdd",$user,$pass);
      $ins->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //connexion à la bdd//
      $data= ['id'=>0,
              'nom'=>'Lepretre',
              'Prenom'=>'Fréd',];
      $req = $ins->prepare("INSERT INTO utilisateurs VALUES(:id, :nom, :prenom)");
      $req->execute($data);
}
catch(PDOException $e){
    echo"Erreur;".$e->getMessage();
}
?>

   


 


    
 


 