<?php

    class EntrepriseController
    {
        public function index()
        {
            $view = isset($_GET['Views']) ? $_GET['Views'] : NULL;
            switch ($view) {
                case 'ajout':
                    $this->includeViews($view);
                    break;
                
                default:
                    $this->includeViews();
                    break;
            }
            
        }
       
        public function includeViews($page = 'liste')
        {
            include('Views/Entreprises/' .$page. '.php');
        }
    }


?>