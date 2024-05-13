<?php 

namespace App\Model;

use App\Core\Request;
class ShopProduct extends Database {

public function getProduct($arg2) 
    {
        $query = "SELECT name, price, description, producer
                  From Product
                  Where slug = :productName";
                  
        $statement = $this->db->prepare($query);
        $statement->bindParam(":productName", $arg2);
        $statement->execute();
         $product = $statement->fetchAll(\PDO::FETCH_ASSOC);
    return $product;
    }
}