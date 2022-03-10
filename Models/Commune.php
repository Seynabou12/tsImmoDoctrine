<?php

namespace Models;

use Models\Database;

class Commune extends Database 
{
    public function listeCommune(){
        return $this->executeSelect('SELECT * FROM Commune')->fetchAll();
    }
}