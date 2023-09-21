<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
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
        $klantId = $_POST["klantid"];
        $klantnaam = $_POST["klantnaam"];
        $klantEmail = $_POST["klantemail"];
        $klantAdres = $_POST["klantadres"];
        $klantPostcode = $_POST["klantpostcode"];
        $klantWoonplaats = $_POST["klantwoonplaats"];

        // updaten klantgegevens
        require "klant.php";
        $db = new Database("localhost","root","","project6");

        $klant = new Klant($klantnaam, $klantEmail, $klantAdres, $klantPostcode, $klantWoonplaats);
        // Update de gegevens in tabel klanten waar hetzelfde klant id is
        $klant->updateKlant($klantId);
        $klant->afdrukkenKlant();

        echo "<br>";
        echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu </a></button>";
        ?>
    </main>
</body>
</html>