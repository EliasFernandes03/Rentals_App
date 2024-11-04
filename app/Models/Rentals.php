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
        $rental = $this->db->prepare("SELECT * FROM rentals WHERE id=:id");
        $rental->execute();
        return $rental->fetchAll(PDO::FETCH_ASSOC);
    }
}
