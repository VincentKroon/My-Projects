<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create Supplier stap 1</title>
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
            <h1>Creëer Leverancier stap 1</h1>
            <form action="createSupplier2.php" method="post">
                    Leverancier Maximale Bestelling:<input type="number"   name="supmaxdeliveryvak">      <br>
                    Leverancier Minimale Bestelling:<input type="number"   name="supmindeliveryvak">      <br>
                    Ingrediënt ID:                  <input type="number"   name="ingredidvak">            <br>
                    Ingrediënt Naam:                <input type="text"     name="ingrednamevak">          <br>
                    Ingrediënt Beschrijving:        <input type="text"     name="ingreddescriptionvak">   <br>
                    Leverancier Adress:             <input type="text"     name="supadressvak">           <br>
                    <input type="submit">
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>