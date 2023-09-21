<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Klant stap 1</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Update Klant stap 1</h1>
        <p>
            Dit formulier wordt gebruikt om de gegevens te wijzigen in de tabel klant.
        </p>
        <form class="form-container" action="updateklant2.php" method="post">
            Welk klantid wilt u wijzigen?
            <input type="number" name="klantIdvak"> <br>
            <input type="submit">
        </form>
    </main>
</body>
</html>