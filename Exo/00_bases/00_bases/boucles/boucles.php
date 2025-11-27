<?php

// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */

// while ($i = 0; $i < 20; $i++) { 
//         echo $i . '<br>';
//     }

//version Hayata


 while ($i <= 18) {
    echo  $i += 2 ; //$i = $i+ 2;
    echo "<br>";
}


/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

for ($i = 2000; $i < 2026; $i++) { 
        echo $i . '<br>';
    }

/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. La variable de départ équivaut à 3
 * 
 * 
 */

$i=1;
 echo"<p>Les multiples de 3 sont : <p>";
 
do{
   $x=$i*3;
   echo "$x<br>";
   $i++;
}while ($i<=10);


   
/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */
// $multiplications = 5;

for ($i = 1; $i <= 10; $i++) { 
        $multiplications * $i;
        echo $resultat . '<br>';
    };

/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 1,1  1,2  1,3  1,4  1,5
 * 2,1  2,2  2,3 ...
 * ...
 * ...
 * ...
 * 5,1  5,2 ...
 */




/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */

$tabAssoc = [
            "prenom" => 'ryan',
            "nom" => 'mambou',
            "age" => '20',
            "email" => 'ryan.mambou@lepoles.org'

        ];

foreach( $tabAssoc as $valeur ) {
    echo $valeur . '<br>';
}

/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */

$menu = [
    "Accueil" => "accueil.php",
    "Produits" => "produits.php",
    "Contact" => "contact.php"
];
 
echo "<ul>";
 
foreach ($menu as $titre => $lien) {
    echo "<li><a href='$lien'>$titre</a></li>";
}



/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * Regarder random_int pour la génération des nombres aléatoires 
 * 
 * 
 */

// EXO 8
echo "<table border='1' cellspacing='0' cellpadding='8'>";
 
for ($ligne = 1; $ligne <= 10; $ligne++) {
    echo "<tr>";
    for ($colonne = 1; $colonne <= 10; $colonne++) {
        $nombreAltr = random_int(1, 100);
        echo "<td>$nombreAltr</td>";
    }
    echo "</tr>";
}
 
echo "</table>";


/** Exercice 9 : Tableau de tableaux avec foreach
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */

$info = [
    "person1"=> [
        "Prénom"=> "ahmed",
        "nom"=> "abir",
        "age"=> "20",
    ],
    "person2" => [
         "Prénom"=> "issa",
        "nom"=> "issadi",
        "age"=> "20",
    ],
    "person3" => [
         "Prénom"=> "mael",
        "nom"=> "flament",
        "age"=> "22",
    ],
];
 
 
 
foreach ($info as $k => $val) {
    echo "<li>$k</li>";
    foreach ($val as $k2 => $v2) {
        echo "
            <ol>
                <ul><li> $k2 : $v2 </li></ul>
            </ol>";
    }
}

?>
