<?php

    require __DIR__ . '/vendor/autoload.php';

    echo (new \Kairos\Router)->index();

    $route = $_SERVER['PATH_INFO'] ?? '/';

    if ($route == '/') {
        echo 'Estamos na Homepage';
    } elseif ($route == '/projects') {
        echo 'Estamos listando os projetos';
    } else {
        echo 'Pagina nao encontrada';
    }