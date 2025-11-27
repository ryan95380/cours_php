<?php

/** Exercice 1 : Déclaration d'une classe
 * 
 *  Objectif : Déclarer une classe et ajouter des propriétés et des méthodes
 * 
 *  1 . Créer une classe Animal avec une propriété nom = 'Rex'
 * 
 *  2 . Ajouter une méthode faireDuBruit() qui doit afficher "Je fais du bruit";
 * 
 *  3 . Instancier la classe Animal et faire en sorte d'appeler la méthode faireDuBruit();
 *  
 */


/** Exercice 2 : Ajouter des propriétés et méthodes
 * 
 *  Objectif : Ajouter des propriétés et méthodes supplémentaires
 * 
 *  1 . Modifier la classe Animal pour ajouter une propriété espece = 'Chien'
 * 
 * 2 . Ajouter une méthode afficherInfo() qui affiche le nom et l'espece de l'animal
 * 
 */




/** Exercice 3 : Utilisation du constructeur
 * 
 *  Objectif : Utiliser un constructeur pour initialiser les propriétés
 * 
 *  1 . Créer un constructeur dans la classe Animal pour initialiser les propriétés nom et espece
 * 
 *  2 . Créer un objet en instanciant la classe Animal 
 * 
 */

// 2 ainsi que 3 
class Animal
{
   public $nom = 'Rex';
   public $espece = 'Chien';
   public function faireDuBruit()
   {
       echo "Je fais du bruit<br>";
   }
   public function afficherInfo()
   {
       echo "Je suis un $this->espece et je m'appelle $this->nom <br>";
   }
   public function __construct($nom = 'Rex', $espece = 'Chien')
   {
       $this->nom = $nom;
       $this->espece = $espece;
   }
}
$animal = new Animal();
$animal->faireDuBruit();
$animal->afficherInfo();


/** Exercice 4 : Visibilité des propriétés
 * 
 *  Objectif : Démontrer les différents niveaux de visibilité des propriétés
 * 
 *  1 . Créer une classe Personne avec les propriétés nom (public), age(private) et adresse (protected)
 * 
 *  2 . Instancier la classe Personne et tenter d'appeler chaque propriété (afficher chacune), voir le résultat
 * 
 * 
 */
class Personne
{
   public $nom;
   private $age;
   protected $adresse;
   public function __construct($nom, $age, $adresse)
   {
       $this->nom = $nom;
       $this->age = $age;
       $this->adresse = $adresse;
   }
   public function getAge()
   {
       return $this->age;
   }
   public function getAdresse()
   {
       return $this->adresse;
   }
}
$personne = new Personne("Ryan", 20, "Paris");
echo $personne->nom . "<br>";

echo $personne->getAge() . "<br>";
echo $personne->getAdresse() . "<br>";

/** Exercice 5 : Héritage
 * 
 *  Objectif : Utiliser l'héritage pour étendre une classe existante
 * 
 *  1 . Créer une classe Employe qui hérite de la classe Personne
 * 
 *  2 . Ajouter une propriété salaire à l'employé et une méthode pour afficher les informations de l'employé comme : 'Cet employé s'appelle 'nom, il a 'age' ans et son salaire est de 'salaire' € par mois';
 * 
 * 
 */
class Employe extends Personne
{
   private $salaire;
   public function __construct($nom, $age, $adresse, $salaire)
   {
       parent::__construct($nom, $age, $adresse);
       $this->salaire = $salaire;
   }
   public function afficherInfos()
   {
       echo "Cet employé s'appelle $this->nom, il a " . $this->getAge() .
            " ans et son salaire est de $this->salaire € par mois.<br>";
   }
}
$employe = new Employe("clement", 30, "Lyon", 2500);
$employe->afficherInfos();

/** Exercice 6 : Méthode parent::
 * 
 * Objectif: utiliser le mot clé parent:: pour passer la valeur d'une propriété depuis une classe enfant à la classe mère
 * 
 *  1 . Créer une classe animal avec la propriété $race méthode 'faireDuBruit()' qui affichera 'le cri de $this->race';
 * 
 *  2 . Créer une classe Chien qui etend Animal avec la même propriété et méthode 'faireDuBruit()' qui affichera 'est l'aboiement', Ne pas oublier le constructeur dans la classe Chien
 * 
 * 
 */

// créer une classe 
class AnimalParent

{

    // avec la propriété $race
   protected $race;
   //Le constructeur
   public function __construct($race)
   {
       $this->race = $race;
   }
   // fonction faireDubruit()
   public function faireDuBruit()
   {
      //qui affichera le cri de $this ->race
       echo "Le cri de $this->race";
   }
}
//  Créer une classe Chien qui etend Animal
class Chien extends AnimalParent
{
    // le constructeur
   public function __construct($race)
   {
       parent::__construct($race);
   }
   public function faireDuSport()
   {
       parent::faireDuBruit();
       //qui affichera 'est l'aboiement'
       echo " est l'aboiement<br>";
   }
}
$chien = new Chien("Staff");
$chien->faireDuSport();


/** Exercice 7 : Encapsulation
 * 
 *  Objectif : Utiliser l'encapsulation pour protéger les données
 * 
 *  1 . Créer une classe compteBancaire avec une propriété solde
 * 
 *  2 . Créer une méthode pour afficher le solde du compte
 * 
 *  3 . Créer une méthode pour déposer de l'argent sur le compte
 * 
 *  4 . La propriété ne doit pas pouvoir être modifiée depuis l'exterieur de la classe
 * 
 * 
 */
class CompteBancaire {
   private $solde;
   public function __construct($soldeInitial = 0)
   {
       $this->solde = $soldeInitial;
   }
   public function afficherSolde()
   {
       echo "Solde : $this->solde €<br>";
   }
   public function deposer($montant)
   {
       if ($montant > 0) {
           $this->solde += $montant;
       } else {
           echo "Montant incorrect.<br>";
       }
   }
}
$compte = new CompteBancaire(100);
$compte->afficherSolde();
$compte->deposer(50);
$compte->afficherSolde();


/** Exercice 8 : BONUS
 * 
 *  1 . Créer une classe Humain avec en propriété nom,age,adresse
 * 
 *  2 . Ajouter une méthode qui vérifie si l'age est un nombre positif, si c'est le cas , affecter sa valeur à $age, sinon, envoyer un message d'erreur
 */

// class Humain {
//     public $nom;
//     public $age;
//     protected $adresse;
    
// }

class Humain{
    public $nom;
    public $age;
    public $adresse;
    public function __construct($nom, $age, $adresse){
        $this->nom = $nom;
        if($age >= 0){
            $this->age = $age;
        } else {
            throw new Exception("age incorrect bro");
        }
        $this->adresse = $adresse;
    }
}
 
$hygbf = new Humain("mael", -50, "grr paw");
echo "<br>";


?>