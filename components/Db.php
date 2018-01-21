<?php

class Db
{
    public static function getConnection() // функция подключения к БД
    {
        $paramsPath = ROOT . '/config/db_params.php'; // путь к файлу с данным подключения к БД (возвращает массив) -> db_params.php
        $params = include($paramsPath); // в переменную заносим массив данных


        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}"; // заносим в переменную значение host и название БД
        $db = new PDO($dsn, $params['user'], $params['password']);// создаем объект PDO со всеми данными подключения к БД
        $db->exec("set names utf8");

        return $db;
    }
}