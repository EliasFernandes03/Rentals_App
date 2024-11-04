<?php

declare(strict_types=1);

require_once __DIR__ . '../../Models/Rentals.php';
require_once __DIR__ . '../../Models/Space.php';
class RentalsController
{
    private $rentalsModel;
    private $spaceModel;

    public function __construct($db)
    {
        $this->rentalsModel = new Rentals($db);
        $this->spaceModel = new Space($db);
    }

    public function getAllRentals()
    {
        $rentals = $this->rentalsModel->getAllRentals();
        include __DIR__ . '../../Views/rentals/index.php';
    }

    public function createRental()
    {
        $spaces = $this->spaceModel->getAllSpaces();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->rentalsModel->createRental($_POST);
            header('Location:/listRentals');
        } else {
            include __DIR__ . '../../Views/rentals/create.php';
        }
    }
}