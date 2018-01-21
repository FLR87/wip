<?php

class Controller
{
    protected $view; // переменная отображения элементов БД

    function __construct() // функция создает новый объект view -> переходим к CatalogController и ProductController
    {
        $this->view = new View();
    }
}