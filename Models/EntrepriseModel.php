<?php

namespace Models;

use Entities\Entreprise as EntitiesEntreprise;
use Entreprise;

require_once 'Database.php';

class EntrepriseModel extends Database
{
    private $db;

    public function __construct()
    {
        // Instenciation de la classe Database
        $this->db = new Database();
    }
    public function insert($nomEntreprise, $nombre, $siege, $datecreation, $id_commune, $idStatut, $id_domaine)
    {

        $this->getConnexion();
        // Preparation de la requete
        $queryPrepare = $this->pdo->prepare("INSERT INTO Entreprise(nomentreprise,nombreEmploye,siegeSocial,dateCreation,id_commune,idStatut,id_domaine) VALUES (?, ?, ?, ?, ?, ?, ?) ");

        // Excécution de la requete
        return $queryPrepare->execute(array($nomEntreprise, $nombre, $siege, $datecreation, $id_commune, $idStatut, $id_domaine));
    }
    public function edit($nomEntreprise, $siege, $nombre, $datecreation, $registre, $id)
    {
    }
    public function delete($id)
    {
    }
    public function list()
    {
        $entreprises = [];

        // $t = $this->executeSelect('Select * from Entreprise, Commune where Entreprise.id_commune = Commune.idCommune')->fetchAll();

        $t = $this->executeSelect('Select * from Entreprise')->fetchAll();

        foreach ($t as $key) {

            $entreprise = new EntitiesEntreprise();

            $entreprise->setIdEntreprise($key['idEntreprise']);

            $entreprise->setNomentreprise($key['nomentreprise']);

            $entreprise->setNombreEmployes($key['nombreEmploye']);

            $entreprise->setSiegeSocial($key['siegeSocial']);

            $entreprise->setDateCreation($key['dateCreation']);


            // $entreprise->setId_commune($key['id_commune']);

            $entreprises[] = $entreprise;
        }

        return $entreprises;
    }
}
