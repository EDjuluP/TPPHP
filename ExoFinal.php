<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercice final - PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>



<form action="" method="GET">

<h1> Formulaire de connexion </h1>
<!-- Données entrées par l'utilisateur -->

    <b>Identifiant </b><input type="text" id="login">


    <b>Mot de passe </b> <input type="password" id="password">

<!-- Bouton de connexion -->

    <input type="submit" id="submit" value="Se connecter">

    <br>
    
<!-- Conditions d'accès -->

    <?php 

    $login = Julien;
    $password = 1234;

    if(isset($_GET["login"]) && isset($_GET["password"])){
        echo "Bienvenue !";
    }elseif(isset($_GET["login"])){
        echo "Veuillez à nouveau saisir votre identifiant et votre mot de passe";
    }

    ?>

</form>

</body>

</html>
