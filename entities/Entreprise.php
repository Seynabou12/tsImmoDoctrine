<?php

namespace Entities;

class Entreprise 
{
    private $idEntreprise;
    private $nomentreprise;
    private $nombreEmployes;
    private $siegeSocial;
    private $dateCreation;
    private $id_commune;
    private $idStatut;
    private $id_domaine;
    private $page;
    private $registre;

    /**
     * Get the value of idEntreprise
     */ 
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set the value of idEntreprise
     *
     * @return  self
     */ 
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get the value of nomentreprise
     */ 
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }

    /**
     * Set the value of nomentreprise
     *
     * @return  self
     */ 
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get the value of nombreEmployes
     */ 
    public function getNombreEmployes()
    {
        return $this->nombreEmployes;
    }

    /**
     * Set the value of nombreEmployes
     *
     * @return  self
     */ 
    public function setNombreEmployes($nombreEmployes)
    {
        $this->nombreEmployes = $nombreEmployes;

        return $this;
    }

    /**
     * Get the value of siegeSocial
     */ 
    public function getSiegeSocial()
    {
        return $this->siegeSocial;
    }

    /**
     * Set the value of siegeSocial
     *
     * @return  self
     */ 
    public function setSiegeSocial($siegeSocial)
    {
        $this->siegeSocial = $siegeSocial;

        return $this;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of id_commune
     */ 
    public function getId_commune()
    {
        return $this->id_commune;
    }

    /**
     * Set the value of id_commune
     *
     * @return  self
     */ 
    public function setId_commune($id_commune)
    {
        $this->id_commune = $id_commune;

        return $this;
    }

    /**
     * Get the value of idStatut
     */ 
    public function getIdStatut()
    {
        return $this->idStatut;
    }

    /**
     * Set the value of idStatut
     *
     * @return  self
     */ 
    public function setIdStatut($idStatut)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    /**
     * Get the value of id_domaine
     */ 
    public function getId_domaine()
    {
        return $this->id_domaine;
    }

    /**
     * Set the value of id_domaine
     *
     * @return  self
     */ 
    public function setId_domaine($id_domaine)
    {
        $this->id_domaine = $id_domaine;

        return $this;
    }

    /**
     * Get the value of nombreEmployes
     */ 
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set the value of nombreEmployes
     *
     * @return  self
     */ 
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

     /**
     * Get the value of registre commercial
     */ 
    public function getRegistre()
    {
        return $this->registre;
    }

    /**
     * Set the value of registre commercial
     *
     * @return  self
     */ 
    public function setRegistre($registre)
    {
        $this->registre = $registre;

        return $this;
    }
}
