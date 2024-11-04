<?php

class Rentals
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllRentals()
    {
        $rentals = $this->db->prepare("        
        SELECT rentals.*, spaces.name AS space_name 
        FROM rentals 
        JOIN spaces ON rentals.space_id = spaces.id");
        $rentals->execute();
        return $rentals->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneRentals($id)
    {
        $rental = $this->db->prepare("SELECT * FROM rentals WHERE id= :id");
        $rental->bindParam(':id', $id);
        $rental->execute();
        return $rental->fetch(PDO::FETCH_ASSOC);
    }
    public function createRental($data)
    {
        $rental = $this->db->prepare("INSERT INTO rentals(space_id,customer_name,rental_date,rental_duration,total_price) VALUES (:space_id,:customer_name,:rental_date,:rental_duration,:total_price )");
        $rental->bindParam(':space_id', $data['space_id']);
        $rental->bindParam(':customer_name', $data['customer_name']);
        $rental->bindParam(':rental_date', $data['rental_date']);
        $rental->bindParam('rental_duration', $data['rental_duration']);
        $rental->bindParam(':total_price', $data['total_price']);
        $rental->execute();
    }

    public function updateRentals($id, $data)
    {
        $rental = $this->db->prepare("UPDATE rentals SET space_id = :space_id, customer_name = :customer_name, rental_date = :rental_date, rental_duration = :rental_duration, total_price = :total_price WHERE id = :id");
        $rental->bindParam(':space_id', $data['space_id']);
        $rental->bindParam(':customer_name', $data['customer_name']);
        $rental->bindParam(':rental_date', $data['rental_date']);
        $rental->bindParam(':rental_duration', $data['rental_duration']);
        $rental->bindParam(':total_price', $data['total_price']);
        $rental->bindParam(':id', $id);
        $rental->execute();
    }
}
