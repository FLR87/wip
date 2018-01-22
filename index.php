<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//определяем константу для корневого пути
define('ROOT', dirname(__FILE__));

//подключаем нужные компоненты
require_once (ROOT . '/components/Router.php');
require_once (ROOT . '/components/Db.php');
require_once (ROOT . '/components/View.php');

//создаем и запускаем новый объект Router() -> переходим к /components/Router.php'
$router = new Router();
$router->run();


?>