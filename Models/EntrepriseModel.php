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
    public function insert($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page)
    {

        $this->getConnexion();
        // Preparation de la requete
        $queryPrepare = $this->pdo->prepare("INSERT INTO Entreprise(nomentreprise,nombreEmploye,siegeSocial,dateCreation,id_commune,idStatut,id_domaine, page_web) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ");

        // Excécution de la requete
        return $queryPrepare->execute(array($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page));
    }
    public function edit($nomEntreprise,$nombre,$siege,$datecreation,$id_commune,$idStatut,$id_domaine)
    {

    }
    public function delete($id)
    {
    }

    // Lister les entreprises
    public function list()
    {
        $entreprises = [];

        $t = $this->executeSelect('Select * from Entreprise')->fetchAll();

        foreach ($t as $key) {

            $entreprise = new EntitiesEntreprise();

            $entreprise->setIdEntreprise($key['idEntreprise']);

            $entreprise->setNomentreprise($key['nomentreprise']);

            $entreprise->setNombreEmployes($key['nombreEmploye']);

            $entreprise->setSiegeSocial($key['siegeSocial']);

            $entreprise->setDateCreation($key['dateCreation']);
            
            $entreprise->setId_domaine($key['id_domaine']);

            $entreprise->setIdStatut($key['idStatut']);

            $entreprise->setId_commune($key['id_commune']);

            $entreprise->setPage($key['page_web']);

            $entreprises[] = $entreprise;
        }

        return $entreprises;
    }
}
