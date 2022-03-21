<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <section class="design">
    <legend>Inscription</legend>
    <form class="form" action="./inscript.php" method="POST">

        <input type="text" placeholder="Pseudo" name="pseudo" id="pseud" required pattern="^[A-Za-zÀ-ÿ0-9'-]+$" max="20">

        <input type="password" placeholder="Mot de passe" name="mdp" id="motdpe" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!?'$@/\=*.-]).{4,20}$">

        <input type="password" placeholder="Confirmer mdp" name="mdpconf" id="motdpec" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!?'$@/\=*.-]).{4,20}$">

        <input type="email" placeholder="Email" name="email" id="email" required pattern="^[A-Za-z'_.-]+@{1}+[A-Za-z0-9]+\.[A-Za-z]{2,}$">

        <input class="envoie" type="submit" value="Envoyer">
        <a href="./login.php">
            <p>Je veux me connecter !</p>
        </a>
    </form>
    </section>

    <style>
        .design{
            background: cadetblue;
            border: 2px solid black;
            border-radius: 25px;
            width: 15vw;
            text-align: center;
            margin-left: 40vw;
            margin-top: 35vh;
        }
        .form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        input{
            border: none;
            background: white;
            border-radius: 25px;
            margin: 2vh;
            padding: 5px;
        }
        .envoie{
            background: rgba(255, 255, 255, 0.600);
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>

</body>
</html>