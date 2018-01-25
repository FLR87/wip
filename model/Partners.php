<?php

class Partners
{

    public static function getPartners()
    {

        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM partners LIMIT 6 ");
        //$result->setFetchMode(PDO::FETCH_ASSOC);

        $partnersItems = $result->fetchAll(PDO::FETCH_ASSOC);

        return $partnersItems;
    }
}
