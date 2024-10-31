<?php

class Customer
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllCustomers()
    {
        $customers = $this->db->prepare("SELECT * FROM customers");
        $customers->execute();
        //Retorna um array associativo
        return $customers->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createCustomer($data)
    {
        $customer = $this->db->prepare("INSERT INTO customers(name,email,phone) VALUES (:name,:email,:phone )");
        $customer->bindParam(':name', $data['name']);
        $customer->bindParam(':email', $data['email']);
        $customer->bindParam(':phone', $data['phone']);
        $customer->execute();
    }
    
    public function getOneCustomer($id)
    {
        $customer = $this->db->prepare("SELECT * FROM customers WHERE id=:id");
        $customer->bindParam(':id', $id);
        $customer->execute();
        return $customer->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteCustomer($id)
    {
        $customer = $this->db->prepare("DELETE from customers WHERE id=:id");
        $customer->bindParam(':id', $id);
        $customer->execute();
    }

    public function updateCustomer($id, $data)
    {
        $customer = $this->db->prepare("UPDATE customers SET name = :name, email = :email, phone = :phone WHERE id = :id");
        $customer->bindParam(':name', $data['name']);
        $customer->bindParam(':email', $data['email']);
        $customer->bindParam(':phone', $data['phone']);
        $customer->bindParam(':id', $id);
        $customer->execute();
    }
}
