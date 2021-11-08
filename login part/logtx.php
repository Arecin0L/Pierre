<?php

if(isset($_POST) AND !empty($_POST['login']) && !empty($_POST['pass'])) {
    extract($_POST);
    $login = $_POST['login'];
    $pwd = $_POST['pass'];
    require "../stock/bdd.php";
    $sql = "SELECT * FROM loginpage WHERE login='".$login."'" AND "SELECT * FROM loginpage WHERE pwd='".$pwd."'";
    //$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
    $req = $pdo->query('SELECT logi AS t, pwd AS c FROM loginpage');
    $data = $req;
  }
  
  if (!empty($_POST)){
    $errors = array();
  
    if (empty($_POST['title'])){
        $errors['pseudo'] = "vous n'avez pas renseigné de titre";
    }
    if (empty($_POST['logi'])){
        $errors['pwd'] = "vous n'avez pas écrit";
    }
    if (empty($errors)){
        require './my_wbs/stock/bdd.php';
        $req = $pdo->prepare('INSERT INTO test SET loog = ?, pwd = ?');
        $req->execute([$_POST['login'],$_POST['pwd']]);
        $errors['message'] = 'message enregistré';
        header("Location: index.php");
    }
  }

?>

<?php
  include './index.php';
?>