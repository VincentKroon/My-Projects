<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete stap 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="welkom.php">Welkom</a></li>
            <li><a href="vieropeenrij.php">4 op een rij</a></li>
            <li><a href="leaderboard.php">Leaderboard</a></li>
            <li><a href="update1.php">Naam veranderen</a></li>
            <li><a href="delete1.php">Naam verwijderen</a></li>
            <li><a href="index.html">Opnieuw inloggen</a></li>
        </ul>
    </nav
</header>

<main>
    <h2>Delete stap 3</h2>
    <p></p>
    <?php
    $inlogcode  = $_POST["inlogcode"];
    $verwijderen   = $_POST["verwijdervak"];

    if ($verwijderen)
    {
        require_once "connect.php";
        $sql = $conn->prepare("
            delete from spelergegevens 
            where inlogcode = :inlogcode
        ");

        $sql->execute(["inlogcode" => $inlogcode]);
        echo "De gegevens zijn verwijderd. <br />";
    }
    else
    {
        echo "De gegevens zijn niet verwijderd. <br />";
    }
    echo "<br>";
    echo "<a href='welkom.php'>Terug naar de homepagina.</a>";
    ?>
</main>

<footer>

</footer>

</body>
</html>
