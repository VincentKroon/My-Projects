<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Read Verkooporders</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Read Verkooporders</h1>
        <p>
            Lijst van Verkooporders.
        </p>

        <?php
        require "verkooporders.php";

        echo "<button class='backtohome'><a href='welkombas.php'> terug naar het menu</a></button>";
        $verk = new Verkooporders();
        $verk->readVerkooporders();
        

        ?>
    </main>
</body>
</html>