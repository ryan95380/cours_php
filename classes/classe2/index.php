<?php

// Gérer l'ajout des contacts ici ainsi que la récupération de tous les contacts
require_once "./models/Contact.php";
$contacts = new Contact();

function chk(array $arr, string $key){
    if(array_key_exists($key, $arr)){
        if(isset($arr[$key]) && !empty($arr[$key])){
            return $arr[$key];
        }
    }
    return null;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = [
        "name" => "",
        "email" => "",
        "phone" => ""
    ];


    foreach($data as $key => $value){
        if($input = chk($_POST, $key)){
            $data[$key] = $input;
        } else {
            echo "Le champ $key ne peut être vide";
            die;
        }
    }
    $contacts->addContact($data);

}

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
        if($data = $contacts->showContact()){
            // var_dump($data);
            foreach($data as $entry){
                echo "<li>";
                echo "$entry[name] - $entry[email] - $entry[phone]";
                echo "</li>";
            }
        }
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
