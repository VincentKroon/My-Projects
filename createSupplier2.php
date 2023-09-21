<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create Supplier stap 2</title>
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
            <h1>Creëer Leverancier stap 2</h1>
            <?php
            require "Suppliers.php";

            $supID = NULL;
            $supMaxDelivery = $_POST ["supmaxdeliveryvak"];
            $supMinDelivery = $_POST ["supmindeliveryvak"];
            $ingredID = $_POST ["ingredidvak"];
            $ingredName = $_POST ["ingrednamevak"];
            $ingredDescription = $_POST ["ingreddescriptionvak"];
            $supAdress = $_POST ["supadressvak"];

            // Supplier gegevens invoeren
            $supplier = new Supplier($supMaxDelivery, $supMinDelivery, $ingredID, $ingredName, $ingredDescription, $supAdress);
            
            // Supplier in de database zetten
            $supplier->createSupplier();
            echo "<p>De leverancier is toegevoegd</p><br>";
            ?>
        </div>
        
    </main>
    <footer>

    </footer>
</body>
</html>