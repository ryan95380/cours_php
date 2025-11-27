<?php

// pour les exercices, vous allez créer une table dans la BDD societe qui s'appelera, dirigeants

/** Cette table contiendra
 * 
 *  'id'(INT,clé primaire, auto-incrémentée)
 *  'prenom'(VARCHAR,255)
 *  'nom'(VARCHAR,255)
 *  'poste'(VARCHAR,255)
 *  'email'(VARCHAR,255,unique)
 *  'salaire'(FLOAT)
 *  'date_embauche'(DATE)
 */

/** Exercice 1 : Connexion à une base de données 
 * 
 *  Objectif : Se connecter à notre BDD
 * 
 *  1 . Commencer par utiliser l'objet PDO pour se connecter à la base de donnée MySQL (ou MySQLi si vous preférez)
 * 
 *  2 . S'assurer de gérer les erreurs de connexion de manière appropriée en affichant un message d'erreur si la connexion echoue
 */

    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=societe', 
            'root',   
            '',   
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' 
            ]
    );
        echo '<p>Connexion à la base de données réussie !</p>';

    } catch (PDOException $e) {
       
        echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
        die;
    }


/** Exercice 2 : Insérer des données avec exec()
 * 
 *  Objectif : insérer des données dans la BDD 
 * 
 *  1 . Utiliser la méthode exec() pour insérer un nouvel dirigeant dans la table dirigeants. Afficher le nombre de lignes affectées par l'insertion et l'id du dirigeant inséré
 * 
 */


    // $resultat = $pdo->exec("INSERT INTO dirigeants (prenom, nom, poste, email, salaire, date_embauche) VALUES ('daniel', 'Baugrand', 'informatique', 'daniel3@gmail.com', '500', 2016-02-08)");
    
    //  echo "<br>: $resultat <br>";
    //  echo 'Dernier id généré par la BDD : ' . $pdo->lastInsertId();


/** Exercice 3 : Récupérer et afficher l'enregistrement avec query()
 * 
 *  Objectif : récupérer notre dirigeant de la BDD
 * 
 *  1 . Utiliser query() pour séléectionner les informations d'un dirigeant spécifique dans la table 'employes' (par exemple, par son prenom)
 * 
 *  2 . Afficher les résultats sous forme de tableau associatif en utilisant fetch(PDO::FETCH_ASSOC)
 * 
 */

    $result = $pdo->query("SELECT * FROM dirigeants WHERE prenom = 'daniel'");

    var_dump($pdo);
    var_dump($result);


    $dirigeants = $result->fetch(PDO::FETCH_ASSOC); 
    var_dump($dirigeants);
    var_dump($dirigeants);
    echo "Je suis {$dirigeants['prenom']} {$dirigeants['nom']} . <br>";

/** Exercice 4 : Affichage avec différents types de fetch
 * 
 * Objectif : Reprendre l'exercice précédent
 * 
 *  1 . Modifier le fetch(PDO::xxx) pour le remplacer par les trois autres types : FETCH_NUM,FETCH_ASSOC et FETCH_OBJ, Analyser et comparer
 * 
 */

    $dirigeants = $result->fetch(PDO::FETCH_NUM); 
    var_dump($dirigeants);
    var_dump($dirigeants);


    $dirigeants = $result->fetch(PDO::FETCH_OBJ); 
    var_dump($dirigeants);
    var_dump($dirigeants);


/** Exercice 5 : Récupérer tous les enregistrements avec fetchAll()
 * 
 * Objectif : Récupérer toutes les lignes d'une table 
 * 
 *  1 . Récuperer les enregistrements de la table dirigeants avec fecthAll(PDO::FETCH_ASSOC)
 * 
 *  2 . Afficher les données dans un tableau HTML (vous pouvez reprendre celui du cours)
 * 
 *  3 . S'assurer que chaque dirigeant est affiché sur une ligne distincte
 * 
 */





/** Exercice 6 : Utilisation de requêtes préparées avec bindParam()
 * 
 *  Objectif : Sécuriser l'envoi de nos données à la BDD avec des requêtes préparées
 * 
 *  1 . Créer une requête pour selectionner un dirigeant par son nom
 * 
 *  2. Utiliser bindParam() pour lier les valeurs des paramètres et afficher les informations du dirigeant
 * 
 * 
 */


    $resultat = $pdo->prepare("SELECT * FROM dirigeants WHERE nom = :nom");  // :nom est marqueur nominatif qui est en attente d'une valeur

    echo '$resutat = $pdo->prepare("SELECT * FROM dirigeants WHERE nom = :nom)';

   
    $resultat->bindParam(':nom', $nom); 

    echo '<br> $resultat->bindParam(\':nom\',$nom);';

    $resultat->execute();

    echo '<br> $resultat->execute()';

    $donnees = $resultat->fetch(PDO::FETCH_ASSOC);
    echo '<br> $resultat->fetch(PDO::FETCH_ASSOC)';  

/** Exercice 7 : Requêtes préparées avec bindValue()
 * 
 * Objectif : Reprendre l'exercice précédent et refaire la même chose à la place de bindParams()
 * 
 * Modifier la valeur du paramètre pour observer le comportement de la requête
 * 
 */



/** Exercice 8 : Utilisation des marqueurs "?" dans une requête préparée
 * 
 *  Objectif : utiliser les marqueurs ? pour préparer nos valeurs 
 * 
 *  1 . Creer une requête pour séléctionner un dirigeant par son nom ET son prénom
 * 
 *  2 . Utiliser bindValue() ou passer directement les valeurs via un tableau dans la fonction execute()
 * 
 *  3 . Afficher les résultats
 */


$ans = $pdo->prepare(query: "SELECT * FROM dirigeants WHERE nom = ? AND prenom = ?");
$ans->execute(params: ["flament", "mael"]);
$donnees = $ans->fetch(mode: PDO: :FETCH_ASSOC);
debug(param: $donnees);