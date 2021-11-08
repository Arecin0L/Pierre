<?php

if(isset($_POST) AND !empty($_POST['login']) && !empty($_POST['pass'])) {
  extract($_POST);
  $login = $_POST['login'];
  $pwd = $_POST['pass'];
  require "./bdd.php";
  $sql = "SELECT * FROM loginpage WHERE login='".$login."'" AND "SELECT * FROM loginpage WHERE pwd='".$pwd."'";
  //$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  $req = $pdo->query('SELECT loog AS t, pwd AS c FROM loginpage');
  $data = $req;
}

if (!empty($_POST)){
  $errors = array();

  if (empty($_POST['title'])){
      $errors['pseudo'] = "vous n'avez pas renseigné de titre";
  }
  if (empty($_POST['loog'])){
      $errors['pwd'] = "vous n'avez pas écrit";
  }
  if (empty($errors)){
      require './bdd.php';
      $req = $pdo->prepare('INSERT INTO test SET loog = ?, pwd = ?');
      $req->execute([$_POST['login'],$_POST['pwd']]);
      $errors['message'] = 'message enregistré';
  }
}
include "./header.php"
?>