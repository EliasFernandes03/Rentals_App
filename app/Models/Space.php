<?php

class Space
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function getAllSpaces()
    {
        $spaces = $this->db->prepare("SELECT * FROM spaces");
        $spaces->execute();
        return $spaces->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneSpace($id)
    {
        $space = $this->db->prepare("SELECT * FROM spaces WHERE id= :id");
        $space->bindParam(':id', $id);
        $space->execute();
        return $space->fetch(PDO::FETCH_ASSOC);
    }

    public function createSpace($data)
    {

        $space = $this->db->prepare("INSERT INTO spaces(name,description,price) VALUES (:name,:description,:price )");
        $space->bindParam(':name', $data['name']);
        $space->bindParam(':description', $data['description']);
        $space->bindParam(':price', $data['price']);
        $space->execute();
    }

    public function updateSpace($id, $data)
    {
        $space = $this->db->prepare("UPDATE spaces SET name = :name, description = :description, price = :price WHERE id = :id");
        $space->bindParam(':name', $data['name']);
        $space->bindParam(':description', $data['description']);
        $space->bindParam(':price', $data['price']);
        $space->bindParam(':id', $id);
        $space->execute();
    }

    public function deleteSpace($id)
    {
        $space = $this->db->prepare("DELETE FROM spaces WHERE id=:id");
        $space->bindParam(':id', $id);
        $space->execute();
    }
}
