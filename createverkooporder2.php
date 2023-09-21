<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>createverkooporder2</title>
</head>
    <body>
        <main>
            <h1 class="white-h1">Create verkooporder stap 2</h1>
            <p>
                Het toevoegen van een verkooporder in de tabel verkooprders.
            </p>
            <?php
            require "verkooporders.php";

            $verkOrdId = 0;
            $klantId  = $_POST ["verkooporderklantidvak"];
            $artId = $_POST ["verkooporderartidvak"];
            $verkOrdDatum = $_POST ["verkooporderdatumvak"];
            $verkOrdBestAantal = $_POST ["verkooporderbestellingaantalvak"];
            $verkOrdStatus = $_POST ["verkooporderstatusvak"];
        

            // Klant gegevens invoeren
            $verk = new Verkooporders($klantId, $artId, $verkOrdDatum, $verkOrdBestAantal, $verkOrdStatus);
            
            // Klant in de database zetten
            $verk->createverkooporder();
            echo "<p>De verkooporder is toegevoegd <br></p>";
            echo "<button class='backtohome'><a href='welkombas.php'> terug naar het menu</a></button>"
            ?>
        </main>
    </body>
</html>