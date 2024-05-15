<?php 

namespace App\Model;

use App\Core\Request;

class ShopMain extends Database {

    public function __construct(\PDO $shopmain) {
        $this->db = $shopmain; 
    }
    public function getCategories(){
        $query = "SELECT name, slug from Category";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $categories;
    }
}
