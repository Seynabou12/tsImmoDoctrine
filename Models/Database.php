<?php

namespace Models;

require_once('./bootstrap.php');


class Database

{

    protected $db;
    public function __construct()
    {
        $this->db = getEntityMananger();
    }
}
