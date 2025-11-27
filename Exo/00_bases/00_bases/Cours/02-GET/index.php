<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos produits</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div>
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <h1>Nos produits</h1>

    <!--  indique sur quelle fichier récuperer les parametres -->

    <a href="page2.php?clth=jean&color=bleu&price=40">Jean bleu</a>
    <a href="page2.php?clth=robe&color=rouge&price=60">Robe rouge</a>
    <a href="page2.php?clth=pull&color=blanc&price=20">Pull blanc</a>

    <!-- action pour rediriger vers le ficher de traitement => meilleur pratique  !-->
    <form method="get" action="">
        <label for="produit">Nom du produit :</label>
        <input type="text" id="produit" name="produit" placeholder="Ex : ordinateur">
        <button type="submit">Rechercher</button>
    </form>

    <?php
//         if(isset($_GET['produit']) && !empty($_GET ['produit']) ) {
//         $produit = htmlspecialchars($_GET['produit']); // Sécurise un minimum les données qu'on aaffiche
//         echo "<p>Resultats de la recherche: $produit<p>";
//        } else {
//          echo "<p>Aucun résultat trouvé!<p>";

//         }

// ?>

</body>

</html>