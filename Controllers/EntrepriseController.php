<?php

namespace Controllers;

use Models\EntrepriseModel;

require 'Models/EntrepriseModel.php';

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



        // La fonction permet d'afficher ajout.php  
        public function add()
        {
            if(isset($_POST['add'])){

                extract($_POST);
                $db = new EntrepriseModel();


                $a = $db->insert($nomEntreprise, $nombre, $siege, $datecreation,  null,  null,  null);
                $this->liste();

            } else {
                include 'Views/Entreprises/ajoutEntreprise.php';
            }
        }
    }
?>