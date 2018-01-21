<?php

class Product
{

    public static function getProductsByCategoryId($categoryId)
    {
        $categoryId = intval($categoryId);

        if ($categoryId) {

            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM product WHERE cat_id = '$categoryId'");
            //$result->setFetchMode(PDO::FETCH_ASSOC);

            $productItems = $result->fetchAll(PDO::FETCH_ASSOC);

            return $productItems;
        }
    }
}