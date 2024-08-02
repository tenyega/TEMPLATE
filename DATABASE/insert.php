<?php
require_once './config.php';

// connection to the base de donnée
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        //DSN Data Source Name;
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT . ";";


        // two different way of working with the sql 
        // 1- with PDO(class) adg of communication with different DB. Gives acces to different methods to his class 
        //2- mysql is only for the mysql DB
        $connexion = new PDO($dsn, DB_USER, DB_PASSWORD);

        // definir le mode d'erreur dans la class PDO sur exception
        # comment PDO doit gérer les erreurs. 
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //donées a inserer (recuprer dun formulaire )

        $username = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO " . DB_TABLE . " (username,email,pwd) VALUES (:pseudo, :mail, :password);";
        // preparation de la requete (statement); to protect from sql injection. 
        $stmt = $connexion->prepare($sql);

        //laison des param nommé a leur values réelle.
        $stmt->bindParam(':pseudo', $username, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $pwd, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "DATA ADDED SUCCESSFULLY ";
        } else {
            // errorInfo() to get the exact information about the error received 
            // number 2 here is that the error info gives a table and the information exact  is at index 2
            echo "error adding data to the database " . $stmt->errorInfo()[2];
        }

        // for the insert  we dont need to close cursor () coz we dont recupere result here 

        //and we need to close the connection
        $connexion = null;
    } catch (Exception $e) {
        echo "Une erreur est survenue dans le fischer :  " . $e->getFile() . "<br>";
        echo "a la ligne  :  " . $e->getLine() . "<br>";
        echo "and the error message is  :  " . $e->getMessage() . "<br>";
    }
}
