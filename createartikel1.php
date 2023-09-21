<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Vincent Kroon -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="style.css">
        <title>Create Artikel stap 1</title>
    </head>
    <body>
        <main>
            <h1 class="white-h1">Create Artikel stap 1</h1>
            <!-- <p>
                Maak een artikel aan. Vul de gegevens van de artikel in.
            </p> -->
            <form class="form-container" action="createartikel2.php" method="post">
                Omschrijving:<input type="text" name="artomschrijvingvak"><br>
                Inkoop:<input type="number" name="artinkoopvak"><br>
                Verkoop:<input type="number" name="artverkoopvak"><br>
                Voorraad:<input type="number" name="artvoorraadvak"><br>
                Minimale Voorraad:<input type="number" name="artminvoorraadvak"><br>
                Maximale Voorraad:<input type="number" name="artmaxvoorraadvak"><br>
                Locatie:<input type="number" name="artlocatievak"><br>
                Leveranciers ID: <input type="number" name="levidvak"><br>
                <input type="submit">
            </form>
        </main>
    </body>
</html>