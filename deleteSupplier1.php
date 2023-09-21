<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete Supplier 1</title>
</head>
<body>
<header>
    <ul>
        <li><a href="mainSupplier.php">Home</a></li>
        <li><a href="createSupplier1.php">CREATE</a></li>
        <li><a href="readSuppliers.php">READ</a></li>
        <li><a href="updateSupplier1.php">UPDATE</a></li>
        <li><a href="deleteSupplier1.php">DELETE</a></li>
        <li><a href="searchSupID1.php">SEARCH SUP ID</a></li>
        <li><a href="searchSupAdress1.php">SEARCH SUP ADRESS</a></li>
        <li><a href="searchSupIngredName1.php">SEARCH INGRED NAME</a></li>
    </ul>
</header>

<main>
    <div class="box">
        <h1>Delete Supplier stap 1</h1>
        <form class="form-container" action="deleteSupplier2.php" method="post">
            Welk Leverancier ID wilt u verwijderen?
            <input type="number" name="supidvak"><br>
            <input type="submit">
        </form>
    </div>

</main>
</body>
</html>