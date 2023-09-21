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
    <h1 class="white-h1">Delete artikel stap 2</h1>
    <p>
        Op artid gegevens zoeken uit de tabel artikelen zodat ze verwijderd kunnen worden.
    </p>
    <?php
    // klantid uit het formulier halen
    $artid = $_POST["artidvak"];

    // klant gegevens uit de tabel halen
    require_once "artikel.php";
    
    $artikel = new Artikel();
    $artikel->searchArtikelId($artid);
    $artikel->afdrukkenArtikel();

    echo "<form class='form-container' action='deleteartikel3.php' method='post'>";
    // klantid mag niet meer gewijzigd worden
    echo "<input type='hidden' name='artidvak' value='$artid>";
    // Waarde 0 doorgegeven als er niet gecheckt wordt
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder dit artikel. <br />";
    echo  "<br>";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</main>
</body>
</html>