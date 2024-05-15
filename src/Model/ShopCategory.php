<?php 

namespace App\Model;


class ShopCategory extends Database{

    public function __construct(\PDO $shopcategory) {
        $this->db = $shopcategory; 
    }
    public function getCategoryProducts() {
        
        $arg1 = "agd";
        $query = "SELECT name, price, slug
                  FROM Product
                  WHERE category_id = (SELECT id FROM Category WHERE slug = :categoryName)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':categoryName', $arg1);
        $statement->execute();
        $category = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }
 

}