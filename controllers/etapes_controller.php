<?php

class etapes {
    private $pdo;
    private $model;
    public function __construct ()
    {
        echo "cc";
        $this->pdo = Database::connect();
        $this->model = new testModel($this->pdo);

    }
    public function getst() {
        $result = $this->model->getlist();
        //include "views/receipts/test.php";
        require_once('views/receipts/test.php');
    }
}