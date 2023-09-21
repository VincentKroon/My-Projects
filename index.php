<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inloggen</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="box" style="">
            <h1>Login</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Naam: <input type="text" name="loginName"><br>
                Wachtwoord: <input type="password" name="loginPassword"><br>
                <input type="submit">
            </form>
            <p>
                Nog geen account? Dan kan je <a href="createLogin.php">Aanmelden</a>.
            </p>

            <?php
            require "loginclass.php";

            if(empty($_POST["loginName"]) && empty($_POST["loginPassword"])){
                echo "Vul allebei de vakken in.";

            } elseif(!empty($_POST["loginName"]) || !empty($_POST["loginPassword"])){
                $loginName = $_POST["loginName"];
                $loginPassword = $_POST["loginPassword"];

                $check = new Login($loginName, $loginPassword);
                $check->logInCheck($loginName);
            }

        ?>

        </div>


    </main>
    <footer>

    </footer>
</body>
</html>