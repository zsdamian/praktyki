<?php 

namespace App\Model;

use App\Core\Request;

class Database
{
    protected $db;

    public function __construct(\PDO $dbConnection) {
        $this->db = $dbConnection; 
    }
}
