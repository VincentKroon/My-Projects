<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete artikel 3</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete artikel stap 3</h1>
    <p>
        Op artid gegevens zoeken uit de tabel artikelen zodat ze verwijderd kunnen worden.
    </p>
    <?php 
    // gegevens uit het formulier halen
    $artId = (int)$_POST["artidvak"];
    $verwijderen = $_POST["verwijdervak"];

    // klant gegevens verwijderen
    if ($verwijderen)
    {
        require "artikel.php";
        $artikel = new Artikel();
        $artikel->deleteArtikel($artId);
        echo "<p>De gegevens zijn verwijderd. <br /></p>";
    }
    else
    {
        echo "<p>De gegevens zijn niet verwijderd. <br /></p>";
    }

    echo "<br>";
    echo "<button class='backtohome'><a href='welkombas.php'>Terug</a></button>";
    ?>
</main>
</body>
</html>