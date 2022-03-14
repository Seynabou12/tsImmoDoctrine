<?php

namespace Controllers;


use Models\DomaineDb;
use Models\EntrepriseModel;
use Models\StatutJuridique;
use Models\Commune;

require 'Models/EntrepriseModel.php';
require 'Models/DomaineDb.php';
require 'Models/StatutJuridique.php';
require 'Models/Commune.php';

    class EntrepriseController
    {

        public function __construct()
        {
            $this->entrepriseModel = new EntrepriseModel();
        }

        // Afficher une vieuw 
        public function viewManager()
        {

            $db = new EntrepriseModel;
            $view = isset($_GET['view']) ? $_GET['view'] : NULL;
            switch ($view) 
            {
                case 'ajoutEntreprise':
                    $this->add();
                    break;
                case 'modification':
                    $this->add();
                default:
                $entreprise = $this->entrepriseModel->list();
                $this->liste();
                break;
            }
            
            $action = isset($_GET['action']) ? $_GET['action'] : NULL;
            if ($action == 'add') {
                
               if (isset($_POST['add'])) {
                   extract($_POST);
                   $this->entrepriseModel->insert('ssejj',111,'eeeee','18-05-2020',1,1,);}
            }
        }
       
        public function liste()
        {
            $db = new EntrepriseModel;
            $entreprises = $db->list();
            require_once('Views/Entreprises/listeEnrteprise.php');
        }

        public function add()
        {
            if(isset($_POST['add'])){

                extract($_POST);
                $db = new EntrepriseModel();
            
                $a = $db->insert($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page, $registre, $ninea);
                $this->liste();

            } else {

                try {
                    $commune = new Commune();
                    $communes = $commune->listeCommune();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
               
                try {
                    $statut = new StatutJuridique();
                    $statuts = $statut->listeStatut();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
                try {
                    $domaine = new DomaineDb();
                    $domaines = $domaine->listeDomaine();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
                include 'Views/Entreprises/ajoutEntreprise.php';
            }
        }

        public function edit($id)
        {
            if(isset($_POST['modifier'])){

                try {
                    extract($_POST);
                $db = new EntrepriseModel();
            
                $a = $db->update($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page, $registre, $ninea, $id);
                $this->liste();
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }

            } else {

                try {
                    $commune = new Commune();
                    $communes = $commune->listeCommune();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
               
                try {
                    $statut = new StatutJuridique();
                    $statuts = $statut->listeStatut();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
                try {
                    $domaine = new DomaineDb();
                    $domaines = $domaine->listeDomaine();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }

                $entrepriseModel = new EntrepriseModel();

                $entreprise = $entrepriseModel->getById($id);

                include 'Views/Entreprises/modification.php';
            }
        }
        
        public function delete($idEntreprise)
        {
            $db = new EntrepriseModel;
            $entreprises = $db->delete($idEntreprise);
            $this->liste();
        }
    }
?>