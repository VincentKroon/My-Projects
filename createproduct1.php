<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Valentijn Standaart -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.css">
        <title>Create Product stap 1</title>
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
                <h1>Create Klant stap 1</h1>
                <p>
                    Maak een product aan. Vul de gegevens van de klant in.
                </p>
                <form action="createproduct2.php" method="post">
                    Naam:<input type="text" name="productnamevak"><br>
                    Ingredient ID:<input type="text" name="ingredientidvak"><br>
                    Categorie:<input type="text" name="productcategoryvak"><br>
                    Glass type:<input type="text" name="productglasstypevak"><br>
                    Instructie:<input type="text" name="productinstrctionvak"><br>
                    <input type="submit">
                </form>
            </div>
        </main>
    </body>
</html>