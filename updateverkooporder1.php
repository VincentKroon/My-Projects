<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Verkooporder stap 1</title>
</head>
<body>
    <main>
        <h1 class="white-h1">Update verkooporder stap 1</h1>
        <p>Dit formulier wordt gebruikt om de gegevens te wijzigen in de tabel verkooporders.</p>
        <form class="form-container" action="updateverkooporder2.php" method="post">
            Welke verkooporder wilt u wijzigen?
            <input type="number" name="verkooporderidvak"> <br>
            <input type="submit">
        </form>
    </main>
</body>
</html>