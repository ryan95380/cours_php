<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Fomrulaire 2</title>
</head>

<body>
    <h1>Formulaire 2</h1>

</body>

    <form action="traitement.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required >
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required >
    <label for="email">Email</label>
    <input type="text" id="email" name="email" required >
    <label for="mdp">mot de passe</label>
    <input type="text" id="mdp" name="mdp" required>
    <input type="submit" value="Envoyer">
    </form>
</html>



<?php 
