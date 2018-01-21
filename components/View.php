<?php

class View
{
    private $content;

    public function __set($name, $value) // магическй функция __set
    {
        $this->{$name} = $value;
    }

    /**
     * Render View
     *
     * @param string $templateView Path to template
     * @param strung $mainView Path to main view
     */
    function generate ($templateView, $mainView) // функция проверяет установлен ли вид и шаблон
    {
        if (!$mainView){
            echo 'Вид не установлен'; die;
        }

        $this->content = $this->getRenderedHTML('views/' . $mainView); // если установлен записуем данные в свойство content

        if(!$templateView){
            echo 'Установите шаблон'; die;
        }

        include 'views/layouts/' . $templateView;
    }

    public function getRenderedHTML ($path) //
    {
        ob_start();
        include ($path);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }

}