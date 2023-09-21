<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Klant stap 3</title>
</head>
<body>
    <main>
    <h1 class="white-h1">Update Klant stap 3</h1>
    <p>
        Gegevens wijzigen van de klant in de tabel klanten.
    </p>
    <?php
    // klantgegevens uit het formulier halen
    $verkOrdId = $_POST["verkordid"];   
    $klantId = $_POST["klantid"];
    $artId = $_POST["artid"];
    $verkOrdDatum = $_POST["verkorddatum"];
    $verkOrdBestAantal = $_POST["verkbestaant"];
    $verkOrdStatus = $_POST["verkordstatus"];

    // updaten klantgegevens
    require "verkooporders.php";
    $db = new Database("localhost","root","","project6");

    $verk = new Verkooporders($klantId, $artId, $verkOrdDatum, $verkOrdBestAantal, $verkOrdStatus, $verkOrdId);

    $verk->updateVerkooporders($verkOrdId);
    echo "<br>";
    echo "<button class='backtohome'><a href='welkombas.php'> terug naar het menu </a></button>";
    ?>
    </main> 
</body>
</html>