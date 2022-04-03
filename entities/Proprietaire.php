<?php

use Doctrine\ORM\Mapping as orm;

/**
 * @orm\Entity @orm\Table(name="proprietaire")
 */

class Proprietaire
{
    /**
     * @orm\id @orm\column(type="integer") @orm\GeneratedValue
     */
    private $idProprietaire;
    /**
     * @orm\column(type="string",  length=30)
     */
    private $nom;

     /** @orm\Column(type="string") */
     private $prenom;
       /** @orm\Column(type="string") */
    private $adresse;
     /** @orm\Column(type="string") */
     private $email;
      /** @orm\Column(type="string") */
    private $civilites;

     /** @orm\Column(type="string") */
     private $telephone;
       /** @orm\Column(type="string") */
    private $sexe;
     /** @orm\Column(type="string") */
     private $date_naissance;
      /** @orm\Column(type="string") */
    private $lieu_naissance;

    public function __construct()
    {
        
    }
    /**
     * Get the value of idProprietaire
     */ 
    public function getIdProprietaire()
    {
        return $this->idProprietaire;
    }

    /**
     * Set the value of idProprietaire
     *
     * @return  self
     */ 
    public function setIdProprietaire($idProprietaire)
    {
        $this->idProprietaire = $idProprietaire;

        return $this;
    }

     /**
      * Get the value of prenom
      */ 
     public function getPrenom()
     {
          return $this->prenom;
     }

     /**
      * Set the value of prenom
      *
      * @return  self
      */ 
     public function setPrenom($prenom)
     {
          $this->prenom = $prenom;

          return $this;
     }

     /**
      * Get the value of date_naissance
      */ 
     public function getDate_naissance()
     {
          return $this->date_naissance;
     }

     /**
      * Set the value of date_naissance
      *
      * @return  self
      */ 
     public function setDate_naissance($date_naissance)
     {
          $this->date_naissance = $date_naissance;

          return $this;
     }

    /**
     * Get the value of lieu_naissance
     */ 
    public function getLieu_naissance()
    {
        return $this->lieu_naissance;
    }

    /**
     * Set the value of lieu_naissance
     *
     * @return  self
     */ 
    public function setLieu_naissance($lieu_naissance)
    {
        $this->lieu_naissance = $lieu_naissance;

        return $this;
    }

    /**
     * Get the value of civilites
     */ 
    public function getCivilites()
    {
        return $this->civilites;
    }

    /**
     * Set the value of civilites
     *
     * @return  self
     */ 
    public function setCivilites($civilites)
    {
        $this->civilites = $civilites;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

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
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

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
}