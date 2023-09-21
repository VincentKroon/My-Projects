<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Verkooporder stap 2</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Search Verkooporder Id stap 2</h1>
        <p>
            Dit formulier wordt gebruikt om gegevens te bekijken
            van de klantid in de tabel verkooporders.
        </p>
        <?php
        // artid uit het formulier halen ---------------------
        $klantId = (int)$_POST["verkooporderklantidvak"];

        // artikel gegevens uit  de tabel halen -------------------
        require_once "verkooporders.php";  

        $verkooporder = new Verkooporders();
        $verkooporder->searchKlantId($klantId);
        $verkooporder->afdrukkenVerkooporders();

        echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu </a></button>";

        ?>
    </main>
</body>
</html>