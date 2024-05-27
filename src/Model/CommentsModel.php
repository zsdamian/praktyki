<?php

namespace App\Model;

class CommentsModel extends AbstractModel {
    public function addComment($productId, $author, $content, $rating) {
        $query = "INSERT INTO Comments (product_id, author, content, stars) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$productId, $author, $content, $rating]);
    }

    public function getComments($productId) {
        $query = "SELECT author, content, stars FROM Comments WHERE product_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$productId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>
