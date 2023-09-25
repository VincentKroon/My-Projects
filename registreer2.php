<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
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
    <?php
    // gegevens inlezen
    $naamspeler = $_POST["naam"];
    $inlogcode = $_POST["inlogcode"];
    $aantalpotjes = 0;
    $gewonnen = 0;

    // database gegevens voorbereiden WIP
    require_once "connect.php";
    $sql = $conn->prepare("
                  insert into spelergegevens values (:naamspeler, :inlogcode, 
                                                     :aantalpotjes, :gewonnen)
    ");

    // opdracht uitvoeren
    $sql->execute([
        "naamspeler" => $naamspeler,
        "inlogcode" => $inlogcode,
        "aantalpotjes" => $aantalpotjes,
        "gewonnen" => $gewonnen
    ]);

    echo "<h2>Uw account is aangemaakt!</h2><br>";
    echo "<a href='welkom.php'> Terug naar de home pagina</a>"
    ?>

</main>

<footer>

</footer>

</body>
</html>