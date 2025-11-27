<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de couleur de fond</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo isset($_COOKIE["color"]) ? $_COOKIE["color"] : "withe"; ?>">
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="" method="POST">
        <input type="radio" id="red" name="color" value="red">
        <label for="red">Rouge</label><br>
        <input type="radio" id="green" name="color" value="green">
        <label for="green">Vert</label><br>
        <input type="radio" id="blue" name="color" value="blue">
        <label for="blue">Bleu</label><br>
        
        <input type="submit" value="Appliquer">
    </form>


    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>

    <h2><a href="?delete_cookie=true">Réinitialiser la couleur</a></h2>

    <?php


    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        setcookie("color", $color, time() + 365 * 24 * 60 * 60);
        header("location: index.php");
      exit();
    }

    var_dump($_COOKIE);


    if (isset($_GET['delete_cookie'])) {
        setcookie("color", "", time() - 3600);
        echo "<p>Le cookie a bien été supprimé !< /p>";
        header("location: index.php");
        exit();
    }

    var_dump($_COOKIE);
    ?>
</body>

</html>