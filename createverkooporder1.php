<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>createverkooporder1</title>
</head>
<body>
        <main class="main">
            <div class="toptext">
            <h1 class="white-h1">Create verkooporder stap 1</h1>
            <p>Maak een verkooporder aan. Vul de gegevens van de verkooporder in.</p>
            </div>
            <form class="form-container" action="createverkooporder2.php" method="post">
                KlantID:<input type="number"                       name="verkooporderklantidvak"><br>
                ArtikelID:<input type="number"                     name="verkooporderartidvak"><br>
                VerkooporderDatum:<input type="date"               name="verkooporderdatumvak"><br>
                Verkooporder Bestellingaantal:<input type="number" name="verkooporderbestellingaantalvak"><br>
                VerkooporderStatus:<input type="number"            name="verkooporderstatusvak"><br>
                <input type="submit">
            </form>
        </main>
</body>
</html>