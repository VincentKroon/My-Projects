<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Klant Naam stap 1</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Search Klant Naam stap 2</h1>
        <p>
            Dit formulier wordt gebruikt om gegevens te bekijken
            van de klant in de tabel klanten.
        </p>
        <?php
        // klantnaam uit het formulier halen ---------------------
        $klantNaam= $_POST["klantnaamvak"];

        // klantgegevens uit  de tabel halen -------------------
        require_once "klant.php";  

        $klant = new Klant();
        $klant->searchKlantNaam($klantNaam);
        $klant->afdrukkenKlant();

        echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu </a></button>";

        ?>
    </main>
</body>
</html>