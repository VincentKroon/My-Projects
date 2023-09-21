<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Artikel stap 2</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Update Artikel stap 2</h1>
        <p>
            Dit formulier wordt gebruikt om gegevens te wijzigen
            van de artikel in de tabel artikelen.
        </p>
        <?php
        // art id uit het formulier halen
        $artId = (int)$_POST["artidvak"];

        require_once "artikel.php";  

        $artikel = new Artikel();
        // artikel gegevens uit  de tabel halen
        $artikel->searchArtikelId($artId);

        ?>
        
        <!-- Formulier voor nieuwe gegevens -->
        <form class="form-container"action="updateartikel3.php" method="post">
            Artikel Id: <?php echo $artId ?><br>
            <input type="hidden" name="artidvak" value="<?php echo $artId ?>">
            Omschrijving: <input type="text" name="artomschrijvingvak" value="<?php echo $artikel->getArtOmschrijving()?>"><br>
            Inkoop: <input type="number" name="artinkoopvak" value="<?php echo $artikel->getArtInkoop()?>"><br>
            Verkoop: <input type="number" name="artverkoopvak" value="<?php echo $artikel->getArtVerkoop()?>"><br>
            Huidige Voorraad: <input type="number" name="artvoorraadvak" value="<?php echo $artikel->getArtVoorraad()?>"><br>
            Minimale Voorraad: <input type="number" name="artminvoorraadvak" value="<?php echo $artikel->getArtMinVoorraad()?>"><br>
            Maximale Voorraad: <input type="number" name="artmaxvoorraadvak" value="<?php echo $artikel->getArtMaxVoorraad()?>"><br>
            Locatie: <input type="number" name="artlocatievak" value="<?php echo $artikel->getArtLocatie()?>"><br>
            Leverancier id: <input type="number" name="levidvak" value="<?php echo $artikel->getLevId()?>"><br>
            <input type="submit">
        </form>
    </main>
</body>
</html>