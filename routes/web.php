<?php

require_once '../app/Controllers/SpaceController.php';
require_once '../config/database.php';
$controller = new SpaceController($db);

if ($_SERVER['REQUEST_URI'] === '/') {
    $controller->listSpaces();
}

if ($_SERVER['REQUEST_URI'] === '/batata') {
    echo 'Oi som';
}
