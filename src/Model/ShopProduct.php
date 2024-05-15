<?php

namespace App\Model;

class ShopProduct extends AbstractModel
{
    public function getProduct(string $productSlug)
    {
        $query = "SELECT id, name, price, description, producer
                  From Product
                  Where slug = :productSlug";

        $statement = $this->db->prepare($query);
        $statement->bindParam(":productSlug", $productSlug);
        $statement->execute();
        $product = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $product;
    }

    public function getProductsByCategory(string $categorySlug): array
    {
        $query = "SELECT name, price, slug
                  FROM Product
                  WHERE category_id = (SELECT id FROM Category WHERE slug = :categorySlug)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':categorySlug', $categorySlug);
        $statement->execute();
        $category = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

}
