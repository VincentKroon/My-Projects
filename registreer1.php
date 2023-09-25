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
    <!-- Gegevens voor de database -->
    <h2>Vul uw gegevens in!</h2>
    <form method="post" action="registreer2.php">
        Naam: <input type="text" id="naam" name="naam"> <br>
        Inlogcode: <input type="password" id="inlogcode" name="inlogcode"> <br>
        <input type="submit" value="Inloggen" name="verzend">
    </form>
</main>

<footer>

</footer>

</body>
</html>
