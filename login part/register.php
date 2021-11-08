<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../fa/css/all.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./body.css">
    <title>Futur WebSite</title>
</head>

<body>
 
<section>
    <div class="animation-wrapper">
      <div class="particle particle-1"></div>
      <div class="particle particle-2"></div>
      <div class="particle particle-3"></div>
      <div class="particle particle-4"></div>
    </div>
</section>
    
<section class="zindex">
    <img src="" alt="">
    <form class="labin" action="">
        <img src="../logpic/programmer.png" class="piclog" alt="">
        <div class="inpdec">
            <i class="far fa-user"></i>
            <input type="text" size="20px" name="user" class="decou" placeholder="Username" required>
        </div>

        <div class="inpdec">
            <i class="far fa-envelope"></i>
            <input type="email" size="20px" name="mail" class="decou" placeholder="E-mail" required>
        </div>

        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" class="decop" placeholder="Password" required>
        </div>
        
        <div class="inpdec">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" class="decop" placeholder="Confirm Password" required>
        </div>
        
        <input type="submit" class="logbtn" name="login" value="Login">
        
        <p class="log_reg">Have an account ? <a href="./login.php">Login here !</a></p>
        </form>
</section>

   

<?php 
include './logtx.php';
?>

</body>
<script src="../../../stockjs/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="../../../stockjs/jquery-3.6.0.min.js"></script>

</html>