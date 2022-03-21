<?php
require './stock/token.php';

if(!empty($_POST["pseudo"]) && !empty($_POST["email"])){ //Quand l'utilisateur rentre son pseudo, on nettoie les données, on enlève les espaces et les slash et on retourne la donnée.
function cleandata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$usname = cleandata($_POST['pseudo']); //On définit des variables car on va réutiliser plusieurs fois ces fonctions
$mail = cleandata($_POST['email']);

}else{
    //header("location:../insc.php");
    echo "données";
}
if(!empty($_POST['pseudo']) && !empty($_POST['email'])){
    try{
        require './bdd.php';
        $check = $pdo->query("SELECT pseudo, email FROM logi"); //Quand les pseudo et mail sont remplis par l'utilisateur, on selectionne les colonnes pseudo et email dans notre table 'logi' et on les récupère avec fetch.
        $data = $check->fetch(PDO::FETCH_OBJ);      
    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        if($_POST['pseudo'] == $data->username || $_POST['email'] == $data->email){ //Si le pseudo que l'utilisateur est égale à un pseudo dans la base alors on met un message d'erreur. Pareil pour l'email (Ca voudrait dire que quelqu'un a déjà cet email ou ce pseudo)
            header('location:../inscription.php?=error=Password');
        }
    }
}else{
    echo 'Remplir les champs';
}

if(!empty($_POST['mdp']) && !empty($_POST['mdpconf']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdp']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdpconf']) && $_POST['mdp'] === $_POST['mdpconf'])
//preg match pour sécuriser notre mot de passe avec le même pattern que dans 'inscription.php'
{
$pass = $_POST["mdp"];
$hashed = password_hash($pass, PASSWORD_BCRYPT); //On hash le mdp avec le fichier 'token.php' (On le cache)
}
else{
   // header('location:../inscription.php');
   echo "mdp";
}
if(!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare("INSERT INTO logi(username, password, email, conftoken) VALUES(:username, :password, :email, :conftoken)");
        $tok = token(60);
        $req->bindParam(':username', $usname);
        $req->bindParam(':password', $hashed);
        $req->bindParam(':email', $mail);
        $req->bindParam(':conftoken', $tok);
        $req->execute(); // Toutes les données qu'il vient de rentrer, on les insert dans notre base avec 'INSERT TO'

    }catch(PDOException $e){
        echo "Erreur : " .$e;

    }finally{
        $usid = $pdo->lastInsertId();
        $pdo = null;
        echo "Oups";
        header("location:./stock/confirm.php?id=" .$usid . "&token=" . $tok); 
        
      //  header("location:./confirm.php");

    }
}else{
       // header("location:../insc.php");
       echo "Nope";
    }


?>