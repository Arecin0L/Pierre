<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./login.php" method="POST">
        <input type="text" placeholder="Pseudo" name="pseudo" required pattern="^[A-Za-zÀ-ÿ0-9'-]+$">
        <input type="password" placeholder="Mot de passe" name="mdp" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>