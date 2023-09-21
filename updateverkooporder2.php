<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update verkooporder stap 2</title>
</head>
<body>
    <main>
    <h1 class="white-h1">Update Verkooporder stap 2</h1>
    <p>
        Dit formulier wordt gebruikt om gegevens te wijzigen
        van de verkooporder in de tabel klanten.
    </p>
    <?php
    // verkooporders uit het formulier halen ---------------------
    $verkOrdId = (int)$_POST["verkooporderidvak"];

    // verkooporder gegevens uit  de tabel halen -------------------
    require_once "verkooporders.php";  

    $verk = new Verkooporders();
    $verk->searchVerkooporderid($verkOrdId);

    ?>

    <form class="form-container" action="updateverkooporder3.php" method="post">
        Verkooporder Id: <input type="hidden" name="verkordid" value="<?php echo $verk->getverkOrdId()?>"><br>
        Klant Id: <input type="number" name="klantid" value="<?php echo $verk->getklantId()?>"><br>
        Artikel Id: <input type="number" name="artid" value="<?php echo $verk->getartId()?>"><br>
        Verkooporder Datum: <input type="text" name="verkorddatum" value="<?php echo $verk->getverkOrdDatum()?>"><br>
        Verkooporder Bestellingaantal: <input type="number" name="verkbestaant" value="<?php echo $verk->getverkOrdBestAantal()?>"><br>
        Verkooporder Status: <input type="number" name="verkordstatus" value="<?php echo $verk->getverkOrdStatus()?>"><br>
        <input type="submit">
    </form>
    </main>
</body>
</html>