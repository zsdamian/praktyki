<?php

namespace App\Model;


class CommentsModel extends AbstractModel {

    public function getComments($limit = 5){
        $query = "SELECT author, content, created_at, updated_at, stars 
        FROM Comment
        ORDER BY created_at DESC
        LIMIT :limit;";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();
        $comments = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $comments;
    }

    public function getNextComments($offset, $limit = 5){
        $query = "SELECT author, content, created_at, updated_at, stars 
        FROM Comment
        ORDER BY created_at DESC
        LIMIT :limit OFFSET :offset;";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();
        $comments = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $comments;
    }

    public function addComment($author, $content, $stars){
        $query = "INSERT INTO Comment (author, content, stars) 
        VALUES (:author, :content, :stars)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':author', $author, \PDO::PARAM_STR);
        $stmt->bindValue(':content', $content, \PDO::PARAM_STR);
        $stmt->bindValue(':stars', $stars, \PDO::PARAM_INT);
        $stmt->execute();
    }
}

