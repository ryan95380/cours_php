<?php

class Database {
    
    private PDO $pdo;

    public function __construct(string $name){
        $this->pdo = $this->getConnection($name);
    }

    private function getConnection($name) {
        try {
            return new PDO(
                "mysql:host=localhost;dbname=$name",
                'root',
                '',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
                )
            );
        } catch (PDOException $e) {
            throw new Exception("Error PDO", 1);
        }
    }

    public function insert(string $stmt, array $params){
        return $this->pdo->prepare($stmt)->execute($params);
    }

    public function query(string $stmt, array $params){
        $result = $this->pdo->prepare($stmt);
        $result->execute($params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function queryAll(string $stmt, array $params){
        $result = $this->pdo->prepare($stmt);
        $result->execute($params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

