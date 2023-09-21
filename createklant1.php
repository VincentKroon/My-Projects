<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Vincent Kroon -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="style.css">
        <title>Create Klant stap 1</title>
    </head>
    <body>
        <main>
            <h1 class="white-h1">Create Klant stap 1</h1>
            <p>
                Maak een klant aan. Vul de gegevens van de klant in.
            </p>
            <form class="form-container" action="createklant2.php" method="post">
                Naam:<input type="text" name="klantnaamvak"><br>
                Email:<input type="text" name="klantemailvak"><br>
                Adres:<input type="text" name="klantadresvak"><br>
                Postcode:<input type="text" name="klantpostcodevak"><br>
                Woonplaats:<input type="text" name="klantwoonplaatsvak"><br>
                <input type="submit">
            </form>
        </main>
    </body>
</html>