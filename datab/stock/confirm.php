<?php 

$userid = $_GET['id'];
$tokenconf = $_GET['token'];

echo $userid . '<br>' . $tokenconf;

if(!empty($tokenconf) && !empty($userid)){
    try{
    require '../bdd.php';
    $pdo->prepare("UPDATE logi SET conftoken = 0, tokenconfirmed = NOW() WHERE id = $userid")->execute();

}catch(PDOException $e){
    echo 'Erreur : ' . $e;
}finally{
    $pdo = null;
    header('location:../login.php');
  
}
}else{
    header('location:../inscription.php');
   
}

?>