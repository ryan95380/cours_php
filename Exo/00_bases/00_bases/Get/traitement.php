<?php


/** Exercice 1 : Affichage des paramètres
 * 
 *  Objectif : Afficher tous les paramètres passés dans l'URL
 * 
 * 
 *  1 . En gardant la page de rendu HTML, utiliser les informations de cette page pour les passer en paramètres d'URL
 * 
 *  2 . Dans ce second fichier nommé : traitement.php, $_GET doit être récupéré, vérifié et ses paramètres affichés sur le navigateur 
 * 
 */

$article = $_GET['article'];
    $color = $_GET['color'];
    $prix = $_GET['prix'];

    echo "Nom de l'article : $article <br>";
    echo "Couleur : $color <br>";
    echo "Prix en dollars : $prix $<br>";


// Saliah correction
//     function verif($x): bool
// {
//     if (isset($x) && !empty($x)) {
//         return true;
//     } else {
//         return false;
//     }
// }
// if (verif($_GET)) {
 
 
//     echo " <div>";
//     echo '<p>Article : ' . $_GET["name"] . '</p>';
//     echo '<p>Couleur : ' . $_GET["color"] . '</p>';
//     echo '<p>Prix : ' . $_GET["price"] . ' Dollars.</p>';
 
//     echo "</div>";
 
 
// }
 
 
 

/** Exercice 2 : Validation des paramètres
 * 
 *  Objectif : Valider les paramètres reçus dans l'URL et afficher un message d'erreur si un paramètre est manquant
 * 
 *  1 . S'assurer que les paramètres article,couleur et prix sont présents dans l'URL
 * 
 *  2. Si un ou plusieurs paramètres manquent, afficher un message d'erreur spécifique pour chacun
 * 
 *  Exemple : "<p> Le paramètre 'Article' est manquant'"
 */

if (
    isset($_GET['article']) && isset($_GET['color']) && isset($_GET['prix']) &&
    !empty($_GET['article']) && !empty($_GET['color']) && !empty($_GET['prix'])
) {


 if (empty($_GET['article'])) {
        echo "<p>Le paramètre 'article' est manquant.</p>";
    }
    if (empty($_GET['color'])) {
        echo "<p>Le paramètre 'color' est manquant.</p>";
    }
    if (empty($_GET['prix'])) {
        echo "<p>Le paramètre 'prix' est manquant.</p>";
    }

    
    if (empty($_GET['article']) && empty($_GET['color']) && empty($_GET['prix'])) {
        echo "<p>Aucun élément n'a été sélectionné.</p>";
    }
} 
/** Exercice 3 : Conversion du prix
 * 
 *  Objectif : Convertir le prix reçu dans l'URL de dollars à euros (utiliser le taux de conversion de 1 dollar = 0.92 euros)
 * 
 *  1 . Récupérer le dollars passé dans l'URL
 * 
 *  2 . Convertir en euros
 * 
 *  3 . Afficher le prix converti
 */

$prixEuro = $prix * 0.92;
    echo "Prix en euros : $prixEuro €<br><br>";
/** Exercice 4 : Affichage d'un message personnalisé
 * 
 *  Objectif : Afficher un message personnalisé en fonction de la couleur passée dans l'URL
 * 
 *  1 . Récupérer la couleur passée dans l'URL
 * 
 *  2 . Afficher un message en fonction de la couleur ( exemple si couleur jaune : "<p> Cette couleur me fait penser au soleil ! </p>)
 * 
 */

   if ($color == "blue") {
        echo "Cette couleur me fait penser au ciel.<br>";
    } elseif ($color == "yellow") {
        echo "Cette couleur me fait penser au soleil.<br>";
    } elseif ($color == "red") {
        echo "Le rouge évoque la passion et la force.<br>";
    } else {
        echo "Couleur inconnue.<br>";
    }

/** Exercice 5 : Vérification du prix minimum
 * 
 *  Objectif : Vérifier si le prix reçu dans l'URL est supérieur à un montant minimum et afficher un message appriprié
 * 
 *  1 . Déclarer un prix minimum (20 par exemple)
 * 
 *  2 . Comparer le prix reçu dans l'URL avec le prix minimum
 * 
 *  3 . Afficher un message indiquant si le prix est suffisant ou non 
 * 
 * 
 *
 */

   $prixMinimum = 20;
    if ($prix >= $prixMinimum) {
        echo "Le prix est suffisant (supérieur ou égal à $prixMinimum $).";
    } else {
        echo "Le prix est trop bas (inférieur à $prixMinimum $).";
    }

