<?php

namespace Entities;

class Repondant 
{
    private $idRepondant;
    private $nomRepondant;
    private $prenomRepondant;
    private $email;
    private $telephone;
    private $id_entrprose;


    /**
     * Get the value of idRepondant
     */ 
    public function getIdRepondant()
    {
        return $this->idRepondant;
    }

    /**
     * Set the value of idRepondant
     *
     * @return  self
     */ 
    public function setIdRepondant($idRepondant)
    {
        $this->idRepondant = $idRepondant;

        return $this;
    }

    /**
     * Get the value of nomRepondant
     */ 
    public function getNomRepondant()
    {
        return $this->nomRepondant;
    }

    /**
     * Set the value of nomRepondant
     *
     * @return  self
     */ 
    public function setNomRepondant($nomRepondant)
    {
        $this->nomRepondant = $nomRepondant;

        return $this;
    }

    /**
     * Get the value of prenomRepondant
     */ 
    public function getPrenomRepondant()
    {
        return $this->prenomRepondant;
    }

    /**
     * Set the value of prenomRepondant
     *
     * @return  self
     */ 
    public function setPrenomRepondant($prenomRepondant)
    {
        $this->prenomRepondant = $prenomRepondant;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }



    /**
     * Get the value of id_entrprose
     */ 
    public function getId_entrprose()
    {
        return $this->id_entrprose;
    }

    /**
     * Set the value of id_entrprose
     *
     * @return  self
     */ 
    public function setId_entrprose($id_entrprose)
    {
        $this->id_entrprose = $id_entrprose;

        return $this;
    }
}

?>