<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Artikel stap 2</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Search Artikel Id stap 2</h1>
        <p>
            Dit formulier wordt gebruikt om gegevens te bekijken
            van de artikel in de tabel artikelen.
        </p>
        <?php
        // artid uit het formulier halen ---------------------
        $artId = (int)$_POST["artIdvak"];

        // artikel gegevens uit  de tabel halen -------------------
        require_once "artikel.php";  

        $klant = new Artikel();
        $klant->searchArtikelId($artId);
        $klant->afdrukkenArtikel();

        echo "<button class='backtohome'><a href='welkombas.php'> Terug naar het menu </a></button>";

        ?>  
    </main>
</body>
</html>