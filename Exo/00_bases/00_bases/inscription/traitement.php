



<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {

        $nom   = isset($_POST['nom']) ? trim($_POST['nom']) : '';
        $prenom   = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $mdp    = isset($_POST['mdp']) ? trim($_POST['mdp']) : '';
        
    }

}

print_r($_POST);

$_SESSION['prenom'] = $_POST["prenom"];
$_SESSION['nom'] = $_POST["nom"];
$_SESSION['email'] = $_POST["email"];
$_SESSION['mdp'] = $_POST["mdp"];

?>




