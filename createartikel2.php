<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Create Artikel stap 2</title>
</head>
    <body>
        <main>
            <h1 class="white-h1">Create Artikel stap 2</h1>
            <p>
                Het toevoegen van een artikel in de tabel artikelen.
            </p>
            <?php
            require "artikel.php";

            $artid = NULL;
            $artOmschrijving = $_POST ["artomschrijvingvak"];
            $artInkoop = $_POST ["artinkoopvak"];
            $artVerkoop = $_POST ["artverkoopvak"];
            $artVoorraad = $_POST ["artvoorraadvak"];
            $artMinVoorraad = $_POST ["artminvoorraadvak"];
            $artMaxVoorraad = $_POST ["artmaxvoorraadvak"];
            $artLocatie = $_POST ["artlocatievak"];
            $levId = $_POST["levidvak"];

            // Klant gegevens invoeren
            $klant = new Artikel($artOmschrijving, $artInkoop, $artVerkoop, $artVoorraad, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId);
            
            // Klant in de database zetten
            $klant->createArtikel();
            echo "<p>Het artikel is toegevoegd</p><br>";
            echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu</a></button>"
            ?>
        </main>
    </body>
</html>