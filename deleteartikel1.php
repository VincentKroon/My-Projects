<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete artikel 1</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete artikel stap 1</h1>
    <p>
        Dit formulier zoekt een artikel op uit de tabel klanten van om die te kunnen verwijderen.
    </p>
    <form class="form-container" action="deleteartikel2.php" method="post">
        Welk artid wilt u verwijderen?
        <input type="number" name="artidvak"><br>
        <input type="submit">
    </form>
</main>
</body>
</html>