<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete klant 2</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete klant stap 2</h1>
    <p>
        Op klantid gegevens zoeken uit de tabel klanten zodat ze verwijderd kunnen worden.
    </p>
    <?php
    // klantid uit het formulier halen
    $klantid = $_POST["klantidvak"];

    // klant gegevens uit de tabel halen
    require_once "klant.php";
    
    $klant = new Klant();
    $klant->searchKlantId($klantid);
    $klant->afdrukkenKlant();

    echo "<form class='form-container' action='deleteklant3.php' method='post'>";
    // klantid mag niet meer gewijzigd worden
    echo "<input type='hidden' name='klantidvak' value='$klantid>";
    // Waarde 0 doorgegeven als er niet gecheckt wordt
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder deze klant. <br><br>";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</main>
</body>
</html>