<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Read Supplier</title>
</head>
<body>
    <main>
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

        <div class="readContainer">
                <h1>Read Supplier</h1>
                <?php
                require "Suppliers.php";


                $supplier = new Supplier();
                $supplier->readSuppliers();
                
                ?>
        </div>
    
    </main>
</body>
</html>