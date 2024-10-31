<?php

require_once '../app/Controllers/SpaceController.php';
require_once '../config/database.php';

$controller = new SpaceController($db);

$requestUri = $_SERVER['REQUEST_URI'];

// Array associativo para mapear rotas para métodos de forma dinâmica
$routes = [
    '#^/$#' => 'showHome',                // Rota para a página inicial
    '#^/list$#' => 'listSpaces',          // Rota para listar espaços
    '#^/create$#' => 'create',            // Rota para criar
    '#^/update/(\d+)$#' => 'update',      // Rota para atualizar, com um ID
    '#^/spaces/delete/(\d+)$#' => 'delete' // Rota para deletar, com um ID
];

$routeFound = false;

foreach ($routes as $pattern => $method) {
    if (preg_match($pattern, $requestUri, $matches)) {
        $routeFound = true;
        
        array_shift($matches);

        call_user_func_array([$controller, $method], $matches);
        break;
    }
}

if (!$routeFound) {
    echo "Route not found.";
}
