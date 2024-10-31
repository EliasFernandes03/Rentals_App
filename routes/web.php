<?php

require_once '../app/Controllers/SpaceController.php';
require_once '../config/database.php';

$controller = new SpaceController($db);

$requestUri = $_SERVER['REQUEST_URI'];

if($requestUri === '/'){
    $controller->showHome();
}elseif ($requestUri === '/list') {
    $controller->listSpaces();
} elseif ($requestUri === '/create') {
    $controller->create();
} elseif (preg_match('/^\/update\/(\d+)$/', $requestUri, $matches)) {
    $id = $matches[1];
    $controller->update($id);
} elseif (preg_match('/^\/spaces\/delete\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $controller->delete($matches[1]);
}  else {
    echo "Route not found.";
}
