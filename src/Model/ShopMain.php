<?php 

namespace App\Model;

class ShopMain extends AbstractModel {

    public function getCategories(){
        $query = "SELECT name, slug from Category";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $categories;
    }
}
