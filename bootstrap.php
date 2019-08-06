<?php

require __DIR__ . '/vendor/autoload.php';

$route = new Kairos\Framework\Router;

$route->add('/', function () {
    return 'estamos na homepage';
});

$route->add('/products', function () {
    return 'estamos na pagina de produtos';
});

echo $route->run();
