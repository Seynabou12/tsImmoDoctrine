<?php

use Models\Database;

require_once 'Models/Database.php';

class ProprietaireRepository extends Database
{
    public function addProprietaire(Proprietaire $proprietaire)
    {
        $this->db->persist($proprietaire);
        $this->db->flush();
        return $proprietaire;
    }


    public function updateProprietaire($proprietaire)
    {
        $p = $this->db->getRepository('Proprietaire')->find($proprietaire);
        if ($p != null) {
            $this->db->merge($p);
            $this->db->flush();
        }
        return $proprietaire;
    }

    public function findProprietaire($id)
    {
        $p = $this->db->getRepository('Proprietaire')->find($id);
        return $p;
    }

    
    public function findAllProprietaire()
    {
        $p = $this->db->getRepository('Proprietaire')->findAll();
        return $p;
    }
    
    public function deleteProprietaire($id)
    {
        $p = $this->db->getRepository('Proprietaire')->find($id);
        if ($p != null) {
            $this->db->remove($p);
            $this->db->flush();
        }
        return 1;
    }
}
