<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete klant 1</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete klant stap 1</h1>
    <p>
        Dit formulier zoekt een klant op uit de tabel klanten van om die te kunnen verwijderen.
    </p>
    <form class="form-container" action="deleteklant2.php" method="post">
        Welk klantid wilt u verwijderen?
        <input type="number" name="klantidvak"><br>
        <input type="submit">
    </form>
</main>
</body>
</html>