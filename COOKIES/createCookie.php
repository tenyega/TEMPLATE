<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    // Récupération des données
    $nom = $_POST['nom'];
    $valeur = $_POST['valeur'];
    $duree = $_POST['duree'];
    $myCookie = setcookie($nom, $valeur, time() + $duree, "/", "", true, true);

    if ($myCookie) {
        echo "nom : " . $nom . "<br>";
        echo "valeur : " . $valeur . "<br>";
        echo "duree " . $duree . "<br>";
        echo " a ete sauvegardé ";
    } else {
        echo "problem";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREER_COOKIE</title>
    <link rel="stylesheet" href="./css/cookie.css">
</head>

<body>
    <h1>Créer un cookie en PHP</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="nom">Nom du cookie :</label>
        <input type="text" name="nom" id="nom" required>

        <label for="valeur">Valeur du cookie :</label>
        <input type="text" name="valeur" id="valeur" required>

        <label for="duree">Durée de vie du cookie (en secondes) :</label>
        <input type="number" name="duree" id="duree" required>

        <input type="submit" name="submit" value="Créer le cookie">
    </form>
</body>

</html>
</body>