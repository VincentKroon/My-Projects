<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Read Products</title>
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
            <h1>Read Products</h1>
            <p>
                Lijst van Producten.
            </p>

            <?php
            require "products.php";

            echo "<button><a href='index.php'> Terug naar het menu </a></button>";

            $prod = new Products();
            $prod->readProduct();
            
            ?>
        </div>
    </main>
</body>
</html>