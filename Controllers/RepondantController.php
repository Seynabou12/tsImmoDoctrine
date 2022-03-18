<?php

namespace Controllers;

use Entities\Entreprise;
use Models\RepondantModel;
use Models\EntrepriseModel;

require 'Models/RepondantModel.php';
require 'Models/EntrepriseModel.php';


class RepondantController

{
    public function __construct()
    {
        $this->repondantModel = new RepondantModel();
    }

    public function add()
    {
        if(isset($_POST['add'])){

            extract($_POST);
            $db = new RepondantModel();
        
            $a = $db->insert($nomRepondant, $prenomRepondant, $email, $telephone, $idEntreprise);
            $this->liste();
        } 
        else 
        {
            try {
                $entreprise = new EntrepriseModel();
                $entreprises = $entreprise->listEntreprise();  
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
            include 'Views/Repondant/ajoutRepondant.php';
        }
    }

    public function liste()
    {
        $db = new RepondantModel;
        $repondants = $db->list();
        require_once('Views/Repondant/listRepondant.php');
    }

    public function edit($id)
    {
        if(isset($_POST['modifier'])){

            try {
                extract($_POST);
            $db = new RepondantModel();
        
            $a = $db->update($nomRepondant, $prenomRepondant, $email, $telephone, $id);
            $this->liste();
            } catch (\Throwable $th) {
                die($th->getMessage());
            }

        } else {

            $repondantModel = new RepondantModel();

            $repondant = $repondantModel->getById($id);

            include 'Views/Repondant/modificationRep.php';
        }
    }

    public function delete($idRepondant)
    {
            $db = new RepondantModel;
            $repondants = $db->delete($idRepondant);
            $this->liste();
    }
    
}    

?>