<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Vincent Kroon -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Welkom</title>
</head>
<body>
    <main>
        <div class="container">
    <?php
    session_start();
    echo "<h4></h4>";
    // gegevens in de session zetten
    if(isset($_POST["verzend"])){
        $_SESSION["naam"] = $_POST["naam"];
        $_SESSION["wachtwoord"] = $_POST["wachtwoord"];
    }

    // Checkt welk wachtwoord is aangegeven in de form en displayed het juiste menu
    if ($_SESSION["wachtwoord"] == 1234) {
        echo "<h1>Welkom CEO " . $_SESSION["naam"] . ",</h1><br><br>";
        include "ceomenu.php";

    } elseif($_SESSION["wachtwoord"] == 1111){
        echo "<h1>Welkom magazijn meester " . $_SESSION["naam"] . ",</h1><br><br>";
        include "magazijnmeestermenu.php";

    } elseif($_SESSION["wachtwoord"] == 2222){
        echo "<h1>Welkom verkoper " . $_SESSION["naam"] . ",</h1><br><br>";
        include "verkopermenu.php";

    } elseif($_SESSION["wachtwoord"] == 3333){
        echo "<h1>Welkom magazijn medewerker " . $_SESSION["naam"] . ",</h1><br><br>";
        include "magazijnmedewerkermenu.php";

    } elseif($_SESSION["wachtwoord"] == 4444){
        echo "<h1>Welkom bezorger " . $_SESSION["naam"] . ",</h1><br><br>";
        include "bezorgermenu.php";

    } else {
        echo "<strong>U heeft geen autorisatie voor het menu.</strong>";
    }

    ?>
        </div>
    </main>
</body>
</html>