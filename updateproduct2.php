<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Update Product stap 2</title>
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
            <h1 >Update Product stap 2</h1>
            <p>
                Dit formulier wordt gebruikt om gegevens te wijzigen
                van de artikel in de tabel products.
            </p>
            <?php
            // id uit het formulier halen
            $prodID = (int)$_POST["prodidvak"];

            require_once "products.php";  

            $prod = new Products();
            // Product gegevens uit  de tabel halen
            $prod->searchProdID($prodID);

            ?>
            
            <!-- Formulier voor nieuwe gegevens -->
            <form action="updateproduct3.php" method="post">
                Product ID: <?php echo $prod->getprodID() ?><br>
                <input type="hidden" name="prodidvak" value="<?php echo $prod->getprodID() ?>">
                Product name: <input type="text" name="productnamevak" value="<?php echo $prod->getProdName()?>"><br>
                Ingredient ID: <input type="number" name="ingredientidvak" value="<?php echo $prod->getIngredID()?>"><br>
                Product Categorie: <input type="text" name="productcategoryvak" value="<?php echo $prod->getProdCategory()?>"><br>
                Product Glas type: <input type="text" name="productglasstypevak" value="<?php echo $prod->getProdGlassType()?>"><br>
                Product instructie: <input type="text" name="productinstrctionvak" value="<?php echo $prod->getProdInstruction()?>"><br><br>
                <input type="submit">
            </form>
        </div>
        
    </main>
</body>
</html>