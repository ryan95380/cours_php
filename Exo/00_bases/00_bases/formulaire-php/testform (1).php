 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<input type="text" name="nom" id="nom">
<button type="submit">Envoyer</button>
</form>

<?php

    // On se connecte à la BDD
    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=formulaire',  // driver mysql + nom du serveur de la BDD + nom de la BDD 
            'root',   // pseudo de la BDD
            '',   // mdp de la BDD 'root' pour MAC et '' pour Windows
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // pour afficher les messages d'erreur SQL
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'  // définition du jeu de caractères des échanges avec la BDD
            ]
    );
        echo '<p>Connexion à la base de données réussie !</p>';

    } catch (PDOException $e) {
        // Si une erreur survient lors de la connexion, on la capture
        echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
        // error_log($e->getMessage(), 3, 'chemin/vers/le/fichier_log.log'); // Pour enregistrer l'erreur dans un fichier de log
        die; // Arrête le script si la connexion échoue
    }

    // On vérifie qu'il y a des info a envoyer sur la BDD puis ensuite on les envoiet
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
            $resultat = $pdo->prepare("INSERT INTO personne (nom) VALUES (?)");
            $resultat->execute([$_POST["nom"]]);

            var_dump($resultat);
        }
        //Nécessaire pour empêcher le renvois du formulaire en cas d'actualisation
        header("Location:testform.php");
        exit();
    }
    

 ?>

</body>
</html>