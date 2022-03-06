<?php

    class EntrepriseController
    {
        // Afficher une vieuw 
        public function viewManager()
        {
            $view = isset($_GET['view']) ? $_GET['view'] : NULL;
            switch ($view) {
                case 'ajoutEntreprise':
                    $this->includeFormAjout();
                    break;
                case 'modification':
                    $this->includeFormAjout();
                default:
                $this->liste();
                    break;
            }
        }
       
        public function liste()
        {
            include 'Views/Entreprises/listeEnrteprise.php';
        }

        // La fonction permet d'afficher ajout.php  
        public function includeFormAjout()
        {
            include 'Views/Entreprises/ajoutEntreprise.php';
        }
    }
?>