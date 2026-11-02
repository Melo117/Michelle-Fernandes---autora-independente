<?php
$routes = [
    'home' => __DIR__ . '/public/pages/home.php',
    'sobre' => __DIR__ . '/public/pages/sobre.php',
    'livro' => __DIR__ . '/public/pages/livro.php',
    'textos' => __DIR__ . '/public/pages/textos.php',
    'contato' => __DIR__ . '/public/pages/contato.php',
];

$route = $_GET['page'] ?? 'home';

if (!isset($routes[$route])) {
    http_response_code(404);
    exit('Página não encontrada.');
}

require_once $routes[$route];
