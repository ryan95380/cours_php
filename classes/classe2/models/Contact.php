<?php

require_once realpath(__DIR__."/../config/Database.php");
// Gestion des requêtes ici !

class Contact {
    private $db;
    public function __construct()
    {
        $this->db = new Database("contacts");
    }

    public function addContact($data){
        $this->db->insert("INSERT INTO contacts(name, email, phone) VALUES (?,?,?)", [$data["name"], $data["email"],$data["phone"]]);
    }
    
    public function showContact(){
        return $this->db->queryAll("SELECT * FROM contacts", []);
    }
}
