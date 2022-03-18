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
    public function insert($nomRepondant, $prenomRepondant, $email, $telephone, $idEntreprise)
    {

        $this->getConnexion();
        // Preparation de la requete
        $queryPrepare = $this->pdo->prepare("INSERT INTO Repondant(nomRepondant, prenomRepondant, email, telephone, id_entrprose) VALUES (?, ?, ?, ?, ?)");

        // Excécution de la requete
        return $queryPrepare->execute(array($nomRepondant, $prenomRepondant, $email, $telephone, $idEntreprise));
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

            $repondant->setId_entrprose($key['idEntreprise']);

            $repondants[] = $repondant;
        }

        return $repondants;
    }


    public function update($nomRepondant, $prenomRepondant, $email, $telephone, $idRepondant)
    {

        try {
            $this->getConnexion();
            // Preparation de la requete
            $queryPrepare = $this->pdo->prepare("UPDATE Repondant set nomRepondant = ?, prenomRepondant = ?, email = ?, telephone = ? where idRepondant = ?");
            
            // Excécution de la requete
            return $queryPrepare->execute(array($nomRepondant, $prenomRepondant, $email, $telephone, $idRepondant));
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }

    public function getById($id)
    {
        $repondants = [];

        $key = $this->executeSelect('Select * from Repondant where idRepondant = ' . $id . '')->fetch();

        $repondant = new EntitiesRepondant();

        $repondant->setIdRepondant($key['idRepondant']);

        $repondant->setNomRepondant($key['nomRepondant']);

        $repondant->setPrenomRepondant($key['prenomRepondant']);

        $repondant->setEmail($key['email']);

        $repondant->setTelephone($key['telephone']);


        return $repondant;
    }


    public function delete($idRepondant)
    {
        $this->getConnexion();
        $queryPrepare = $this->pdo->prepare("DELETE FROM Repondant WHERE idRepondant=?");
        return $queryPrepare->execute(array($idRepondant));
    }
}

?>