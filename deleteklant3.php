<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete klant 3</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete klant stap 3</h1>
    <p>
        Op klantid gegevens zoeken uit de tabel klanten zodat ze verwijderd kunnen worden.
    </p>
    <?php 
    // gegevens uit het formulier halen
    $klantId = (int)$_POST["klantidvak"];
    $verwijderen = $_POST["verwijdervak"];

    // klant gegevens verwijderen
    if ($verwijderen === "1")
    {
        require "klant.php";
        $klant = new Klant();
        $klant->deleteKlant($klantId);
        echo "<p>De gegevens zijn verwijderd. <br /></p>";
    }
    else
    {
        echo "<p>De gegevens zijn niet verwijderd. <br /></p>";
    }

    echo "<br>";
    echo "<button class='backtohome' ><a href='welkombas.php'>Terug</a></button>";
    ?>
</main>
</body>
</html>