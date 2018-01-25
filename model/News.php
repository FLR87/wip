<?php

class News
{

    public static function getNewsByCategoryId($categoryId)
    {
        $categoryId = intval($categoryId);

        if ($categoryId) {

            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM news WHERE cat_id = '$categoryId'");
            //$result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItems = $result->fetchAll(PDO::FETCH_ASSOC);

            return $newsItems;
        }
    }

    public static function getNewsAll()
    {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM news");
            //$result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItems = $result->fetchAll(PDO::FETCH_ASSOC);

            return $newsItems;
    }

    public static function getNewsLatest()
    {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM news ORDER BY nw_date DESC LIMIT 3 ");
            //$result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItemsLatest = $result->fetchAll(PDO::FETCH_ASSOC);

            return $newsItemsLatest;
    }

    public static function getNewsTop()
    {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM news LEFT JOIN category ON news.cat_id = category.cat_id WHERE nw_is_top = 1 LIMIT 4 ");
            //$result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItems = $result->fetchAll(PDO::FETCH_ASSOC);

            return $newsItems;
    }

    public static function getNewsTopest()
    {
        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM news LEFT JOIN category ON news.cat_id = category.cat_id WHERE nw_is_top = 1 ORDER BY RAND() LIMIT 1 ");
        //$result->setFetchMode(PDO::FETCH_ASSOC);

        $newsItemsTopest = $result->fetchAll(PDO::FETCH_ASSOC);

        return $newsItemsTopest;
    }

    public static function getNewsByNewsId($newsId)
    {
        $newsId = intval($newsId);

        if ($newsId) {

            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM news WHERE nw_id = '$newsId'");
            //$result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItems = $result->fetchAll(PDO::FETCH_ASSOC);

            return $newsItems;
        }
    }


}