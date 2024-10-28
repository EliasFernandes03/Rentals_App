<?php

require_once '../app/Controllers/SpaceController.php';
require_once '../config/database.php';

$controller = new SpaceController($db);

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/') {
    $controller->listSpaces();
} elseif ($requestUri === '/create') {
    $controller->create();
} elseif (preg_match('/^\/update\/(\d+)$/', $requestUri, $matches)) {
    $id = $matches[1];
    $controller->update($id);
} else {
    echo "Route not found.";
}
