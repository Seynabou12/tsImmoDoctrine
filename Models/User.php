<?php

namespace Models;

require_once 'Database.php';

class User extends Database
{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

   

    //Register User
    // public function register($data){
    //     $this->db->query('INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) 
    //     VALUES (:name, :email, :Uid, :password)');
    //     //Bind values
    //     $this->db-> $data['usersName'];
    //     $this->db-> $data['usersEmail'];
    //     $this->db->$data['usersUid'];
    //     $this->db->$data['usersPwd'];

    //     //Execute
    //     if($this->db->execute()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    //Login user
    public function login($login, $password){
        
        $this->getConnexion();

        $query = $this->pdo->prepare("select * from User where login=? and password = ?");
        $query->execute(array($login, $password));
        return $query;

    }

    //Reset Password
    // public function resetPassword($newPwdHash, $tokenEmail){
    //     $this->db->query('UPDATE users SET usersPwd=:pwd WHERE usersEmail=:email');
    //     $this->db->$newPwdHash;
    //     $this->db-> $tokenEmail;

    //     //Execute
    //     if($this->db->execute()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}