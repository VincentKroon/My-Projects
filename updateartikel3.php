<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Artikel stap 3</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Update Artikel stap 3</h1>
        <p>
            Gegevens wijzigen van de artikel in de tabel artikelen.
        </p>
        <?php
        // klantgegevens uit het formulier halen
        $artId = $_POST["artidvak"];
        $artOmschrijving = $_POST["artomschrijvingvak"];
        $artInkoop = $_POST["artinkoopvak"];
        $artVerkoop = $_POST["artverkoopvak"];
        $artVoorraad = $_POST["artvoorraadvak"];
        $artMinVoorraad = $_POST["artminvoorraadvak"];
        $artMaxVoorraad = $_POST["artmaxvoorraadvak"];
        $artLocatie = $_POST["artlocatievak"];
        $levId = $_POST["levidvak"];

        require "artikel.php";

        $artikel = new Artikel($artOmschrijving, $artInkoop, $artVerkoop, $artVoorraad, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId);
        // Update de gegevens in tabel artikelen waar hetzelfde artikel id is
        $artikel->updateArtikel($artId);
        $artikel->afdrukkenArtikel();

        echo "<br>";
        echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu </a></button>";
        ?>
    </main>
</body>
</html>