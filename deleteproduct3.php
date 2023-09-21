<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Valentijn Standaart -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Delete product 3</title>
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
        <h1>Delete product stap 3</h1>
        <p>
            Op product gegevens zoeken uit de tabel products zodat ze verwijderd kunnen worden.
        </p>
        <?php 
        // gegevens uit het formulier halen
        $prodID = (int)$_POST["productidvak"];
        $verwijderen = $_POST["verwijdervak"];

        // product gegevens verwijderen
        if ($verwijderen === "1"){
            require "products.php";
            $prod = new Products();
            $prod->deleteProduct($prodID);
            echo "<p>De gegevens zijn verwijderd. <br /></p>";

        } else{
            echo "<p>De gegevens zijn niet verwijderd. <br /></p>";
        }

        echo "<br>";
        echo "<button><a href='index.php'>Terug</a></button>";
        ?>
    </div>
    
</main>
</body>
</html>