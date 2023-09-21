<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Create Klant stap 2</title>
</head>
    <body>
        <main>
            <h1 class="white-h1">Create Klant stap 2</h1>
            <p>
                Het toevoegen van een klant in de tabel klanten.
            </p>
            <?php
            require "klant.php";

            $klantid = NULL;
            $klantnaam = $_POST ["klantnaamvak"];
            $klantemail = $_POST ["klantemailvak"];
            $klantadres = $_POST ["klantadresvak"];
            $klantpostcode = $_POST ["klantpostcodevak"];
            $klantwoonplaats = $_POST ["klantwoonplaatsvak"];

            // Klant gegevens invoeren
            $klant = new Klant($klantnaam, $klantemail, $klantadres, $klantpostcode, $klantwoonplaats);
            
            // Klant in de database zetten
            $klant->createKlant();
            echo "<p>De klant is toegevoegd <br></p>";
            echo "<button class='backtohome'><a href='welkombas.php'> terug naar het menu</a></button>"
            ?>
        </main>
    </body>
</html>