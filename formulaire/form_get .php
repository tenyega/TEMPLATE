<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM_GET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p.message {
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>

<body>

    <?php

    function cleanData($data)
    {
        //Retranscription de caractères HTML pour éviter les attaques XSS
        $data = htmlspecialchars($data);
        //Retirer les espaces
        $data = trim($data);
        //Echapper les antislashs
        $data = stripslashes($data);

        return $data;
    };


    // Vérifier que le formulaire :
    // - a été soumis isset($_POST['submit'])
    // - utilise la méthode d'envoi POST
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit'])) {

        // Récupération des données
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];

        // Nettoyage des données
        $prenom = cleanData($prenom);
        $email = cleanData($email);

        // Vérifier les données
        if (empty($prenom)) {
            echo "Prénom vide";
        }
        if (empty($email)) {
            echo "Email vide";
        }

        // Valider les données
        if (!preg_match("/^[a-zA-Zéèî]{2,30}$/", $prenom)) {
            echo "Le prénom n'est pas validé.";
        };

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email non valide.";
        }

        echo "Prénom : " . $prenom . "<br>";
        echo "Email : " . $email;
    } else {
        // On affiche le formulaire
    ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
            <p>
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </p>
            <input type="submit" name="submit" value="Envoyer">
        </form>
    <?php
    }
    ?>

</body>