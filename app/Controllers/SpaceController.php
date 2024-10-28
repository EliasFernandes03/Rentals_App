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

    public function listOne($id)
    {
        $space = $this->spaceModel->getOneSpace($id);
        include __DIR__ . '/../Views/spaces/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->spaceModel->createSpace($_POST);
            header('Location: /');
        } else {
            include __DIR__ . '../../Views/spaces/create.php';
        }
    }
}
