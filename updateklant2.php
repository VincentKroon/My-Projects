<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Klant stap 2</title>
</head>
<body>
    <main>
    <h1 class="white-h1">Update Klant stap 2</h1>
    <p>
        Dit formulier wordt gebruikt om gegevens te wijzigen
        van de klant in de tabel klanten.
    </p>
    <?php
    // klantid uit het formulier halen
    $klantId = (int)$_POST["klantIdvak"];

    // klantgegevens uit  de tabel halen
    require_once "klant.php";  

    $klant = new Klant();
    $klant->searchKlantId($klantId);

    ?>

    <!-- Formulier voor nieuwe gegevens -->
    <form class="form-container" action="updateklant3.php" method="post">
        Klantid: <?php echo $klantId ?><br>
        <input type="hidden" name="klantid" value="<?php echo $klantId ?>">
        Klantnaam: <input type="text" name="klantnaam" value="<?php echo $klant->getKlantNaam(); ?>"><br>
        Klantemail: <input type="text" name="klantemail" value="<?php echo $klant->getKlantEmail(); ?>"><br>
        Klantadres: <input type="text" name="klantadres" value="<?php echo $klant->getKlantAdres(); ?>"><br>
        Klantpostcode: <input type="text" name="klantpostcode" value="<?php echo $klant->getKlantPostcode(); ?>"><br>
        Klantwoonplaats: <input type="text" name="klantwoonplaats" value="<?php echo $klant->getKlantWoonplaats(); ?>"><br>
        <input type="submit">
    </form>
    </main>
</body>
</html>