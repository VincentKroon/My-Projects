<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Create Product stap 2</title>
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
                <h1>Create Product stap 2</h1>
                <p>
                    Het toevoegen van een product in de tabel products.
                </p>
                <?php
                require "products.php";

                $prodID = NULL;
                $prodName = $_POST ["productnamevak"];
                $ingredID = $_POST ["ingredientidvak"];
                $prodCategory = $_POST ["productcategoryvak"];
                $prodGlassType = $_POST ["productglasstypevak"];
                $prodInstruction = $_POST ["productinstrctionvak"];

                // Klant gegevens invoeren
                $prod = new Products($prodName, $ingredID, $prodCategory, $prodGlassType, $prodInstruction);
                
                // Klant in de database zetten
                $prod->createProduct();
                echo "<p>Het product is toegevoegd <br></p>";
                // echo "<button><a href='index.php'> terug naar het menu</a></button>"
                ?>
            </div>
            
        </main>
    </body>
</html>