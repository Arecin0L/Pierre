<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Hubballi&family=PT+Sans:ital@1&display=swap" rel="stylesheet">
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
            <p class="co">Je veux me connecter !</p>
        </a>
    </form>
    </section>

    <style>
        body{
            background-color: grey;
        }
        legend{
            color: black;
            font-size: 1.2em;
            font-family: 'PT Sans', sans-serif;
            text-shadow: 2px 2px 2px white;
        }
        .design{
            background: cadetblue;
            border: 2px solid black;
            border-radius: 25px;
            width: 40vw;
            text-align: center;
            margin-left: 30vw;
            margin-top: 30vh;
            box-shadow: 0 5px 10px 2px black;
        }
        .form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .form input{
            border: none;
            background: white;
            border-radius: 15px;
            margin: 2vh;
            padding: 7px;
        }
        .envoie{
            background: rgba(255, 255, 255, 0.600);
        }
        a{
            text-decoration: none;
            color: white;
            text-shadow: black 2px 2px 2px;
        }
        .co{
            font-size: 1.5em;
        }
        @media screen and (max-width: 700px) {
            .design{
                width: 70vw;
                margin-left: 13vw;
                margin-top: 20vh;
            }
        }
    </style>

</body>
</html>