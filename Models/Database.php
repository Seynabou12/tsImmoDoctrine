<?php

use PDO;
use PDOException;
class Database
{

    private static $dbHost  = 'localhost';
    private static $dbUser = 'root';
    private static $dbPassword = '';
    private static $dbName = 'ProjetPoo';

    private static $connecte = null;

    public function __construct()
    {
        
    }

    public function Connexion()
    {
       if (null == self::$connecte) {
           
        try {
            self:: $connecte = new PDO ( "mysql:host=" .self::$dbHost . ";dbname=" .self::$dbName, self::$dbUser, self::$dbPassword, array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
       }
       return self::$connecte;
    }
 
}