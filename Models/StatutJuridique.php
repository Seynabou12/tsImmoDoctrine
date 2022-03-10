<?php

namespace Models;

use Models\Database;

class StatutJuridique extends Database 
{
    public function listeStatut(){
        return $this->executeSelect('SELECT * FROM StatutJuridique')->fetchAll();
        
    }
}