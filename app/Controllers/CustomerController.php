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
    public function createCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->customerModel->createCustomer($_POST);
            header('Location:/listCustomer');
        } else {
            include __DIR__ . '../../Views/customer/create.php';
        }
    }
    public function deleteCustomer($id)
    {
        $this->customerModel->deleteCustomer($id);
        header('Location: /listCustomer');
    }
}
