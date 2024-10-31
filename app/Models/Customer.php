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
}
