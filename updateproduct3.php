<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Product stap 3</title>
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
            <h1>Update Product stap 3</h1>
            <p>
                Gegevens wijzigen van de Product in de tabel Products.
            </p>
            <?php
            // klantgegevens uit het formulier halen
            $prodID = $_POST["prodidvak"];
            $prodName = $_POST["productnamevak"];
            $ingredID = $_POST["ingredientidvak"];
            $prodCategory = $_POST["productcategoryvak"];
            $prodGlassType = $_POST["productglasstypevak"];
            $prodInstruction = $_POST["productinstrctionvak"];

            require "products.php";

            $prod = new Products($prodName, $ingredID, $prodCategory, $prodGlassType, $prodInstruction, $prodID);
            // Update de gegevens in tabel products waar hetzelfde product id is
            $prod->updateProduct($prodID);
            $prod->afdrukkenProduct();

            echo "<br>";
            echo "<button><a href='index.php'> Terug naar het menu </a></button>";
            ?>
        </div>
        
    </main>
</body>
</html>