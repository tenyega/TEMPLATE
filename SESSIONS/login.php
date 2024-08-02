<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM_POST</title>
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

        input[type="text"],
        input[type="password"] {
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
    // giving the life time for the session. 
    ini_set('session.gc_max_lifetime', 3600);
    // before starting with the session handling we always need to have session_start() function.
    // cant even write a sorti (echo " " ) or any redirection before this session start() otherwise we will have a lot of problem with this session.
    // but we can use ini_set() as its not a sorti ni une redirection. 
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Store the form values in session variables
        $_SESSION['user'] = htmlspecialchars($_POST['user']);
        $_SESSION['pwd'] = htmlspecialchars($_POST['pwd']);
        $_SESSION['ip'] = htmlspecialchars($_SERVER['REMOTE_ADDR']);

        header("Location:welcome.php");
        exit();
    }

    // On affiche le formulaire
    ?>

    <form action="" method="POST">
        <div>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['logged_out']);
                session_unset();
                session_destroy();
            }
            ?>

        </div>
        <p>
            <label for="user">User:</label>
            <input type="text" id="user" name="user">
        </p>
        <p>
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd">
        </p>

        <input type="hidden" name="hidden" value="<?php echo date('d/m/Y H:i:s'); ?>">
        <input type="submit" name="submit" value="Envoyer">
        Already have an account ?: <a href="login.php">Login </a>: <a href="register.php">signup</a>
    </form>


</body>