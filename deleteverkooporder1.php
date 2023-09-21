<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete verkooporders 1</title>
</head>
<body>
<main>
    <h1 class="white-h1">Delete verkooporder stap 1</h1>
    <p>
        Dit formulier zoekt een verkooporder op uit de tabel verkooporders om die te kunnen verwijderen.
    </p>
    <form class="form-container" action="deleteverkooporder2.php" method="post">
        Welke verkooporder wilt u verwijderen?
        <input type="number" name="verkooporderidvak"><br>
        <input type="submit">
    </form>
</main>
</body>
</html>