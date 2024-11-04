<?php

declare(strict_types=1);

require_once __DIR__ . '../../Models/Rentals.php';

class RentalsController
{
    private $rentalsModel;

    public function __construct($db)
    {
        $this->rentalsModel = new Rentals($db);
    }

    public function getAllRentals()
    {
        $rentals = $this->rentalsModel->getAllRentals();
        include __DIR__ . '../../Views/rentals/index.php';
    }
}
