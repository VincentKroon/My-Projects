<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Products stap 1</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="indexProducten.php">Home</a></li>
            <li><a href="createproduct1.php">CREATE</a></li>
            <li><a href="readproduct.php">READ</a></li>
            <li><a href="updateproduct1.php">UPDATE</a></li>
            <li><a href="deleteproduct1.php">DELETE</a></li>
            <li><a href="searchproductname1.php">SEARCH PROD ID</a></li>
        </ul>   
    </header>

    <main>
        <div class="box">
            <h1>Update Products stap 1</h1>
            <p>
                Dit formulier wordt gebruikt om de gegevens te wijzigen in de tabel products.
            </p>
            <form action="updateproduct2.php" method="post">
                Welk Products ID wilt u wijzigen?
                <input type="number" name="prodidvak"> <br>
                <input type="submit">
            </form>
        </div>
    </main>
</body>
</html>