<?php


namespace Models;

require_once('../Models/Database.php');

use Database;

class Region
{
    public function region()
    
    {
        $database = new Database();
        $database->Connexion();
    }

}
