<?php

namespace App\Core;

class Database{
    private $db;

    public function __construct(\PDO $dbConnection) {
        $this->db = $dbConnection; 
    }

    /**
     * Obsługa Produktów
     */

    public function getProducts($categories) {
        $query = "SELECT * FROM $categories";/// jakos to ogarnac
        $stmt = $this->db->prepare($query); 
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); 
    }



    /**
     * Obsługa komentarzy
     */
    public function getComments($category) {   
        $query = "SELECT * FROM $category";
        $stmt = $this->db->prepare($query); 
        $stmt->execute(); 
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); 
    }

    public function putComments(string $nick, string $comment) {
        $query = "INSERT INTO comments_data (Nick, CommentText, Date)
        VALUES ('$nick', '$comment', CURDATE())";
        $stmt = $this->db->prepare($query); 
        $stmt->execute(); 
        

    }
}
