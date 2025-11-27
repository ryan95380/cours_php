<?php
 
// Gérer l'ajout des contacts ici ainsi que la récupération de tous les contacts
require_once "models\Contact.php";
?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Carnet de Contact</h1>
    <h2>Liste des Contacts</h2>
    <ul>
        <?php
        ?>
       
    </ul>
 
    <h2>Ajouter un nouveau contact</h2>
    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Téléphone">
        <button type="submit">Ajouter</button>
    </form>
 
</body>
</html>