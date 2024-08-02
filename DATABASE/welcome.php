<?php
session_start();
require_once './config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['email']);
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT . ";";
        $connexion = new PDO($dsn, DB_USER, DB_PASSWORD);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //param anonyme
        $sql = "SELECT * FROM " . DB_TABLE . ' WHERE email= ?';

        $stmt = $connexion->prepare($sql);
        $stmt->bindParam("s", $email);
        $stmt->execute();

        $result = $connexion->query($sql);
        if ($result->rowCount() > 0) {
            $result->fetch(PDO::FETCH_OBJ);
            var_dump($result);
            //fetch is used to check the result data
        } else {
            echo "database is empty";
        }
        $result->closeCursor();
        $connexion = null;
    } catch (Exception $e) {
        echo "Une erreur est survenue dans le fischer :  " . $e->getFile() . "<br>";
        echo "a la ligne  :  " . $e->getLine() . "<br>";
        echo "and the error message is  :  " . $e->getMessage() . "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!isset($_SESSION['ip']) && $_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) ?>
    <p>
        <a href="logout.php">LOG OUT </a>
    </p>
    <p>
        EMAIL:= <?php echo  $_SESSION['user'] ?>
    </p>
    <p>
        PASSWORD := <?= $_SESSION['pwd'] ?>
    </p>
</body>

</html>