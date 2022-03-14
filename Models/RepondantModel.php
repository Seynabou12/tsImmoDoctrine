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
    public function insert($nomRepondnant, $prenomRepondant, $email, $telephone)
    {

        $this->getConnexion();
        // Preparation de la requete
        $queryPrepare = $this->pdo->prepare("INSERT INTO Repondant(nomRepondant, prenomRepondant, email, telephone) VALUES (?, ?, ?, ?)");

        // Excécution de la requete
        return $queryPrepare->execute(array($nomRepondnant, $prenomRepondant, $email, $telephone));
    }

    public function list()
    {
        $repondants = [];

        $t = $this->executeSelect('Select * from Repondant')->fetchAll();

        // var_dump($t);
        // die;

        foreach ($t as $key) {

            $repondant = new EntitiesRepondant();

            $repondant->setIdRepondant($key['idRepondant']);

            $repondant->setNomRepondant($key['nomRepondant']);

            $repondant->setPrenomRepondant($key['prenomRepondant']);

            $repondant->setEmail($key['email']);

            $repondant->setTelephone($key['telephone']);

            $repondants[] = $repondant;
        }

        return $repondants;
    }
}

?>