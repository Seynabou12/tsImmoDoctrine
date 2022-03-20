<?php

namespace Entities;

class Departement 
{
    private $idDepartement;
    private $libelle;
    private $idRegion;



    /**
     * Get the value of idDepartement
     */ 
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    /**
     * Set the value of idDepartement
     *
     * @return  self
     */ 
    public function setIdDepartement($idDepartement)
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of idRegion
     */ 
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set the value of idRegion
     *
     * @return  self
     */ 
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;

        return $this;
    }
}    