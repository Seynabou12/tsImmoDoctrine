<?php



namespace Controllers;


use Proprietaire;
use ProprietaireRepository;

require 'Models/ProprietaireRepository.php';
// require 'Models/Database.php';
require 'entities/Proprietaire.php';

class ProprietaireController
{

    private $db;

    public function __construct()
    {
        $this->db = new ProprietaireRepository();
    }


    public function liste()
    {
        $db = new ProprietaireRepository;
        $proprietaires = $db->findAllProprietaire();
        require_once('Views/proprietaires/listeProprietaire.php');
    }

    public function add()
    {
        try {
            if (isset($_POST['add'])) {

                extract($_POST);
                $db = new ProprietaireRepository();
                $proprietaire = new Proprietaire;

                $proprietaire->setNom($nom);
                $proprietaire->setPrenom($prenom);
                $proprietaire->setAdresse($adresse);
                $proprietaire->setEmail($email);
                $proprietaire->setCivilites($civilites);
                $proprietaire->setTelephone($telephone);
                $proprietaire->setSexe($sexe);
                $proprietaire->setDate_naissance($dateNaissance);
                $proprietaire->setLieu_naissance($lieuNaissance);

                $a = $db->addProprietaire($proprietaire);
                if ($a->getIdProprietaire() != null) {
                    $this->liste();
                } else {
                    include 'Views/proprietaires/ajoutProprietaire.php';
                }
            } else {
                include 'Views/proprietaires/ajoutProprietaire.php';
            }
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }

    public function edit($id)
    {

        try {

            $db = new ProprietaireRepository();

            if (isset($_POST['modifier'])) {

                extract($_POST);

                $proprietaire = $db->findProprietaire($id);

                $proprietaire->setNom($nom);
                $proprietaire->setPrenom($prenom);
                $proprietaire->setAdresse($adresse);
                $proprietaire->setEmail($email);
                $proprietaire->setCivilites($civilites);
                $proprietaire->setTelephone($telephone);
                $proprietaire->setSexe($sexe);
                $proprietaire->setDate_naissance($dateNaissance);
                $proprietaire->setLieu_naissance($lieuNaissance);

               
                $a = $db->updateProprietaire($proprietaire);
                if ($a->getIdProprietaire() != null) {
                    $this->liste();
                    return;
                } else {
                    include 'Views/proprietaires/modification.php';
                    return;
                }
            } else {
                $proprietaire = $db->findProprietaire($id);
                include 'Views/proprietaires/modification.php';
                return;
            }
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }

    public function delete($id)
    {
        $db = new ProprietaireRepository;
        $proprietaire = $db->deleteProprietaire($id);
        $this->liste();
    }
}
