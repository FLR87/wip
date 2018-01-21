<?php
require_once ROOT . '/components/Db.php';

class Category
{
    public static function getCategoryList() // функция получает данные из БД
    {
        $db = Db::getConnection(); // подкючение к БД -> Db.php

        $result = $db->query('SELECT category.cat_id, category.cat_name, category.cat_small_discription, category.cat_image 
                                        FROM category                                     
                                        ORDER BY cat_sort_order ASC'); // выбираем, что выбрать из БД

        $categoryList = $result->fetchAll(PDO::FETCH_ASSOC); // считываем и передаем в переменную все данные БД

        return $categoryList;

    }

}