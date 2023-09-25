<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete stap 2</title>
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
    <h2>Dit is stap 2 in het verwijderen van uw gegevens.</h2>

    <p>Is dit de speler die u wilt verwijderen?</p>

    <?php
    $inlogcode = $_POST["inlogcode"];

    require_once "connect.php";
    $verwijder = $conn->prepare("
            select  naamspeler,
                    inlogcode,
                    aantalpotjes,
                    gewonnen
            from    spelergegevens 
            where   inlogcode = :inlogcode");
    $verwijder->execute(["inlogcode" => $inlogcode]);

    echo "<table>";
    foreach ($verwijder as $speler) {
        echo "<tr>";
        echo "<td>" . $speler["naamspeler"]   . " </td>";
        echo "<td>" . $speler["inlogcode"]    . " </td>";
        echo "<td>" . $speler["aantalpotjes"] . " </td>";
        echo "<td>" . $speler["gewonnen"]     . " </td>";
        echo "</tr>";
    }
    echo "</table><br />";
    echo "<form action='delete3.php' method='post'>";
    echo "<input type='hidden' name='inlogcode' value='$inlogcode>";
    // Waarde 0 doorgegeven als er niet gecheckt wordt
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder deze speler? <br />";
    echo "<br>";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</main>

<footer>

</footer>

</body>
</html>