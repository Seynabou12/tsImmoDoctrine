<?php

namespace Models;

use Models\Database;

class DomaineDb extends Database 
{
    public function listeDomaine(){
        return $this->executeSelect('SELECT * FROM Domaine')->fetchAll();
        
    }
}