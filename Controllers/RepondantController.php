<?php

namespace Controllers;

use Models\RepondantModel;

require_once 'Models/RepondantModel.php';

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
        
            $a = $db->insert($nomRepondant, $prenomRepondant, $email, $telephone);
            $this->liste();
        } 
        else 
        {
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