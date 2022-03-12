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
        if(isset($_POST['addRep'])){

            extract($_POST);
            $db = new RepondantModel();
        
            $a = $db->insert($nomRepondant, $prenomRepondant, $email, $telephone, $fonction);
        } 
        else 
        {
            echo 'Hello tout le monde';
        }
    }
}    

?>