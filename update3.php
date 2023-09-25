<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update stap 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>

</header>

<main>
    <h2>Gegevens veranderen stap 3</h2>
    <?php
    $naamspeler = $_POST["naamspeler"];
    $inlogcode = $_POST["inlogcode"];

    require_once "connect.php";
    $sql = $conn->prepare
    ("
    update spelergegevens set   naamspeler          = :naamspeler,
                                inlogcode          = :inlogcode
                                where       inlogcode = :inlogcode 
");

    $sql->execute
    ([
        "naamspeler" => $naamspeler,
        "inlogcode" => $inlogcode
    ]);

    echo "Je gegevens zijn verandert. <br />";
    echo "<br>";
    echo "<a href='welkom.php'> terug naar de home pagina.</a>";
    ?>
</main>

<footer>

</footer>

</body>
</html>
