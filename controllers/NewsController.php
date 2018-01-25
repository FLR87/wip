<?php

include_once ROOT . '/model/Category.php';
include_once ROOT . '/model/News.php';
include_once ROOT . '/model/Partners.php';
include_once ROOT . '/controllers/Controller.php';

class NewsController extends Controller
{
//    public function actionIndex($newsId)
//    {
//        $news = News::getNewsByCategoryId($newsId);
//
//        $this->view->news = $news;
//
//        $this->view->generate('template_view.php', '/news/index.phtml');
//
////        require_once(ROOT . '/views/catalog/index.phtml');
//
//        return true;
//    }

    public function actionView($newsId) //функция которая передает список категорий из БД
    {
//        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
        $newspost= News::getNewsByNewsId($newsId);
//        $news = News::getNewsByCategoryId($newsId); //поключаем функцию -> News.php
        $newstopest =  News::getNewsTopest();//новость дня одна штука(rnd)
//        $this->view->categories = $categories;
        $this->view->newspost = $newspost;
//        $this->view->news = $news;
        $this->view->newstopest = $newstopest;


        $this->view->generate('template_view.php', '/news/index.phtml'); //подключаем шаблон сайта -> View.php
        return true;
    }
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