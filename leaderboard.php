<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
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
    </nav>
</header>

<main>

    <h2>Leaderboard van onze website!</h2>
    <?php

    require_once "connect.php";

    $leaderboard = $conn->prepare("
        select naamspeler, 
               aantalpotjes, 
               gewonnen 
        from   spelergegevens
    ");

    $leaderboard->execute();

    echo "<table>";
    foreach ($leaderboard as $stat) {
        echo "<tr>";
        echo "<td>" . $stat["naamspeler"]    . " </td>";
        echo "<td>" . $stat["aantalpotjes"] . " </td>";
        echo "<td>" . $stat["gewonnen"]      . " </td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
</main>

<footer>

</footer>

</body>
</html>
