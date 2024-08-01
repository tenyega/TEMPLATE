<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    // Récupération des données
    $nomCookie = $_POST['nom_cookie'];

    //verifier si le cookie exists.
    if (isset($_COOKIE[$nomCookie])) {
        //recuperer ca valuer 
        $_valeurCookie = $_COOKIE[$nomCookie];

        //Afficher le cookie
        echo "oui the cookie " . $nomCookie . " exist";
    } else {
        echo "le cookie " . $nomCookie . " doesnt exist";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIRE_COOKIE</title>
    <link rel="stylesheet" href="./css/cookie.css">
</head>

<body>
    <h1>Lire un cookie en PHP</h1>
    <form method="post">
        <label for="nom">Nom du cookie :</label>
        <input type="text" name="nom_cookie" id="nom" value="">
        <input type="submit" name="submit" value="Lire le cookie">
    </form>
</body>

</html>
</body>