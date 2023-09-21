<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Read Klant</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Read Klant</h1>
        <p>
            Lijst van Klanten.
        </p>

        <?php
        require "Klant.php";

        echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu </a></button>";

        $klant = new Klant();
        $klant->readKlant();
        
        ?>
    </main>
</body>
</html>