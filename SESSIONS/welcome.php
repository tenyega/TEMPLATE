<?php
session_start();
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