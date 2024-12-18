<?php

require_once '../app/Controllers/SpaceController.php';
require_once '../app/Controllers/CustomerController.php';
require_once '../app/Controllers/RentalsController.php';
require_once '../config/database.php';

$spaceController = new SpaceController($db);
$customerController = new CustomerController($db);
$rentalsController = new RentalsController($db);
$requestUri = $_SERVER['REQUEST_URI'];


$routes = [
    '#^/$#' => [$spaceController, 'showHome'],
    '#^/list$#' => [$spaceController, 'listSpaces'],
    '#^/create$#' => [$spaceController, 'create'],
    '#^/update/(\d+)$#' => [$spaceController, 'update'],
    '#^/spaces/delete/(\d+)$#' => [$spaceController, 'delete'],
    '#^/listCustomer$#' => [$customerController, 'listCustomers'],
    '#^/createCustomer$#' => [$customerController, 'createCustomer'],
    '#^/customers/delete/(\d+)$#' => [$customerController, 'deleteCustomer'],
    '#^/customers/update/(\d+)$#' => [$customerController, 'updateCustomer'],
    '#^/listRentals$#' => [$rentalsController, 'getAllRentals'],
    '#^/createRentals$#' => [$rentalsController, 'createRental'],
    '#^/rentals/update/(\d+)$#' => [$rentalsController, 'updateRental'],
    '#^/rentals/delete/(\d+)$#' => [$rentalsController, 'deleteRentals'],
];

$routeFound = false;

foreach ($routes as $pattern => $handler) {
    if (preg_match($pattern, $requestUri, $matches)) {
        $routeFound = true;

        array_shift($matches);

        call_user_func_array($handler, $matches);
        break;
    }
}

if (!$routeFound) {
    echo "Route not found.";
}
