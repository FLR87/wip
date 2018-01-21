<?php
include_once ROOT . '/model/Category.php';
include_once ROOT . '/model/Product.php';
include_once ROOT . '/controllers/Controller.php';

class CatalogController extends Controller
{
    public function actionIndex() //
    {
        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php

        $this->view->categories = $categories; // создаем объект View() -> Controller.php

        $this->view->generate('template_view.php', 'index.phtml'); // подключаем шаблон сайта -> View.php

        //require_once(ROOT . '/views/index.phtml');

        return true;
    }

    public function actionView($categoryId) //функция которая передает список категорий из БД
    {
        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
        $products = Product::getProductsByCategoryId($categoryId); //поключаем функцию -> Product.php

        $this->view->categories = $categories;
        $this->view->products = $products;

        $this->view->generate('template_view.php', '/catalog/index.phtml'); //подключаем шаблон сайта -> View.php
        return true;
    }

    public function actionDetail($catalogId, $productId) //функция которая передает список продуктов из БД
    {
        $categories = Category::getCategoryByList(); //поключаем функцию -> Category.php

        $this->view->categories = $categories; // создаем объект View() -> Controller.php

        $this->view->generate('template_view.php', 'catalog/index.phtml'); //подключаем шаблон сайта -> View.php

        require_once(ROOT . '/views/catalog/index.phtml');
    }
}

?>