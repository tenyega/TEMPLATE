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


    <form action="insert.php" method="POST">

        <p>
            <label for="user">User:</label>
            <input type="text" id="user" name="user">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </p>
        <p>
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd">
        </p>

        <input type="hidden" name="hidden" value="<?php echo date('d/m/Y H:i:s'); ?>">
        <input type="submit" name="submit" value="Envoyer">


    </form>


</body>