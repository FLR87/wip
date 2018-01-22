<?php

class Router // описание класса Router
{
    private $routes;// создаем переменную

    public function __construct()
    {
        $routePath = ROOT . '/config/routes.php'; // задаем переменной $routePath путь к routes -> routes.php
        $this->routes = include($routePath); //получем массив из routes.php и подключаем его в свойство routes
    }

    private function getUri() // функция считывает, что введено в адресной строке
    {
        if (!empty($_SERVER['REQUEST_URI'])) { //если строка не пустая
            return trim($_SERVER['REQUEST_URI'], '/'); // возвращаем массив и удаляем знаки с двух сторон
        }
    }

    public function run() // функция запуска Controller
    {
        $uri = $this->getUri(); // создаем переменную и передаем в нее функцию getUri()

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                //'catalog/([0-9]+)' => 'news/detail/$1/',
                // с помощью preg_replace подставляем рег выражения из routes.php к $uri
                $internalRoute = preg_replace("`$uriPattern`", $path, $uri);

                //catalog/view/3
                // с помощью функции explode из $internalRoute делаем массив
                $segments = explode('/', $internalRoute);
                // из массива $segments с помощью функции array_shift берем(вырезаем) 1 значение, добавляем Controller
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                // из массива $segments с помощью функции array_shift берем(вырезаем) 2 значение, добавляем action
                $actionName = 'action' . ucfirst(array_shift($segments));
                // остальные параметры записываем в переменную $parameters
                $parameters = $segments;
                // берем значение $controllerName и задаем ему путь
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                //если такой путь существует - подключаем его
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                // создаем новый объект $controllerName
                $controllerObject = new $controllerName;
                // Вызывает callback-функцию с массивом параметров -> переходим к Controller
                $result = call_user_func_array([$controllerObject, $actionName], $parameters);

                if ($result != null) {
                    break;
                }
            }
        }


    }

}