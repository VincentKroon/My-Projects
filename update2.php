<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update stap 2</title>
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
    <h2>Naam veranderen stap 2</h2>
    <p>Wat wilt u veranderen?</p>
    <?php
    $inlogcode = $_POST["inlogcode"];

    require_once "connect.php";
    $spelers = $conn->prepare(
        "select naamspeler,
            inlogcode
    from    spelergegevens
    where   inlogcode = :inlogcode");

    $spelers->execute(["spelers" => $spelers]);

    echo "<form action='update3.php' method='post'>";
    foreach ($spelers as $speler) {
        echo " Speler naam: <input type='text' ";
        echo " name = 'naamspeler' ";
        echo " value = '" . $speler["naamspeler"] . "' ";
        echo " > <br />";
        echo "<br>";

        echo " Inlogcode: <input type='password' ";
        echo " name = 'inlogcode' ";
        echo " value = '" . $speler["inlogcode"] . "' ";
        echo " > <br />";
        echo "<br>";
    }
    echo "<input type='submit'>";
    echo "</form>";

    ?>
</main>

<footer>

</footer>

</body>
</html>