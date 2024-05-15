<?php 

namespace App\Model;

abstract class AbstractModel
{
    protected $db;

    public function __construct(\PDO $dbConnection) {
        $this->db = $dbConnection; 
    }

}
