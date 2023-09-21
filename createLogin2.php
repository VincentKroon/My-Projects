<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aanmelden</title>
</head>
<body>

    <?php
    require "loginclass.php";
    $loginName = $_POST["loginName"];
    $loginPassword = $_POST["loginPassword"];
    $loginPassword = password_hash($loginPassword, NULL);

    $login = new Login($loginName, $loginPassword);
    $login->createAccount($loginName, $loginPassword);

    ?>

    <ul>
        <li><a href="main.php">Home</a></li>
        <li><a href="ingredientenIndex.php">Ingredienten</a></li>
        <li><a href="readIngredienten.php">Supplier</a></li>
    </ul>
    
</body>
</html>