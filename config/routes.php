<?php

return [
    'news/([0-9]+)' => 'news/view/$1',
//    'catalog/([0-9]+)/([0-9a-z=]+)' => 'news/detail/$1/$2',
    'catalog/([0-9]+)' => 'catalog/view/$1',
    'contact/save'=> 'contact/view',
    'contact' => 'contact/index',
    '' => 'catalog/index/'
];
