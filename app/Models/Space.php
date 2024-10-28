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
}
