<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,mdp,ville,pays)

function chkPost($key){
    if(array_key_exists($key, $_POST)){
        if(isset($_POST[$key]) && !empty($_POST[$key])){
            return htmlspecialchars($_POST[$key]);
        }
    }
    return false;
}

/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 * 
 */
echo "<br>";
$champs = ["nom","prenom","email","mdp","ville","pays"];
foreach($champs as $champ){
    if(!chkPost($champ)){
        echo "le champ $champ est invalide";
    }
}


/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */
echo "<br>";
$champs = ["nom","prenom","email","mdp","ville","pays"];
foreach($champs as $champ){
    if($input = chkPost($champ)){
        echo "$champ = $input --- ";
    }
}

/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */
echo "<br>";
echo "gg";

/** Exercice 4 : Limitation de longueur pour mot de passe 
 * 
 *  Objectif : Limiter la longueur de le mot de passe  saisie par l'utilisateur à 130 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ mot de passe 
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 */
echo "<br>";
if($mdp = chkPost("mdp")){
    if(mb_strlen($mdp) > 130){
        echo "euh mec abuse du mdp";
    } else {
        echo "cool mdp";
    }
}

/*
/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */
echo "<br>";
if($ville = chkPost("ville")){
    $ville = strtoupper($ville);
    echo "$ville <br> Merci pour votre soumission";
}

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

print_r($_FILES);