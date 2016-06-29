<?php

require_once './handler/database.php';
require_once './models/testModel.php';

class etapes {
    private $pdo;
    private $model;
    public function __construct ()
    {
        $this->pdo = Database::connect();
        $this->model = new testModel($this->pdo);

    }
    public function getst() {
        $result = $this->model->getlist();
        include "./views/templates/test.php";
    }
}