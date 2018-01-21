<?php

return [
    'product/([0-9]+)' => 'product/view/$1',
    'catalog/([0-9]+)/([0-9a-z=]+)' => 'product/detail/$1/$2',
    'catalog/([0-9]+)' => 'catalog/view/$1',
    '' => 'catalog/index/'
];
