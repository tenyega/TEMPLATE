<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {


    // Récupération des données
    $nomCookie = $_POST['nom_cookie'];

    //verifier si le cookie exists.
    if (isset($_COOKIE[$nomCookie])) {
        setcookie($nomCookie, '', time() - 3600, '/');
        unset($_COOKIE[$nomCookie]);
        echo "<p> Cookie is deleted successfully";
    } else {
        echo "<p>le cookie " . $nomCookie . " doesnt exist<p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPPRIMER_COOKIE</title>
    <link rel="stylesheet" href="./css/cookie.css">
</head>

<body>

    <h1>Supprimer un cookie en PHP</h1>
    <form method="post">
        <label for="nom">Nom du cookie :</label>
        <input type="text" name="nom_cookie" id="nom" value="">
        <input type="submit" name="submit" value="Supprimer le cookie">
    </form>
</body>

</html>