<?php

namespace App\Core;

class Base{
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection; 
    }

    public function getDrinks() {
        $query = "SELECT * FROM drink_categories";
        $stmt = $this->db->prepare($query); 
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); 
    }

    public function getComments() {
        $query = "SELECT * FROM comments_data";
        $stmt = $this->db->prepare($query); 
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); 
    }

    public function putComments() {
        $query = "INSERT INTO Comments (Nick, CommentText, Date)
        VALUES ('$nick', '$comment', CURDATE())";
    }
}
