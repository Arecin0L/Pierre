<?php

if(!empty($_POST['pseudo'])){
    function cleandata($data){
        $data =  trim($data);
        $data =  stripslashes($data);
        $data =  htmlspecialchars($data);
        return $data;
    }
    $pseudo = cleandata($_POST['pseudo']);
}else{
    echo 'pas de data';
}

if (!empty($_POST['mdpasse']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}#' , $_POST['mdpasse']) && !empty($pseudo)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM logi WHERE tokenconfirmed IS NOT NULL AND username = :pseudale');
        $req->bindParam(':pseudale', $pseudo);
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo 'Erreur : ' . $e; 
    }finally{
        if(!empty($userdata) && password_verify($_POST['mdpasse'], $userdata->password)){
            session_start();
            $_SESSION['auth'] = $userdata;
            header('location:../index.php');

        }else{
            echo 'Mauvais identifiant';
        }
    }
}else{
        echo 'Mauvais Mot de passe...';
    }
    

?>

