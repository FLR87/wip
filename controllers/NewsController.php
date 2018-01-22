<?php

include_once ROOT . '/model/News.php';
include_once ROOT . '/model/Category.php';
include_once ROOT . '/controllers/Controller.php';

class NewsController extends Controller
{
//    public function actionIndex($categoryId)
//    {
//        $news = Product::getProductsByCategoryId($categoryId);
//
//        $this->view->news = $news;
//
//        $this->view->generate('template_view.php', 'catalog/index.phtml');
//
//        require_once(ROOT . '/views/catalog/index.phtml');
//
//        return true;
//    }
//
//    public function actionView($categoryId)
//    {
//        $news = Product::getProductsByCategoryId($categoryId);
//
//        $this->view->news = $news;
//
//        $this->view->generate('template_view.php', 'catalog/index.phtml');
//
//        require_once(ROOT . '/views/catalog/index.phtml');
//
//
//    }
//
//    public function actionDetail($categoryId, $productId) //функция которая передает список продуктов из БД
//    {
//        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
//        $products = Product::getProductsByCategoryId($categoryId); //поключаем функцию -> Newsp
//
//        $this->view->categories = $categories;
//        $this->view->products = $products;
//
//        $this->view->generate('template_view.php', 'news/index.phtml'); //подключаем шаблон сайта -> View.php
//
//        require_once(ROOT . '/views/news/index.phtml');
//
//        return true;
//    }

}