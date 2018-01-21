<?php

include_once ROOT . '/model/Product.php';
include_once ROOT . '/model/Category.php';
include_once ROOT . '/controllers/Controller.php';

class ProductController extends Controller
{
    public function actionIndex($categoryId)
    {
        $product = Product::getProductsByCategoryId($categoryId);

        $this->view->product = $product;

        $this->view->generate('template_view.php', 'catalog/index.phtml');

        require_once(ROOT . '/views/catalog/index.phtml');

        return true;
    }

    public function actionView($categoryId)
    {
        $product = Product::getProductsByCategoryId($categoryId);

        $this->view->product = $product;

        $this->view->generate('template_view.php', 'catalog/index.phtml');

        require_once(ROOT . '/views/catalog/index.phtml');


    }

    public function actionDetail($categoryId, $productId) //функция которая передает список продуктов из БД
    {
        $categories = Category::getCategoryList(); //поключаем функцию -> Category.php
        $products = Product::getProductsByCategoryId($categoryId); //поключаем функцию -> Product.php

        $this->view->categories = $categories;
        $this->view->products = $products;

        $this->view->generate('template_view.php', 'product/index.phtml'); //подключаем шаблон сайта -> View.php

        require_once(ROOT . '/views/product/index.phtml');

        return true;
    }

}