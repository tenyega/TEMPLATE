<?php
require_once './config.php';

// connection to the base de donnée

try {
    //DSN Data Source Name;
    $dsn = "mysql:host=" . DB_HOST . ";dbname= " . DB_NAME . ";port=" . DB_PORT . ";";



    // two different way of working with the sql 
    // 1- with PDO(class) adg of communication with different DB. Gives acces to different methods to his class 
    //2- mysql is only for the mysql DB
    $connexion = new PDO($dsn, DB_USER, DB_PASSWORD);

    // definir le mode d'erreur dans la class PDO sur exception
    # comment PDO doit gérer les erreurs. 
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //creation de la requete sql: recuperer toutes les données contenue de la table users;
    $sql = "SELECT * FROM " . DB_TABLE;

    //recuperation les resultat.

    $result = $connexion->query($sql);

    // do we have the result and this result is an object also (called PDOStatemets)
    //so result has all the method which PDO propose
    if ($result->rowCount() > 0) {
        var_dump($result);
    } else {
        echo "database is empty";
    }

    //  now that we have done all the manip with our data we need to clear it 
    $result->closeCursor();

    //and we need to close the connection
    $connexion = null;
} catch (Exception $e) {
    echo "Une erreur est survenue dans le fischer :  " . $e->getFile() . "<br>";
    echo "a la ligne  :  " . $e->getLine() . "<br>";
    echo "and the error message is  :  " . $e->getMessage() . "<br>";
}
