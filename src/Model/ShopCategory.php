<?php 

namespace App\Model;

use App\Core\Request;

class ShopCategory extends Database{
    public function getCategoryProducts($arg1) {
        $query = "SELECT name, price
                  FROM Product
                  WHERE category_id = (SELECT id FROM category WHERE slug = :categoryName)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':categoryName', $arg1);
        $statement->execute();
        $category = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }


}