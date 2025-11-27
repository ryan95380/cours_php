<?php

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 */

$tableau = [
    "Gladiateur",
    "Spider-man",
    "Super-man",

];

var_dump($tableau);

/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */


$fruit = [
    "Pomme",
    "Fraise",
    "Banane"
];

$fruit [] = "Cerise";

array_shift($fruit);

var_dump($fruit);



/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */

$personne = [
    "prenom" => " Ryan",
    "nom" => " Mambou",
    "age" => 20
];

echo "Le prénom est" .$personne["prenom"] . ".<br>";
echo "Le nom est" .$personne["nom"] . ".<br>";
echo "L'age est" .$personne["age"] . ".<br>";






/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */

$ville = [
    "Paris",
    "Sarcelles",
    "Gonesse",

];

echo count($ville);

/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */
echo "<br>";
$etudiants = [
    [
        "prenom" => "Ryan",
        "nom" => "Mambou",
        "note" => 16
    ],
    [
        "prenom" => "Ahmed",
        "nom" => "Abir",
        "note" => 12
     ],
    [
       "prenom" => "Issa",
        "nom" => "Issadi",
        "note" => 20
     ]
];

echo "Le premier etudiant " .$etudiants[0]["note"];


/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */



echo "<br>";
$etudiants = [
    [
        "prenom" => "Ryan",
        "nom" => "Mambou",
        "note" => 16
    ],
    [
        "prenom" => "Ahmed",
        "nom" => "Abir",
        "note" => 12
     ],
    [
       "prenom" => "Issa",
        "nom" => "Issadi",
        "note" => 20
     ]
];

$etudiants[1]["note"] = 15;

var_dump($etudiants[1]);
/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */

$mois = [

    "Janvier",
 	"Février",
 	"Mars",
 	"Avril",
 	"Mai",
	"Juin",
    "Juillet",
 	"Août",
 	"Septembre",
    "Octobre",
    "Novembre",
    "Décembre"

];

for ($i = 0; $i < count($mois); $i++) {
    echo $mois[$i] . "<br>";
}


/** Exercice 8 bonus : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */

$tableau = [30,34,89,90,55,76,320,];

if(in_array(55,$tableau)){
    echo "le numéro est 55";

}else {
    echo "le numéro n'est pas présent";
}         




/** Exercice 9 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide: utiliser des boucles for
 */

echo "<br>";

$prenom = [
    "Ryan",
    "Issa",
    "Ahmed",
];

$nom = [
    "Mambou",
    "Issadi",
    "Abir",
];

    // // Tableau des noms prénoms
    // $names = ["Riri", "Fifi", "Loulou"];
    // $surname = ["Grigri", "Frifri", "Grougrou"];
 
    // // Tableau vide dans lequel on fusionnera les infos
    // $ducks = [];
 
    // // On bloucle tout ça et on met les info dans des tableaux dans le tableau TABLEAUCEPTION
    // for ($i = 0; $i < count($names); $i++) {
    //     $ducks[] = [
    //         "nom" => $names[$i],
    //         "prenom" => $surname[$i]
    //     ];
    // }
 
    // // On affiche tout ça
    // print_r($ducks);