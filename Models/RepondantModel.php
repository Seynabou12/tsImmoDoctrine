<?php

namespace Models;

use Entities\Repondant as EntitiesRepondant;
use Models\Database;

require_once 'Database.php';

class RepondantModel extends Database

{
    private $db;

    public function __construct()
    {
        // Instenciation de la classe Database
        $this->db = new Database();
    }
    public function insert($nomRepondnant, $prenomRepondant, $email, $telephone, $fonction)
    {

        $this->getConnexion();
        // Preparation de la requete
        $queryPrepare = $this->pdo->prepare("INSERT INTO Repondant(nomRepondant, prenomRepondant, email, telephone, fonction) VALUES (?, ?, ?, ?, ?)");

        // Excécution de la requete
        return $queryPrepare->execute(array($nomRepondnant, $prenomRepondant, $email, $telephone, $fonction));
    } 
}

?>