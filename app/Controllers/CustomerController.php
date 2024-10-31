<?php

declare(strict_types=1);

require_once __DIR__ . '../../Models/Customer.php';

class CustomerController
{
    private $customerModel;

    public function __construct($db)
    {
        $this->customerModel = new Customer($db);
    }

    public function listCustomers()
    {
        $customers = $this->customerModel->getAllCustomers();
        include __DIR__ . '../../Views/customer/index.php';
    }
}
