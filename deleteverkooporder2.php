<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete verkooporder 2</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete verkooporder stap 2</h1>
    <p>
        Op verkooporder Id gegevens zoeken uit de tabel verkooporders zodat ze verwijderd kunnen worden.
    </p>
    <?php
    // klantid uit het formulier halen
    $verkOrdId = $_POST["verkooporderidvak"];

    // klant gegevens uit de tabel halen
    require_once "verkooporders.php";
    
    $verk = new verkooporders();
    $verk->searchVerkooporderid($verkOrdId);
    $verk->afdrukkenVerkooporders();

    echo "<form class='form-container' action='deleteverkooporder3.php' method='post'>";
    // klantid mag niet meer gewijzigd worden
    echo "<input type='hidden' name='verkooporderidvak' value='$verkOrdId>";
    // Waarde 0 doorgegeven als er niet gecheckt wordt
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder deze verkooporder. <br />";
    echo  "<br>";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</main>
</body>
</html>