<?php

declare(strict_types=1);
require_once __DIR__ . '/../Models/Space.php';


class SpaceController
{
    private $spaceModel;

    public function __construct($db)
    {
        $this->spaceModel = new Space($db);
    }

    public function listSpaces()
    {
        $spaces = $this->spaceModel->getAllSpaces();
        include __DIR__ . '/../Views/spaces/index.php';
    }
}
