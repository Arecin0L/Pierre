<?php

if(!empty($_POST['pseudo'])){
    function cleandata($data){ //Quand l'utilisateur rentre son pseudo, on nettoie les données, on enlève les espaces et les slash et on retourne la donnée.
        $data =  trim($data);
        $data =  stripslashes($data);
        $data =  htmlspecialchars($data);
        return $data;
    }
    $pseudo = cleandata($_POST['pseudo']);
}else{
    echo 'pas de data'; //Sinon message d'erreur car l'input n'est pas rempli
}

if (!empty($_POST['mdpasse']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}#' , $_POST['mdpasse']) && !empty($pseudo)){ //Le preg match sert à sécuriser le mot de passe, on reprend le pattern qu'on a utilisé dans le mot de passe (login.php)
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM logi WHERE tokenconfirmed IS NOT NULL AND username = :pseudale'); //On ouvre la base et on recup le pseudo dedans.
        $req->bindParam(':pseudale', $pseudo); //on le lie avec le pseudo que l'utilisateur vient de rentrer
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo 'Erreur : ' . $e; //Sinon message d'erreur
    }finally{
        if(!empty($userdata) && password_verify($_POST['mdpasse'], $userdata->password)){ //Vérification du mot de passe, si c'est le même on ouvre la session
            session_start();
            $_SESSION['auth'] = $userdata;
            header('location:../index.php'); //redirection vers l'index

        }else{
            echo 'Mauvais identifiant';
        }
    }
}else{
        echo 'Mauvais Mot de passe...';
    }
    

?>

