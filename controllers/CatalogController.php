<?php
include_once ROOT . '/model/Category.php';
include_once ROOT . '/model/News.php';
include_once ROOT . '/model/Partners.php';
include_once ROOT . '/controllers/Controller.php';

class CatalogController extends Controller
{
    public function actionIndex() //
    {
        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
        $newslatest = News::getNewsLatest(); //поключаем функцию -> News.php
        $newstop = News::getNewsTop(); //поключаем функцию -> News.php
        $partners = Partners::getPartners(); //поключаем функцию -> Partners.php
        $this->view->categories = $categories; // создаем объект View() -> Controller.php
        $this->view->newstop = $newstop;
        $this->view->newslatest = $newslatest;
        $this->view->partners = $partners;
        $this->view->generate('template_view.php', 'index.phtml'); // подключаем шаблон сайта -> View.php

        //require_once(ROOT . '/views/index.phtml');

        return true;
    }

    public function actionView($categoryId) //функция которая передает список категорий из БД
    {
        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
        $news = News::getNewsByCategoryId($categoryId); //поключаем функцию -> News.php
        $newstopest =  News::getNewsTopest();//новость дня одна штука(rnd)
        $this->view->categories = $categories;
        $this->view->news = $news;
        $this->view->newstopest = $newstopest;


        $this->view->generate('template_view.php', '/catalog/index.phtml'); //подключаем шаблон сайта -> View.php
        return true;
    }

//    public function actionDetail($catalogId, $newsId) //функция которая передает список продуктов из БД
//    {
//        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
//
//        $this->view->categories = $categories; // создаем объект View() -> Controller.php
//
//        $this->view->generate('template_view.php', 'news/index.phtml'); //подключаем шаблон сайта -> View.php
//
//        require_once(ROOT . '/views/catalog/index.phtml');
//    }
}

?>