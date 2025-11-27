<?php
 
class Database {
    public PDO $pdo;
 
    public function __construct($name)
    {
        $this->getConnexion($name);
    }
 
    private function getConnexion($name) {
        try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname=$name",
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
    }
}
?>