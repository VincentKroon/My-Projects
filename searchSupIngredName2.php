<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Search Supplier Ingrediënt Naam stap 2</title>
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
            <h1>Zoek Ingrediënt Levering stap 2</h1>
            <?php
            // ingred name uit het formulier halen
            $ingredName = $_POST["ingrednamevak"];

            // supplier gegevens uit  de tabel halen 
            require_once "Suppliers.php";  

            $supplier = new Supplier();
            $supplier->searchSupplierIngredName($ingredName);
            $supplier->afdrukkenSupplier();

            echo "<button class='backtohome'><a href='index.php'> Terug naar het menu </a></button>";

            ?>
        </div>
        
    </main>
</body>
</html>