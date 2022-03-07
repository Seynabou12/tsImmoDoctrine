<?php

namespace Models;

use PDO;
use PDOException;


    class Database

    {
    
        public $pdo;

        protected function getConnexion()
        {
            if($this->pdo == null){
                try {
                    $host = 'mysql:host=localhost;dbname=ProjetPoo';
                    $this->pdo = new PDO(
                        $host,
                        'root',
                        '',
                        array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
                    );
                } catch (PDOException $ex) {
                    die("connexion impossible<br>" . $ex->getMessage());
                }
            }
        }

        protected function executeSelect($sql){
            try {
                $this->getConnexion();
                return $this->pdo->query($sql);
            } catch (\Throwable $th) {
                die('Erreur executePrepareAdd requete');
            }
        }
    }