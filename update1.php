<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update stap 1</title>
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
    <h2>Naam veranderen stap 1</h2>
    <p>Wie wilt zijn naam of wachtwoord veranderen?</p>
    <form action="update2.php" method="post">
        Wat is uw inlogcode?
        <input type="password" name="inlogcode"> <br/>
        <input type="submit">
    </form>
</main>

<footer>

</footer>

</body>
</html>
